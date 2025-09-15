
<!-- banner part start-->
<div class="flex flex-row items-start overflow-x-auto overflow-hidden w-full app_scroller">
    <!-- <img src="{{asset('img')}}/banner/banner.jpeg" alt="" srcset="" class="min-w-full"> -->
    @foreach([1,2,3,4] as $i)
    <!-- <div class="min-w-full bg-cover bg-center h-[70vh] d-flex" style="background-image: url('{{asset('img')}}/banner/banner-{{$i}}.jpg');"> -->

        <!-- <img src="{{asset('img')}}/banner/banner-{{$i}}.jpg" alt="" srcset="" class="min-w-full"> -->
    <img src="https://picsum.photos/id/{{rand(111,999)}}/900/300" alt="" srcset="" class="min-w-full">
    <!-- </div> -->
    @endforeach
</div>
<!-- banner part start-->