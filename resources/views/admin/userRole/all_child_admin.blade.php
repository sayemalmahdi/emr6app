@extends('admin.master')

@section('title',"ALL CHILD ADMIN")

@section('dashboardContent')
<div id="page-wrapper">
  <div class="main-page">
       
          
          <br>
         

         <div class="card pd-20 pd-sm-40">
          <!-- <h6 style="" class="card-body-title"><strong>Create New Child Admin</strong>  </h6> <br><br> -->
         
         <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">All Child Admin List
          	<a href="{{ route('admin.create.admin') }}" class="btn btn-sm btn-warning" style="float: right;" >Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Access</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>
                      @if($row->admins == 1)
                  	     <span class="badge badge-danger">Admins</span>
                      @else
                      @endif   

                      @if($row->settings == 1)
                         <span class="badge badge-success">Settings</span>
                      @else
                      @endif 

                      @if($row->prescriptions == 1)
                         <span class="badge badge-info">Prescriptions</span>
                      @else
                      @endif 

                     

                      

                  </td>
                  <td>
                  	<a href="{{ URL::to('admin/edit/child/admin/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
                  	<a href="{{ URL::to('admin/delete/child/admin/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
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
