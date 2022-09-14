@extends('admin.master')

@section('title',"Add-Prescription")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
          <p class="mg-b-20 mg-sm-b-30" style="padding-left: 15px">
              <strong>Add Prescription</strong>
              <a href="{{ route('admin.all.prescriptions') }}" class="btn btn-sm btn-warning" style="float: right;" >All Prescriptions</a>
          </p> <br>
           <form action="{{ route('admin.store.add.prescriptions') }}" method="post" >
          @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Patient First Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname"  required="" placeholder="Patient First Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Patient Last Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  required="" placeholder="Patient Last Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="" placeholder="Phone">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="dob"  required="" placeholder="Date of Birth">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->





           <div class="row mg-b-25">
              <!-- <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Gender: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  required="" placeholder="Gender">
                </div>
              </div> --><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Patient Weight: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="patient_weight"  required="" placeholder="Patient Weight">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Blood Pressure: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="blood_pressure"  required="" placeholder="Blood Pressure">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Pulse: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pulse"  required="" placeholder="Pulse">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->



            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Patient Complaint: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="patient_complaint"  required="" placeholder="Patient Complaint">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Notes: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="notes"  required="" placeholder="Notes">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="duration"  required="" placeholder="Duration">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Investigation Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="investigation_name"  required="" placeholder="Investigation Name">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->




           <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Instrustion: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="instrustion"  required="" placeholder="Instrustion">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Diagnosis Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="diagnosis_name"  required="" placeholder="Diagnosis Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Comment: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="comment"  required="" placeholder="Comment">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Visit after__days: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="visit_after_days"  required="" placeholder="Visit after__days">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->



           <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Medicines: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="medicines"  required="" placeholder="Medicines">
                </div>
              </div><!-- col-4 -->
              <!-- <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="username"  required="" placeholder="User Name">
                </div>
              </div> --><!-- col-4 -->
              <div class="col-lg-3">
                
           </div><!-- row -->


        
           

            <hr>


            <br><div class="form-layout-footer" style="padding-left: 18px;">
              <button class="btn btn-info mg-r-5" type="submit">Create </button>
            </div>
            <!-- form-layout-footer -->


          </div><!-- form-layout -->
          </form>
        </div><!-- card -->


          <!-- <button type="submit" class="btn btn-primary">Create</button> -->
      
       
      

  </div>
</div>
<br><br><br><br>

@endsection
