@extends('master')

@section('body')

<div class="flex flex-row items-start justify-evenly p-6 gap-3 my-3">
    <div class="app_filters flex flex-col items-center w-1/4">
        <div class="mb-4 text-2xl font-semibold text-start w-full">Filters</div>
        <div class="app_filter flex flex-col items-center w-full">
            <div class="flex flex-row items-center justify-between w-full">
                <h3 class="font-semibold flex flex-row items-center">
                    <div style="background-color: rgb(199, 203, 212);" class="h-[6px] w-[6px] rounded-full mr-2"></div>    
                    Category
                </h3>
                <div class="arrow_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" style="font-size: 20px;" class=" " stroke="none"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 8.5 7 7 7-7"></path></svg>
                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-row flex-wrap items-center w-2/3">
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 max-h-450px p-4 gap-3">
            <a class="w-full flex items-center h-full" href="{{route('pages.product')}}">
                <img class="w-full" src="https://unblast.com/wp-content/uploads/2018/11/Vertical-Product-Box-Mockup-1-1600x1200.jpg" alt="" srcset="">
            </a>
            <div class="flex flex-col w-full">
                <h3 class="product_name">Bewakoof@</h3>
                <div class="prod_description text-m">Product description</div>
                <div class="prod_amount_details w-full flex flex-row items-center justify-start gap-3">
                    <div class="prod_amount">$ 4</div>
                    <div class="prod_amount_prev">$ 10</div>
                    <div class="prod_amount_off">58%</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection