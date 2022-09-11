<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
// use Image;

class DashboardController extends Controller
{
    public function index(){
    	return view('user.dashboard');
    }

  

   

   

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'message'=>'Successfully User Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('login')->with($notification);    
    }

  
    
   

 

   




}
