
<div class="flex flex-row justify-center relative">
  @foreach($category as $cat)
    @include('includes.navItem',['category'=>$cat->name])
  @endforeach
  {{-- @include('includes.navItem',['category'=>'Women'])
  @include('includes.navItem',['category'=>'Kids']) --}}
</div>