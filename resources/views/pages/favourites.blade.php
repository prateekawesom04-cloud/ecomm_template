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
                        </tr>
                        </thead>
                        <tbody id="cart_items">
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                @include('includes.checkout')
            </div> -->
        </div>
  </section>
  <!--================End Cart Area =================-->

@endsection


@section('js')

<script>

    function renderTable(){
        let userLocalStorage = getLocalStorage('userLocalStorage');
        let table = ``;
        $.each(userLocalStorage.favourites,function(key,product){
            
            table += `
                <tr>
                    <td>
                    <a href="{{url('product')}}/${product.product_id}" class="media">
                        <div class="d-flex">
                        <img src="${product.image}" alt="" style="width: 9rem;" />
                        </div>
                        <div class="media-body">
                        <p>${product.title}</p>
                        </div>
                    </a>
                    </td>
                    <td>
                    <h5>${product.price}</h5>
                    </td>
                    <td>
                        <a class="delteItem block w-7" href="javascript:void(0)" data-product_id="${product.product_id}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.755 20.283 4 8h16l-1.755 12.283A2 2 0 0 1 16.265 22h-8.53a2 2 0 0 1-1.98-1.717zM21 4h-5V3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z"/></svg>
                        </a>
                    </td>
                </tr>
            `;
            console.log('table--',table);
            
        });
            
        $('#cart_items').html(table);
    }
    
    
    $(document).ready(function(){
        renderTable();
    });
    
    
    $('body').on('click','.delteItem',function(){
        deleteFavouritesItem($(this).attr('data-product_id'));
        renderTable();
    });

</script>

@endsection