<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function signIn(Request $request){
        $rules = [
            'phone' => 'numeric|digits:10',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        if($validator->fails()){
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = $value[0];
            }
            return response()->json([
                'response'=> $errors[0],
                'code'=> '405'
            ]);
            
        } else{
            if($request->phone){
                $user = User::where('phone',$request->phone)->first();
                if(!$user){
                    $user = new User();
                    $user->phone = $request->phone;
                    $user->save();
                }
                if(Session::get('user_otp_verified')){
                    $this->setUserSession($user->username);
                }
            } else if($request->email){
                $user = User::where('email',$request->email)->first();
                if(!$user){
                    $user = new User();
                    $user->email = $request->email;
                    $user->save();
                }
                $this->setUserSession($user->username);
            } else{
                return response()->json([
                    'response'=> 'please provide username',
                    'code'=> '404'
                ]);
            }
            return response()->json([
                'response'=> 'Sign In Successfully',
                'code'=> '200'
            ]);

        }
    }

    public function setUserSession($value){
        Session::put([
            'username'=>$value
        ]);
    }
        
    public function getOtp(Request $request){
        
        $otp = random_int(100000, 999999);

        Session::put('user_otp',$otp);
        Session::put('otp_expiry_time',time() + (120));

        $data = [
            'APIKey'=>env('SMS_API_KEY'),
            // 'user'=>'awesomecart',
            // 'password'=>'Awesomecart@612',
            'senderid'=>'AWSMCT',
            'channel'=>'Trans',
            'DCS'=>0,
            'flashsms'=>0,
            'number'=>$request->phone,
            'text'=>'Your OTP is '.$otp.'. This code is valid for the next 10 min. Please enter it on the website/app for login AWESOMCART. Regards, AWSMCT',
            'route'=>'2',
            'peid'=>'1701169875173062064',
            'DLTTemplateId'=>'1707174046951830675'
        ];

        $string = http_build_query($data);

        $smsUrl = "http://bulksms.actinnsol.com/api/mt/SendSMS?".$string;

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $smsUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        }
        curl_close($ch);

        return response()->json([
            'response'=>$response
        ]);
    }

    public function verifyOtp(Request $request){
        if (time() < session('otp_expiry_time')){
            if($request->otp == Session::get('user_otp')){
                Session::put([
                    'user_otp_verified'=>True
                ]);
                return response()->json([
                    'response'=> 'otp matched',
                    'code'=>200
                ]);
            } else{
                return response()->json([
                    'response'=> 'otp mismatched'
                ]);
            }
        }
        return response()->json([
            'response'=> 'otp expired'
        ]);
    }
}
