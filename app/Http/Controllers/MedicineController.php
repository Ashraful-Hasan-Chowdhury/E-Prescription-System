<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Medicine;
use DB;

class MedicineController extends Controller
{
    public function index()
    {
        $act = "med";
        $medicine = Medicine::orderBy('medName', 'asc')->get();
        $i = 0;
        return view('addMedicine', compact('medicine', 'i', 'act'));
    }

    public function update(Request $request, $id)
    {
        $medicine = Medicine::findorfail($id);
        $medupdate = "medupdate" . $id;
        $medicine->medName = $request->$medupdate;
        $medicine->save();
        $notification = array(
            'message' => 'Medicine Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Medicine.Page')->with($notification);
    }

    public function search(Request $request)
    {
        $act = "med";
        $medicine = Medicine::where('medName', '=', $request->medNameSearch)->paginate(10);
        $i = 0;
        // return response()->json($medicine);
        return view('addMedicine', compact('medicine', 'i', 'act'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'medName' => 'required|unique:medicines',
        ]);

        $medicine = new Medicine;
        $medicine->medName = $request->medName;
        $medicine->save();

        $notification = array(
            'message' => 'Medicine Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function destroy(Request $request, $id)
    {
        $medicine = Medicine::findorfail($id);
        $medicine->delete();
        $notification = array(
            'message' => 'Medicine Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Medicine.Page')->with($notification);
    }
}
