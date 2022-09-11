<?php

namespace App\Http\Controllers\Admin\UserRole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function CreateAdmin(){
    	return view('admin.userRole.create_admin');
    }

    public function StoreAdmin(Request $request)
    {
    	 $data=array();
    	 $data['role_id']=1;
    	 $data['name']=$request->name;
    	 $data['username']=$request->username;
    	 $data['phone']=$request->phone;
    	 $data['email']=$request->email;
    	 $data['password']= Hash::make($request->password);
    	 
    	 
    	 $data['admins']=$request->admins;
    	 
    	 $data['settings']=$request->settings;
         
         $data['type']=2;
    	 DB::table('users')->insert($data);
    	 $notification=array(
                 'message'=>'Child Admin Create Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function AllChildAdmin()
    {
         $user=DB::table('users')->where('type',2)->get();
         return view('admin.userRole.all_child_admin',compact('user'));
    }

    public function DeleteChildAdmin($id)
    {
         DB::table('users')->where('id',$id)->delete();
         $notification=array(
                 'message'=>'Child Admin Delete Successfully',
                 'alert-type'=>'success'
                       );
         return Redirect()->back()->with($notification);
    }

    public function EditChildAdmin($id)
    {
         $user=DB::table('users')->where('id',$id)->first();
         return view('admin.userRole.edit_child_admin',compact('user'));
    }

    public function UpdateChildAdmin(Request $request)
    {
         $id=$request->id;
         $data=array();
         $data['name']=$request->name;
         $data['username']=$request->username;
         $data['phone']=$request->phone;
         $data['email']=$request->email;
         $data['admins']=$request->admins;
         $data['settings']=$request->settings;

         DB::table('users')->where('id',$id)->update($data);
         $notification=array(
                 'message'=>'Child Admin Update Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->route('admin.all.child.admin')->with($notification);


    }



    


    
}
