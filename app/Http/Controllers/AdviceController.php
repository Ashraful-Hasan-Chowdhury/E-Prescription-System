<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Advice;
use DB;
class AdviceController extends Controller
{
    public function index(){
        $act = "ad";
        $advice=Advice::orderBy('advice', 'asc')->get();
        $i=0;
        return view('addAdvices',compact('advice','i','act'));
    }

    public function update(Request $request,$id){
        $advice = Advice::findorfail($id);
        $adviceupdate="adviceupdate".$id;
        $advice->advice = $request->$adviceupdate;
        $advice->save();
        $notification = array(
        	'message' => 'Advice Updated Successfully!',
        	'alert-type' => 'success'
        );
        return Redirect()->route('Advice.Page')->with($notification);

    }
    public function search(Request $request){
        $act = "ad";
        $advice = Advice::where('advice', '=',$request->adviceSearch)->paginate(10);
        $i=0;
        // return response()->json($medicine);
        return view('addAdvices',compact('advice','i','act'));
    }

    public function destroy(Request $request,$id){
        $advice=Advice::findorfail($id);
        $advice->delete();
        $notification = array(
            'message' => 'Advice Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Advice.Page')->with($notification);

    }

    public function insert(Request $request){
        $validatedData = $request->validate([
        'advice' => 'required|unique:advices',
        ]);
        $advice = new Advice;
        $advice->advice = $request->advice;
        $advice->save();

        $notification = array(
        	'message' => 'Advice Saved Successfully!',
        	'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }



}
