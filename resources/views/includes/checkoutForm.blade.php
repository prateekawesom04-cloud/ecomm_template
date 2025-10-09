
<div class="my-3 billing_details">
    <h3 class="mb-3">Shipping Details</h3>
    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
        <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="first" name="fullname" />
            <span class="placeholder" data-placeholder="Full name"></span>
        </div>
        
        <div class="col-md-6 form-group p_star">
        <input type="text" class="form-control" id="number" name="number" />
        <span class="placeholder" data-placeholder="Phone number"></span>
        </div>
        <div class="col-md-6 form-group p_star">
        <input type="text" class="form-control" id="email" name=" email" />
        <span class="placeholder" data-placeholder="Email Address"></span>
        </div>
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="add1" name="address" />
        <span class="placeholder" data-placeholder="Address line"></span>
        </div>
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="city" name="city" />
        <span class="placeholder" data-placeholder="Town/City"></span>
        </div>
        <div class="col-md-12 form-group p_star">
        <select class="form-control">
            <option value="1">District</option>
            <option value="2">District</option>
            <option value="4">District</option>
        </select>
        </div>
        <div class="col-md-12 form-group p_star">
        <select class="form-control">
            <option value="1">State</option>
            <option value="2">State</option>
            <option value="4">State</option>
        </select>
        </div>
        <div class="col-md-12 form-group">
        <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
        </div>
        <div class="col-md-12 form-group">
        {{-- <div class="creat_account">
            <input type="checkbox" id="f-option2" name="selector" />
            <label for="f-option2">Create an account?</label>
        </div> --}}
        </div>
        <div class="col-md-12 form-group">
            <textarea class="form-control" name="message" id="message" rows="1"
            placeholder="Order Notes"></textarea>
        </div>
    </form>
</div>