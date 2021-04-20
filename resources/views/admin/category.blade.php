
@extends('layouts.admin')

@section('content')
<style>
     .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
</style>
  <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Category</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-12">
                     
                      <div class="card">
                          <div class="card-body">
                              <h2 class="card-title">Category</h2>
                              <a href="addcategory" class="btn btn-dark mt-2 mb-2">Add New Category</a>
                              <div class="table-responsive">
                                  <table id="zero_config" class="table table-striped table-bordered">
                                      <thead>
                                          <tr class="bg-cyan">
                                              <th> <h6 class="text-light">Category Id</h6></th>
                                              <th> <h6 class="text-light">Category Name</h6></th>
                                              <th> <h6 class="text-light">Category Image</h6></th>
                                              <th> <h6 class="text-light">Edit</h6></th>
                                              <th> <h6 class="text-light">Delete</h6></th>        
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                             <td>Nokia</td>
                                              <td><a href="#"><img style="height:60px;width:60px;" src="assets/images/background/img4.jpg"></a></td>
                                          
                                              <td><a href="editcategory" class="btn btn-primary">Edit</a></td>
                                              <td><button class="btn btn-danger">Delete</button></td>

                                          </tr>
                                        
                                          
                                          <tr>
                                              <td>1</td>
                                             <td>Nokia</td>
                                              <td><a href="#"><img style="height:60px;width:60px;" src="assets/images/background/img4.jpg"></a></td>
                                          
                                              <td><a href="editcategory" class="btn btn-primary">Edit</a></td>
                                              <td><button class="btn btn-danger">Delete</button></td>

                                          </tr>
                                     
                                          <tr>
                                              <td>1</td>
                                              <td>Nokia</td>
                                               <td><a href="#"><img style="height:60px;width:60px;" src="assets/images/background/img4.jpg"></a></td>
                                           
                                               <td><a href="editcategory" class="btn btn-primary">Edit</a></td>

                                               <td><button class="btn btn-danger">Delete</button></td>
                                          </tr>   
                                      </tbody>
                                      <tfoot>
                                        
                                      </tfoot>
                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->

@endsection