@extends('admin.master')

@section('title',"View Prescription")

@section('dashboardContent')

<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
          <p class="mg-b-20 mg-sm-b-30" style="padding-left: 15px">
             
                @if(Auth::user()->prescriptions == 1)
              		<a href="{{ route('admin.all.prescriptions') }}" class="btn btn-sm btn-warning" style="float: right;" >All Prescriptions</a>
                @else
                	<h6 class="card-body-title">
                		<a href="#" class="btn btn-danger btn-sm pull-right">You are not allow to access All Prescription</a></h6>
                @endif
          </p> 
          <br><br>
          
         








          
        <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Patient First Name : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->firstname }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Patient Last Name : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->lastname }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Phone : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->phone }}</strong>
                </div>
              </div>

           </div>
	    </div>


       <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Date of Birth : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->dob }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Patient Weight : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->patient_weight }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Blood Pressure : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->blood_pressure }}</strong>
                </div>
              </div>

           </div>
	    </div>


	    <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Pulse : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->pulse }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Patient Complaint : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->patient_complaint }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Notes : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->notes }}</strong>
                </div>
              </div>

           </div>
	    </div>


	    <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Duration : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->duration }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Investigation Name : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->investigation_name }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Instrustion : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->instrustion }}</strong>
                </div>
              </div>

           </div>
	    </div>

	    <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Diagnosis Name : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->diagnosis_name }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Comment : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->comment }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Visit after__days : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->visit_after_days }}</strong>
                </div>
              </div>

           </div>
	    </div>



	    <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Medicines : <span class="tx-danger"></span></label>
                  <strong>{{ $prescription->medicines }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label"> <span class="tx-danger"></span></label>
                  <strong></strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label"> <span class="tx-danger"></span></label>
                  <strong></strong>
                </div>
              </div>

           </div>
	    </div>


	  </div>
	</div>
<!-- <br><br><br><br> -->
<br><br>
@endsection
