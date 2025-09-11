
<!-- banner part start-->
<div class="flex flex-row align-items-center overflow-x-auto overflow-hidden w-full h-[70vh] app_scroller">
    @foreach([1,2,3,4] as $i)
    <!-- <div class="min-w-full bg-cover bg-center h-[70vh] d-flex" style="background-image: url('{{asset('img')}}/banner/banner-{{$i}}.jpg');"> -->

        <img src="{{asset('img')}}/banner/banner-{{$i}}.jpg" alt="" srcset="" class="min-w-full">
    <!-- </div> -->
    @endforeach
</div>
<!-- banner part start-->