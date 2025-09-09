@extends('master')

@section('body')

@include('includes.banner')

@endsection

@section('js')

    <script>
        $('.owl-carousel').owlCarousel({
            autoWidth: true,
            loop: true // Optional: Enable looping
        });
    </script>

@endsection