@extends('master')

@section('body')

  <!--================Cart Area =================-->
  <section class="cart_area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart_inner">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <div class="media">
                                    <div class="d-flex">
                                    <img src="img/product/single-product/cart-1.jpg" alt="" />
                                    </div>
                                    <div class="media-body">
                                    <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <h5>$360.00</h5>
                                </td>
                                <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                                    <input class="input-number" type="text" value="1" min="0" max="10">
                                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                                </div>
                                </td>
                                <td>
                                <h5>$720.00</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('includes.checkout')
            </div>
        </div>
  </section>
  <!--================End Cart Area =================-->

  

@endsection
