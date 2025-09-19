<!-- <div class="app_modal modal fade" id="{{isset($modal_id)?$modal_id:'appModel'}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-black">
            <div class="modal-header app_bar py-2">
                <h5 class="modal-title fs-6" id="mainModalLabel">{{isset($modal_head)?$modal_head:'Header'}}</h5>
                <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>
            <div class="modal-body app_modal_body">
                @if(isset($modal_body))
                {!! $modal_body !!}
                @endif
            </div>

            <div class="modal-footer">
                <a href="javascript:0" type="submit" class="btn modal_action_btn">Save</a>
            </div>
        </div>
    </div>
</div> -->



<div class="app_custom_modal flex flex-col" style="display:none;">
    <div class="app_modal_body md:h-[50%] h-full justify-start col-md-5 p-5 app_col app_content_box relative">
        <a href="javascript:void(0)" class="btn-close btn-sm absolute right-[5px] top-[5px]">
            <span class="MuiIconButton-label"><img src="https://assets-cloud.landmarkshops.in/website_images/static-pages/brand_exp/brand2images/icons/close-black-24.svg" alt=""></span>
        </a>  
        <div class="col-md-10">
            <h2>Sign up or Sign in</h2>
            <div>Enjoy the convenience of a single account across all participating brands</div>
            <div class="app_input_box">
                <label for="phone">Mobile Number</label>
                <div class="">
                    <span class="px-1 py-2 border-r-1 border-[#1a1a1a]">+91</span>
                    <input class="px-1 py-2" type="text" name="phone" placeholder="Enter your mobile number">
                </div>
            </div>
            <div>By creating your account you agree to our <span class="app_span_color">Terms and Conditions</span></div>
            <div class="flex justify-end">
                <a href="javascript:void(0)" class="app_btn">Continue</a>
            </div>
        </div>
    </div>
</div>