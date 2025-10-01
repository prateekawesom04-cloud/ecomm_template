
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Category</h1>

    </div>
    <div class="p-2">
        <div class="app_card">
            <form id="updateCategory" class="updateCategory row" enctype="multipart/form-data">
                <div class="form-group col-md-6">
                    <label for="usr">Name</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{isset($product->title)?$product->title:''}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="pwd">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{isset($product->description)?$product->description:''}}">
                </div>
            </form>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="form-group flex justify-end col-md-6">
                    <a href="javascript:void(0)" class="btn app_btn category_action">Submit</a>
                </div> 
            </div>
        </div>
    </div>
