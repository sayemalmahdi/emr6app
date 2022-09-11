<!-- I add this Bootstrap link when i made site_settings form in admin site settings and also i comment the link -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

@extends('admin.master')

@section('title',"CREATE ADMIN")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
          <p class="mg-b-20 mg-sm-b-30" style="padding-left: 15px"><strong>Create New Child Admin</strong></p> <br><br>
           <form action="{{ route('admin.store.child.admin') }}" method="post" >
          @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  required="" placeholder="Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="username"  required="" placeholder="User Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="" placeholder="Phone">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email"  required="" placeholder="Email">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password <span class="tx-danger">*</span></label>
                  <input class="form-control" type="" name="password"  required="" placeholder="Password">
                </div>
              </div><!-- col-4 -->
             

            </div><!-- row -->
            <!-- <hr> -->


            <div class="row">
  	            <div class="col-lg-4">
  	                <label class="ckbox">
  	                  <input type="checkbox" name="admins" value="1">
  	                  <span style="color: red;">Admins</span>
  	                </label>
  	            </div>
                <div class="col-lg-4">
                    <label class="ckbox">
                      <input type="checkbox" name="settings" value="1">
                        <span>Settings</span>
                    </label>
                </div>
                <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="prescriptions" value="1">
                          <span>Prescriptions</span>
                      </label>
                </div>
            </div>

            

            
           

            <hr>


            <div class="form-layout-footer" style="padding-left: 18px;">
              <button class="btn btn-info mg-r-5" type="submit">Create </button>
            </div>
            <!-- form-layout-footer -->


          </div><!-- form-layout -->
          </form>
        </div><!-- card -->


          <!-- <button type="submit" class="btn btn-primary">Create</button> -->
      
       
      

  </div>
</div>


@endsection
