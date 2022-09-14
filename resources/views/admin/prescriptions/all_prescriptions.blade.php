@extends('admin.master')

@section('title',"ALL PRESCRIPTION")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
         
         <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">All Prescriptions List
          	<a href="{{ route('admin.create.prescriptions') }}" class="btn btn-sm btn-warning" style="float: right;" >Add New Prescriptions</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <!-- <thead>
                <tr>
                  <th class="wd-15p">F Name</th>
                  <th class="wd-15p">L Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Date Of Birth</th>
                  <th class="wd-15p">patient_weight</th>
                  <th class="wd-15p">blood_pressure</th>
                  <th class="wd-15p">pulse</th>
                  <th class="wd-15p">patient_complaint</th>
                  <th class="wd-15p">notes</th>
                  <th class="wd-15p">duration</th>
                  <th class="wd-15p">investigation_name</th>
                  <th class="wd-15p">instrustion</th>
                  <th class="wd-15p">diagnosis_name</th>
                  <th class="wd-15p">comment</th>
                  <th class="wd-15p">visit_after_days</th>
                  <th class="wd-15p">medicines</th>
                  
                  <th class="wd-20p">Action</th>
                </tr>
              </thead> -->
              <thead>
                <tr style="text-align: center;">
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">First Name</th>
                  <th class="wd-15p">Last Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Date Of Birth</th>
                  <th class="wd-15p">patient_weight</th>
                  <th class="wd-15p">visit_after_days</th>                 
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($prescription as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->firstname }}</td>
                  <td>{{ $row->lastname }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->dob }}</td>
                  <td>{{ $row->patient_weight }}</td>
                  <td>{{ $row->visit_after_days }}</td>
                 
                  
                  <td>
                    <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  	<a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                  	<a href="{{ URL::to('admin/delete/prescription/'.$row->id) }}" class="btn btn-sm btn-warning" id="delete"><i class="fa fa-trash"></i></a>

                    @if($row->status == 1)
                      <a href="{{ URL::to('admin/active/prescription/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @else                    
                      <a href="{{ URL::to('admin/inactive/prescription/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @endif

                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
          
          
        </div><!-- card -->


          <!-- <button type="submit" class="btn btn-primary">Create</button> -->
        </form>
       
      

  </div>
</div>


@endsection
