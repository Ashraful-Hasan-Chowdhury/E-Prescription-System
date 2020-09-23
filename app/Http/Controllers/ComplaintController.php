<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Complaint;
use DB;

class ComplaintController extends Controller
{
    public function index()
    {
        $act = "com";
        $complaint = Complaint::orderBy('complaint', 'asc')->get();
        $i = 0;
        return view('addComplaints', compact('complaint', 'i', 'act'));
    }

    public function update(Request $request, $id)
    {
        $complaint = Complaint::findorfail($id);
        $complaintupdate = "complaintupdate" . $id;
        $complaint->complaint = $request->$complaintupdate;
        $complaint->save();
        $notification = array(
            'message' => 'Complaint Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Complaints.Page')->with($notification);
    }
    public function search(Request $request)
    {
        $act = "com";
        $complaint = Complaint::where('complaint', '=', $request->ComplaintSearch)->paginate(10);
        $i = 0;
        // return response()->json($medicine);
        return view('addComplaints', compact('complaint', 'i', 'act'));
    }

    public function destroy(Request $request, $id)
    {
        $complaint = Complaint::findorfail($id);
        $complaint->delete();
        $notification = array(
            'message' => 'Complaint Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Complaints.Page')->with($notification);
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'complaint' => 'required|unique:complaints',
        ]);
        $complaint = new Complaint;
        $complaint->complaint = $request->complaint;
        $complaint->save();

        $notification = array(
            'message' => 'Complaint Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
