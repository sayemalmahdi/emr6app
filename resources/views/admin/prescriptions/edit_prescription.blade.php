@extends('admin.master')

@section('title',"Edit-Prescription")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
          <p class="mg-b-20 mg-sm-b-30" style="padding-left: 15px">
              <strong>Edit Prescription</strong>
              <a href="{{ route('admin.all.prescriptions') }}" class="btn btn-sm btn-warning" style="float: right;" >All Prescriptions</a>
          </p> <br>
           <form action="{{ url('admin/update/prescription/'.$prescription->id) }}" method="post" >
          @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Patient First Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname"  required="" value="{{ $prescription->firstname }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Patient Last Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  required=""
                    value="{{ $prescription->lastname }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="" value="{{ $prescription->phone }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="dob"  required="" value="{{ $prescription->dob }}">
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
                  <input class="form-control" type="text" name="patient_weight"  required="" value="{{ $prescription->patient_weight }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Blood Pressure: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="blood_pressure"  required="" value="{{ $prescription->blood_pressure }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Pulse: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pulse"  required="" value="{{ $prescription->pulse }}">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->



            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Patient Complaint: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="patient_complaint"  required="" value="{{ $prescription->patient_complaint }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Notes: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="notes"  required="" value="{{ $prescription->notes }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="duration"  required="" value="{{ $prescription->duration }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Investigation Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="investigation_name"  required="" value="{{ $prescription->investigation_name }}">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->




           <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Instrustion: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="instrustion"  required="" value="{{ $prescription->instrustion }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Diagnosis Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="diagnosis_name"  required="" value="{{ $prescription->diagnosis_name }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Comment: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="comment"  required="" value="{{ $prescription->comment }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Visit after__days: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="visit_after_days"  required="" value="{{ $prescription->visit_after_days }}">
                </div>
              </div><!-- col-4 -->
           </div><!-- row -->



           <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label"> Medicines: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="medicines"  required="" value="{{ $prescription->medicines }}">
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


            <br>
            <span></span>
            <div class="form-layout-footer" >
              <button style="margin-left: -257px" class="btn btn-success mg-r-5" type="submit">Update</button>
            </div>
            <!-- form-layout-footer -->


          </div><!-- form-layout -->
          </form>
        </div><!-- card -->


          <!-- <button type="submit" class="btn btn-primary">Create</button> -->
      
       
      

  </div>
</div>
<br><br>

@endsection
