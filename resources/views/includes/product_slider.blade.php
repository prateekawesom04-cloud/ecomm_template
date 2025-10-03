
<div class="flex flex-row items-start overflow-x-auto overflow-hidden w-full scrollContainer1">

    @if($product->image)
        @foreach(json_decode($product->image) as $image)
            <img src="{{asset('storage').'/'.$image}}" alt="" srcset="" class="min-w-full">
        @endforeach
    @else

    @foreach([1,2,3,4] as $i)

    <img src="https://picsum.photos/id/23{{$i}}/400/500" alt="" srcset="" class="min-w-full">
    
    @endforeach

    @endif
</div>