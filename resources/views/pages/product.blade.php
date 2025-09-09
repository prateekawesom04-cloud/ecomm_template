@extends('master')

@section('body')

    <div class="row items-start justify-start w-full">
        <div class="prod_view flex flex-row col-lg-6 gap-3">
            <div class="w-1/6 flex flex-col items-center gap-2">
                <div class="">
                    <img src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" class="rounded-xl w-12 h-18">
                </div>
                <div class="">
                    <img src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" class="rounded-xl w-12 h-18">
                </div>
                <div class="">
                    <img src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" class="rounded-xl w-12 h-18">
                </div>
                <div class="">
                    <img src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" class="rounded-xl w-12 h-18">
                </div>
            </div>
            <div class="w-5/6">
                <img class="w-full rounded-xl" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="prod_description col-lg-6 flex flex-col gap-2">
            <h3 class="product_name">Bewakoof@</h3>
            <div class="prod_description text-m">Product description</div>
            <div class="flex flex-row justify-between items-center">
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
                <div class="prod_rating flex flex-row items-center justify-between rounded-xl border-solid border-1 border-gray-300 p-1 px-2">
                    <span class="mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 12 12" style="height: 16px; width: 16px;" class=" " stroke="none"><path fill="#FFD232" d="M5.58 1.15a.5.5 0 0 1 .84 0l1.528 2.363a.5.5 0 0 0 .291.212l2.72.722a.5.5 0 0 1 .26.799L9.442 7.429a.5.5 0 0 0-.111.343l.153 2.81a.5.5 0 0 1-.68.493L6.18 10.063a.5.5 0 0 0-.36 0l-2.625 1.014a.5.5 0 0 1-.68-.494l.153-2.81a.5.5 0 0 0-.11-.343L.781 5.246a.5.5 0 0 1 .26-.799l2.719-.722a.5.5 0 0 0 .291-.212L5.58 1.149Z"></path></svg></span> 4.5 
                </div>
            </div>
        </div>
    </div>

@endsection