@extends('master')

@section('body')

<section class="checkout_area pt-5">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            @include('includes.userDetails')
          </div>
          <div class="col-lg-4">
            
          </div>
        </div>
      </div>
    </div>
</section>

@endsection