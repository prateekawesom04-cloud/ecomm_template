@extends('master')

@section('body')

@include('includes.banner')

@endsection

@section('js')

    <script>

        let scrollCounter = 0;

        setInterval(() => {
            
            if(scrollCounter<3){
                scrollCounter+=1;
            } else{
                scrollCounter=0;
            }
            $('.app_scroller').animate({
                scrollLeft: scrollCounter*$('.app_scroller').innerWidth()
                // scrollLeft: $('.app_scroller').scrollLeft()+window.innerWidth
            },700);
            
            // $('.app_scroller').scrollLeft($('.app_scroller').scrollLeft()+window.innerWidth)
        }, 3000);

    </script>

@endsection