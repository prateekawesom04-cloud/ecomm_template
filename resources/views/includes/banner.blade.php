
<!-- banner part start-->
<div class="flex flex-row align-items-center overflow-x-auto w-full">
    @foreach([1,2,3,4] as $i)
    <img src="{{asset('img')}}/banner/banner-{{$i}}.jpg" alt="" srcset="" class="w-100">
    @endforeach
</div>
<!-- banner part start-->