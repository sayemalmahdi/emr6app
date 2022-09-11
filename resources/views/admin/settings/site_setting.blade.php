<!-- I add this Bootstrap link when i made site_settings form in admin site settings and also i comment the link -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

@extends('admin.master')

@section('title',"SITE SETTING")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
        <form action="{{ route('admin.update.site.setting') }}" method="post" >
          @csrf
          <input type="hidden" name="id" value="{{ $setting->id }}">
          <br>
          <div class="row">

            <div class="col">
              <label for="exampleInputEmail1">Phone One</label>
              <input type="text" class="form-control" placeholder="Phone One" name="phone_one"  required="" value="{{ $setting->phone_one }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Phone Two</label>
              <input type="text" class="form-control" placeholder="Phone Two" name="phone_two"  required="" value="{{ $setting->phone_two }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"  required="" value="{{ $setting->email }}">
            </div>

          </div>

          <div class="row">

            <div class="col">
              <label for="exampleInputEmail1">Company Name English*</label>
              <input type="text" class="form-control" placeholder="First name" name="company_name_en"  required="" value="{{ $setting->company_name_en }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Company Name Bangla*</label>
              <input type="text" class="form-control" placeholder="First name" name="company_name_bn"  required="" value="{{ $setting->company_name_bn }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Company Address *</label>
              <input type="text" class="form-control" placeholder="First name" name="company_address"  required="" value="{{ $setting->company_address }}">
            </div>

          </div>

          <div class="row">

            <div class="col">
              <label for="exampleInputEmail1">Facebook Link*</label>
              <input type="text" class="form-control" placeholder="First name" name="facebook"  required="" value="{{ $setting->facebook }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Twitter Link*</label>
              <input type="text" class="form-control" placeholder="First name" name="twitter"  required="" value="{{ $setting->twitter }}">
            </div>

            <div class="col">
              <label for="exampleInputEmail1">Instagram Link*</label>
              <input type="text" class="form-control" placeholder="First name" name="instagram"  required="" value="{{ $setting->instagram }}">
            </div>

          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
       
      

  </div>
</div>


@endsection
