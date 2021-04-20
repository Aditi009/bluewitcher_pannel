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
                            <form class="form-horizontal" action="editmyorder" method="POST">
                                @csrf


                                    <h4 class="card-title">Edit Order</h4>
                                    <input name="id" value="{{$order->id}}" hidden>
                                    <div class="form-group row">
                                        <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_name" class="form-control" id="product_name" value="{{$order->productName}}" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author_id" class="col-sm-3 text-right control-label col-form-label">Author Id</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="author_id" class="form-control" id="author_id" placeholder="AuthorID" value="{{$order->autherId}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author_name" class="col-sm-3 text-right control-label col-form-label">Author Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="author_name" class="form-control" id="author_name" placeholder="Author Name" value="{{$order->autherName}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sold_price" class="col-sm-3 text-right control-label col-form-label">Sold Price</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="sold_price" class="form-control" id="sold_price" placeholder="Sold Price" value="{{$order->soldPrice}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_price" class="col-sm-3 text-right control-label col-form-label">Product Price</label>
                                        <div class="col-sm-9">
                                            <input type="Number" name="product_price" class="form-control" id="product_price" value="{{$order->productPrice}}" placeholder="Product Price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="currency" class="col-sm-3 text-right control-label col-form-label">Currency</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="currency" class="form-control" id="currency" value="{{$order->currency}}" placeholder="currency">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="date" class="form-control" id="date" value="{{$order->date}}" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cutomere_id" class="col-sm-3 text-right control-label col-form-label">Customer Id</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="customer_id" class="form-control" id="customer_id" value="{{$order->customerId}}" placeholder="customer_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="customer_mobile" class="col-sm-3 text-right control-label col-form-label">Customer Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="customer_mobile" class="form-control" id="customer_mobile" value="{{$order->customerPhone}}" placeholder="Customer Mobile">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone No(optional)</label>
                                        <div class="col-sm-9">
                                            <input type="tel" name="phone" class="form-control" id="phone" value="{{$order->phone}}" placeholder="Phone No">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="customer_email" class="col-sm-3 text-right control-label col-form-label">Customer Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="customer_email" class="form-control" id="customer_email" value="{{$order->customerEmail}}" placeholder="Customer Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="customer_skype" class="col-sm-3 text-right control-label col-form-label">Customer Skype</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="customer_skype" class="form-control" id="customer_skype" value="{{$order->customerSkype}}" placeholder="Customer Skype">
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" namde="edit_submit" class="btn btn-primary">Edit Order</button>
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
      @endsection
