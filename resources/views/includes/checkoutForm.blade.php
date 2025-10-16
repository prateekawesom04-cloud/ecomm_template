
<div class="my-3 billing_details">
    <h3 class="mb-3">Shipping Details</h3>
    <form id="shipping_form" class="row shipping_form" action="{{route('post.update_shipping_details')}}" method="post" novalidate="novalidate">
        <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="first" name="fullname" required />
            <span class="placeholder" data-placeholder="Full name"></span>
        </div>
        
        <div class="col-md-6 form-group p_star">
        <input type="text" class="form-control" id="number" name="phone" maxlength="10" required />
        <span class="placeholder" data-placeholder="Phone number"></span>
        </div>
        <div class="col-md-6 form-group p_star">
        <input type="text" class="form-control" id="email" name=" email" required />
        <span class="placeholder" data-placeholder="Email Address"></span>
        </div>
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="add1" name="address" required />
        <span class="placeholder" data-placeholder="Address line"></span>
        </div>
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="area" name="area" required />
        <span class="placeholder" data-placeholder="Town/City/State"></span>
        </div>
        {{-- <div class="col-md-12 form-group p_star">
        <select class="form-control">
            <option value="District">District</option>
            <option value="District">District</option>
            <option value="District">District</option>
        </select>
        </div>
        <div class="col-md-12 form-group p_star">
        <select class="form-control">
            <option value="State">State</option>
            <option value="State">State</option>
            <option value="State">State</option>
        </select>
        </div> --}}
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="pincode" name="pincode" required />
        <span class="placeholder" data-placeholder="Pincode"></span>
        </div>
        {{-- <div class="col-md-12 form-group">
            <div class="creat_account">
                <input type="checkbox" id="f-option2" name="selector" />
                <label for="f-option2">Create an account?</label>
            </div>
        </div> --}}
        <div class="col-md-12 form-group">
            <textarea class="form-control" name="message" id="message" rows="1"
            placeholder="Order Notes"></textarea>
        </div>
        <a href="javascript:void(0)" class="btn_3 mx-auto shipping_details">Add Details</a>
    </form>
</div>