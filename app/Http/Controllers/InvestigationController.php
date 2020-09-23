<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Investigation;
use DB;

class InvestigationController extends Controller
{
    public function index()
    {
        $act = "in";
        $investigation = Investigation::orderBy('investigation', 'asc')->get();
        $i = 0;
        return view('addInvestigations', compact('investigation', 'i', 'act'));
    }

    public function update(Request $request, $id)
    {
        $investigation = Investigation::findorfail($id);
        $investigationupdate = "investigationupdate" . $id;
        $investigation->investigation = $request->$investigationupdate;
        $investigation->save();
        $notification = array(
            'message' => 'Investigation Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Investigation.Page')->with($notification);
    }
    public function search(Request $request)
    {
        $investigation = Investigation::where('investigation', '=', $request->investigationSearch)->paginate(10);
        $i = 0;
        $act = "in";
        // return response()->json($medicine);
        return view('addInvestigations', compact('investigation', 'i', 'act'));
    }

    public function destroy(Request $request, $id)
    {
        $investigation = Investigation::findorfail($id);
        $investigation->delete();
        $notification = array(
            'message' => 'Investigation Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Investigation.Page')->with($notification);
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'investigation' => 'required|unique:investigations',
        ]);
        $investigation = new Investigation;
        $investigation->investigation = $request->investigation;
        $investigation->save();

        $notification = array(
            'message' => 'Investigation Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
