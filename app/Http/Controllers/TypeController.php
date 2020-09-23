<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Type;
use DB;

class TypeController extends Controller
{
    public function index()
    {
        $act = "type";
        $type = Type::orderBy('medType', 'asc')->get();
        $i = 0;
        return view('addType', compact('act', 'type', 'i'));
    }

    public function update(Request $request, $id)
    {
        $type = Type::findorfail($id);
        $typeupdate = "typeupdate" . $id;
        $type->medType = $request->$typeupdate;
        $type->save();
        $notification = array(
            'message' => 'Type Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Type.Page')->with($notification);
    }
    public function search(Request $request)
    {
        $type = Type::where('medType', '=', $request->typeSearch)->paginate(10);
        $i = 0;
        $act = "type";
        // return response()->json($medicine);
        return view('addType', compact('act', 'type', 'i'));
    }

    public function destroy(Request $request, $id)
    {
        $type = Type::findorfail($id);
        $type->delete();
        $notification = array(
            'message' => 'Type Deleted!',
            'alert-type' => 'error'
        );
        return Redirect()->route('Type.Page')->with($notification);
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'medType' => 'required|unique:types',
        ]);
        $type = new Type;
        $type->medType = $request->medType;
        $type->save();

        $notification = array(
            'message' => 'Type Saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
