@extends('admin.master')

@section('body')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
            </button>
        </div> --}}
    </div>

    <div class="p-2">
        <div class="app_card">
            @include('admin.includes.productForm')
            <div class="row">
                <div class="col-md-6"></div>
                <div class="form-group flex justify-end col-md-6">
                    <a href="javascript:void(0)" class="btn app_btn product_action">Submit</a>
                </div> 
            </div>
        </div>
    </div>
    <div class="my-2">
        @include('admin.pages.category')
    </div>

@endsection

@section('js')

    <script>
        $('.product_action').on('click',function(){
            // $('form').submit();
            if($(this).hasClass('disabled')){
                responseToast('please wait...','bg-warning');
                return false;
            }
            $(this).addClass('disabled');
            let formData = new FormData($('#updateProduct')[0]);
            callApiFormData('post',`{{route('post.updateProducts','0')}}`,formData,updateProduct);
        });
        
        $('.category_action').on('click',function(){
            if($(this).hasClass('disabled')){
                responseToast('please wait...','bg-warning');
                return false;
            }
            $(this).addClass('disabled');
            let formData = new FormData($('#updateCategory')[0]);
            callApiFormData('post',`{{route('post.category','0')}}`,formData,updateProduct);
        });
        
        function updateProduct(res){
            if(res.code==200){
                window.location.href = "{{route('admin.pages.products')}}";
            } else{
                ajaxResponse(res);
            }

        }
    </script>

@endsection