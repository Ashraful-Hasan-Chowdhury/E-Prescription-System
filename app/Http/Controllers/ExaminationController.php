<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Examination;
use DB;

class ExaminationController extends Controller
{
    public function index()
    {
        $act = "on";
        $examination = Examination::orderBy('onExamination', 'asc')->get();
        $i = 0;
        return view('addExamination', compact('examination', 'i', 'act'));
    }

    public function update(Request $request, $id)
    {
        $examination = Examination::findorfail($id);
        $examinationupdate = "Examinationupdate" . $id;
        $examination->onExamination = $request->$examinationupdate;
        $examination->save();
        $notification = array(
            'message' => 'Examination Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Examination.Page')->with($notification);
    }
    public function search(Request $request)
    {
        $act = "on";
        $examination = Examination::where('onExamination', '=', $request->ExaminationSearch)->paginate(10);
        $i = 0;
        // return response()->json($medicine);
        return view('addExamination', compact('examination', 'i', 'act'));
    }

    public function destroy(Request $request, $id)
    {
        $examination = Examination::findorfail($id);
        $examination->delete();
        $notification = array(
            'message' => 'Examination Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Examination.Page')->with($notification);
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'onExamination' => 'required|unique:examinations',
        ]);
        $onExamination = new Examination;
        $onExamination->onExamination = $request->onExamination;
        $onExamination->save();

        $notification = array(
            'message' => 'Examination Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
