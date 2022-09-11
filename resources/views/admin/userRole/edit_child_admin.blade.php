@extends('admin.master')

@section('title',"EDIT CHILD ADMIN")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
          <p class="mg-b-20 mg-sm-b-30"><strong>Create New Child Admin</strong></p> <br><br>
           <form action="{{ route('admin.update.child.admin') }}" method="post" >
          @csrf
          <input type="hidden" name="id" value="{{ $user->id }}">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  required="" value="{{ $user->name }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="username"  required="" value="{{ $user->username }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="" value="{{ $user->phone }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email"  required="" value="{{ $user->email }}">
                </div>
              </div><!-- col-4 -->
              
             

            </div><!-- row -->
            <!-- <hr> -->


            <div class="row">

	            <div class="col-lg-4">
	                <label class="ckbox">
	                  <input type="checkbox" name="admins" value="1" <?php  if ($user->admins == 1) {
					        	echo "checked";
					  }  ?>  >
	                  <span style="color: red;">Admins</span>
	                </label>
	            </div>

            	

            </div>

            <div class="col-lg-4">
                	<label class="ckbox">
                 	 	<input type="checkbox" name="settings" value="1" <?php  if ($user->settings == 1) {
					        	echo "checked";
					  }  ?>  >
                  		<span>Settings</span>
                	</label>
            </div>

            
           

            <hr>


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
            </div>
            <!-- form-layout-footer -->


          </div><!-- form-layout -->
          </form>
        </div><!-- card -->


          <!-- <button type="submit" class="btn btn-primary">Create</button> -->
        </form>
       
      

  </div>
</div>


@endsection
