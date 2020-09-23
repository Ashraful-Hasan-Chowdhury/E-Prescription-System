<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Take;

class TakeController extends Controller
{
    public function index()
    {
        $act = "how";
        $take = Take::orderBy('take', 'asc')->get();
        $i = 0;
        return view('addHowtotake', compact('act', 'take', 'i'));
    }

    public function update(Request $request, $id)
    {
        $take = Take::findorfail($id);
        $takeupdate = "takeupdate" . $id;
        $take->take = $request->$takeupdate;
        $take->save();
        $notification = array(
            'message' => 'Take Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Take.Page')->with($notification);
    }
    public function search(Request $request)
    {
        $act = "how";
        $take = Take::where('take', '=', $request->takeSearch)->paginate(10);
        $i = 0;
        // return response()->json($medicine);
        return view('addHowtotake', compact('act', 'take', 'i'));
    }

    public function destroy(Request $request, $id)
    {
        $take = Take::findorfail($id);
        $take->delete();
        $notification = array(
            'message' => 'Routine Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Take.Page')->with($notification);
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'take' => 'required|unique:takes',
        ]);
        $take = new Take;
        $take->take = $request->take;
        $take->save();

        $notification = array(
            'message' => 'Routine Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
