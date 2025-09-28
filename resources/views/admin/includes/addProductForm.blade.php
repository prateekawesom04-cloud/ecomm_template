
                <form id="addProduct" class="addProduct row" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="usr">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{isset($product->title)?$product->title:''}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pwd">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{isset($product->price)?$product->price:''}}">
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="pwd">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{isset($product->description)?$product->description:''}}">
                    </div> 
                     <div class="form-group col-md-6">
                        <label for="sel1">Select Category</label>
                        <select class="form-control" id="category_id" name="category_id" value="{{isset($product->category_id)?$product->category_id:''}}">
                            <option value='0'>Select Category</option>
                            <option value='1'>Categories</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="pwd">Stock Quantity</label>
                        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" value="{{isset($product->stock_quantity)?$product->stock_quantity:''}}">
                    </div> 
                    <div class="upload__box col-md-6">
                        {{-- <div class="upload__btn-box">
                            <div class="mb-3 upload__btn-box"> --}}
                                <label for="formFile" class="form-label">Upload Images</label>
                                <input class="form-control upload__inputfile p-0" type="file" id="image" name="image[]" accept="image/png, image/jpeg" multiple>
                            {{-- </div>
                        </div> --}}
                    </div>
                    <div class="w-full upload__img-wrap" style="display: none;">

                    </div>
                    {{-- <div class="col-md-6"></div>
                    <div class="form-group flex justify-end col-md-6">
                        <a href="javascript:void(0)" class="btn app_btn">Submit</a>
                    </div>  --}}
                </form>