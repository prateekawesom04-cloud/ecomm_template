<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
                    $user->username = rand(100,999).substr(time(),strlen(time())-4).rand(00,99);
                    $user->phone = $request->phone;
                    $user->save();
                }
                // if(Session::get('user_otp_verified')){
                //     $this->setUserSession($user->username);
                // }
                $this->setUserSession($user->username);
                
            } else if($request->email){
                Log::info('This is an informational message.'.$request->email);
                $user = User::where('email',$request->email)->first();
                if(!$user){
                    $user = new User();
                    $user->username = rand(100,999).substr(time(),strlen(time())-4).rand(00,99);
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
        Session::put('user_phone',$request->phone);
        Session::put('otp_expiry_time',time() + (120));

        // return response()->json([
        //     'message'=>$otp,
        //     'code'=>200
        // ]);
        
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

        $response = json_decode($response);

        $message = 'Something Went Wrong';
        $code = 2009;

        if(property_exists($response,'ErrorCode')){
            if($response->ErrorCode == 000){
                $code = 200;
                $message = 'Otp Sent Successfully';
            } else {
                $code = 405;
                $message = 'Your number is not valid';
            }
        } else {
            $code = 406;
            $message = 'Your number is not valid';
        }
        
        return response()->json([
            'message'=>$message,
            'code'=>$code
        ]);
    }

    public function verifyOtp(Request $request){
        if (time() < session('otp_expiry_time')){
            if($request->otp == Session::get('user_otp')){
                Session::put([
                    'user_otp_verified'=>True
                ]);
                $request = new Request();
                $request->phone = session('user_phone');
                
                return $this->signIn($request);

                return response()->json([
                    'message'=> 'otp matched',
                    'code'=>200
                ]);
            } else{
                return response()->json([
                    'message'=> 'otp mismatched'
                ]);
            }
        }
        return response()->json([
            'message'=> 'otp expired'
        ]);
    }
}
