<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Doctor;
use DB;
class DoctorController extends Controller
{
    public function index(){
        $act ="doc";
        $doct =Doctor::all();
        return view('addDoctorsInfo',compact('doct','act'));
    }

    public function find(Request $request){
        $doct =Doctor::all();
        $act ="doc";
        $doc=Doctor::where('dNameEn', '=',$request->doc)->firstOrFail();

        return view('addDoctorsInfo',compact('doct','doc','act'));
    }

    public function addDoctorsFunction(Request $request){

        $doc =Doctor::findorfail($request->id);
        $doc->dNameEn = $request->dNameEn;
        $doc->dNameBn = $request->dNameBn;
        $doc->vTimeEn = $request->vTimeEn;
        $doc->vTimeBn = $request->vTimeBn;
        $doc->designationEn = $request->designationEn;
        $doc->designationBn = $request->designationBn;
        $doc->addressEn = $request->addressEn;
        $doc->addressBn = $request->addressBn;
        $doc->phoneEn = $request->phoneEn;
        $doc->phoneBn = $request->phoneBn;
        $doc->save();

        $notification = array(
        	'message' => 'Informations Updated Successfully!',
        	'alert-type' => 'success'
        );
         return Redirect()->route('Doctor.Page')->with($notification);
    }
}
