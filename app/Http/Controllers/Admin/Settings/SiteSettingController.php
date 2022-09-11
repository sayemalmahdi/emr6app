<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function SiteSetting(){
    	$setting=DB::table('site_setting')->first();
    	return view('admin.settings.site_setting',compact('setting'));
    }

    public function UpdateSiteSetting(Request $request)
    {
    	 $id=$request->id;
    	 $data=array();
    	 $data['phone_one']=$request->phone_one;
    	 $data['phone_two']=$request->phone_two;
    	 $data['email']=$request->email;
    	 $data['company_name_en']=$request->company_name_en;
         $data['company_name_bn']=$request->company_name_bn;
    	 $data['company_address']=$request->company_address;
    	 $data['facebook']=$request->facebook;
    	 $data['youtube']=$request->youtube;
    	 $data['instagram']=$request->instagram;
    	 $data['twitter']=$request->twitter; 
    	 DB::table('site_setting')->where('id',$id)->update($data);
    	 $notification=array(
                 'message'=>'Site Setting Updated Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }



}
