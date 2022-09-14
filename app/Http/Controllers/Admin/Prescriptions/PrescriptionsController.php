<?php

namespace App\Http\Controllers\Admin\Prescriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PrescriptionsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function CreatePrescriptions(){
    	return view('admin.prescriptions.create_prescriptions');
    }

    public function StorePrescription(Request $request)
    {
    	 $data=array();
    	 $data['firstname']=$request->firstname;
    	 $data['lastname']=$request->lastname;
    	 $data['phone']=$request->phone;
    	 $data['dob']=$request->dob;
    	 $data['patient_weight']=$request->patient_weight;
    	 $data['blood_pressure']=$request->blood_pressure;
    	 $data['pulse']=$request->pulse;
    	 $data['patient_complaint']=$request->patient_complaint;
    	 $data['notes']=$request->notes;
    	 $data['duration']=$request->duration;
    	 $data['investigation_name']=$request->investigation_name;
    	 $data['instrustion']=$request->instrustion;
    	 $data['diagnosis_name']=$request->diagnosis_name;
    	 $data['comment']=$request->comment;
    	 $data['visit_after_days']=$request->visit_after_days;
    	 $data['medicines']=$request->medicines;



         $data['status']=1;
         // $data['type']=2;
    	 DB::table('prescriptions')->insert($data);
    	 $notification=array(
                 'message'=>'Prescriptions Add Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function AllPrescriptions()
    {
         $prescription=DB::table('prescriptions')->get();
         return view('admin.prescriptions.all_prescriptions',compact('prescription'));
    }

    public function Inactive($id)
    {
         DB::table('prescriptions')->where('id',$id)->update(['status'=> 1]);
         $notification=array(
                     'message'=>'Successfully Prescriptions Active ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('prescriptions')->where('id',$id)->update(['status'=> 0]);
         $notification=array(
                     'message'=>'Successfully Prescriptions Inactive ',
                     'alert-type'=>'warning'
                    );
         return Redirect()->back()->with($notification);
    }

    public function DeletePrescription($id){
        DB::table('prescriptions')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Prescription Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ViewPrescription($id){
        $prescription=DB::table('prescriptions')
                ->where('prescriptions.id',$id)
                ->first();
        return view('admin.prescriptions.view_prescription',compact('prescription'));

    }

    public function EditPrescription($id)
    {
        $prescription=DB::table('prescriptions')->where('id',$id)->first();

        return view('admin.prescriptions.edit_prescription',compact('prescription'));
    }







}
