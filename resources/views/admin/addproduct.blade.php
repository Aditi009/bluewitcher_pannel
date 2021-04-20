@extends('layouts.admin')

@section('content')
<style>
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 6px;
        left: 0px;
        font-size: 15px;
        color: rgb(153,153,153);
      }
      
      .button-wrap {
        position: relative;
      }.card {
    margin-bottom: 20px;
    padding: 10px;
}
      
      .new-button {
          display: inline-block;
          padding: 8px 12px; 
          cursor: pointer;
          border-radius: 4px;
          background-color: #60106e;
          font-size: 16px;
          color: #fff;
      }
      .fa-trash:hover
{
  opacity:0.8;
}
     
      </style>
      
      
          <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="{{ route('addproduct') }}">
                                @csrf
                                    <h4 class="card-title">Add Product</h4>
                                    <div class="form-group row">
                                        <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_name" class="form-control" id="Product_name" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_price" class="col-sm-3 text-right control-label col-form-label">Product Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Product Price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Currency" class="col-sm-3 text-right control-label col-form-label">Currency</label>
                                        <div class="col-sm-9">
                                                <select class="form-control" name="Currency" id="Currency">
                                                  <option value="{{ "id1" }}">USD</option>
                                                  <option value="{{ "id2" }}">INR</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_category" class="col-sm-3 text-right control-label col-form-label">Product Category</label>
                                        <div class="col-sm-9">
                                                <select class="form-control" name="product_category" >
                                                  <option value="{{ "id1" }}">Category1</option>
                                                  <option value="{{ "id2" }}">Category2</option>
                                                  <option value="{{ "id3" }}">Category3</option>
                                                  <option value="{{ "id4" }}">Category4</option>
                                                  <option value="{{ "id5" }}">Category5</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_feature" class="col-sm-3 text-right control-label col-form-label">Product feature & Benifits</label>
                                        <div class="col-sm-9">
                                            <textarea id="summernote"></textarea>
                                            <input type="text" name="product_features" class="product_features" id="product_features" hidden>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_description" class="col-sm-3 text-right control-label col-form-label">Short Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="summernote1"></textarea>
                                            <input type="text" name="product_description" class="product_description" id="product_description" hidden>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_discount" class="col-sm-3 text-right control-label col-form-label">Product Discount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="product_discount" placeholder="product Discount">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="demo_video" class="col-sm-3 text-right control-label col-form-label">Demo Video</label>
                                        <div class="col-sm-9">
                                            <label class ="new-button" for="demo_video"> Upload Video
                                                <input id="demo_video" name="demo_video" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author" class="col-sm-3 text-right control-label col-form-label">Name of Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="author" id="author" placeholder="Author Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="demo_user" class="col-sm-3 text-right control-label col-form-label">Demo Url(User)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="demo_user" id="demo_user" placeholder="Demo Url(Optional)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="demo_admin" class="col-sm-3 text-right control-label col-form-label">Demo Url(Admin)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="demo_admin" id="demo_admin" placeholder="Demo Url(Optional)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="free_trial" class="col-sm-3 text-right control-label col-form-label">Free Trial</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="free_trial" id="free_trial" placeholder="free trial">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="user_credential" class="col-sm-3 text-right control-label col-form-label">User Credential</label>
                                        <div class="col-sm-9">
                                            <textarea id="summernote2"></textarea>
                                            <input type="text" name="user_credential" class="user_credential" id="user_credential" hidden>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="admin_credential" class="col-sm-3 text-right control-label col-form-label" id="admin_credential">Admin Credential</label>
                                        <div class="col-sm-9">
                                            <textarea id="summernote3"></textarea>
                                            <input type="text" name="admin_credential" class="admin_credential" id="admin_credential" hidden>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sold_product" class="col-sm-3 text-right control-label col-form-label">Sold Product</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="sold_product" id="sold_product" placeholder="Sold Product">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Gallery(screenshots)</label>
                                        <div class="col-sm-9">
                                            <div class="button-wrap">
                                                <label class ="new-button" for="product_gallery"> Create Gallery
                                                <input id="product_gallery" name="product_gallery" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Gallery</label>
                                        <div class="col-sm-9">
                                            <div class="button-wrap">
                                                <i class="fa fa-trash" style="color:#FF0000;position:absolute;z-index:1;font-size:16px;"></i>
                                                <img style="height:60px;width:60px;" src="assets/images/background/img4.jpg">
                                                <i class="fa fa-trash" style="color:#FF0000;position:absolute;z-index:1;font-size:16px;"></i>
                                                <img style="height:60px;width:60px;" src="assets/images/background/img4.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Product Thumbnail</label>
                                        <div class="col-sm-9">
                                            <div class="button-wrap">
                                                <label class ="new-button" for="product_thumbnail"> Upload Image
                                                <input type="file" id="product_thumbnail" name="product_thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" id="addsubmit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                     
      
                    </div>
                    
                    
                </div>
                <!-- editor -->
               
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <script>
            $(document).ready(function()
            {
            $("#addsubmit").on('click', function()
            {
                var a=$($("#summernote").summernote("code")).html();
                $("#product_features").val(a);
                var b=$($("#summernote1").summernote("code")).html();
                $("#product_description").val(b);
                var c=$($("#summernote2").summernote("code")).html();
                $("#user_credential").val(c);
                var d=$($("#summernote3").summernote("code")).html();
                $("#admin_credential").val(d);
            });
        });
            </script>
      @endsection