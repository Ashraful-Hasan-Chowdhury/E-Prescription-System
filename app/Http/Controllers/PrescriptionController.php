<?php

namespace App\Http\Controllers;

use App\Advice;
use Illuminate\Http\Request;
use Session;
use App\Prescription;
use App\Complaint;
use App\Examination;
use App\Investigation;
use App\Medicine;
use App\Type;
use App\Doctor;
use App\Take;
use DB;

class PrescriptionController extends Controller
{
    public function index()
    {
        $act = "new";
        $advice = Advice::all();
        $complaint = Complaint::all();
        $examination = Examination::all();
        $investigation = Investigation::all();
        $medicine = Medicine::all();
        $type = Type::all();
        $doct = Doctor::all();
        $take = Take::all();
        $prescription = Prescription::max('id');
        return view('newPrescription', compact('act', 'take', 'advice', 'complaint', 'examination', 'investigation', 'medicine', 'type', 'prescription', 'doct'));
    }

    public function oldPage()
    {
        $act = "old";
        $prescripitions = Prescription::orderBy('id', 'DESC')->get();
        return view('viewPrescriptions', compact('prescripitions', 'act'));
    }
    public function find(Request $request)
    {
        $act = "old";
        $advice = Advice::all();
        $complaint = Complaint::all();
        $examination = Examination::all();
        $investigation = Investigation::all();
        $medicine = Medicine::all();
        $type = Type::all();
        $doct = Doctor::all();
        $pres = Prescription::findorfail($request->id);
        $take = Take::all();
        return view('oldPrescription', compact('act', 'take', 'advice', 'complaint', 'examination', 'investigation', 'medicine', 'type', 'pres', 'doct'));
    }

    public function insert(Request $request)
    {

        $prescription = new Prescription;

        $prescription->pName = $request->pName;
        $prescription->pAge = $request->pAge;
        $prescription->date = $request->date;

        $prescription->eproblem = $request->eproblem;
        $prescription->elu = $request->elu;
        $prescription->eru = $request->eru;
        $prescription->eld = $request->eld;
        $prescription->erd = $request->erd;

        $prescription->iproblem = $request->iproblem;
        $prescription->ilu = $request->ilu;
        $prescription->iru = $request->iru;
        $prescription->ild = $request->ild;
        $prescription->ird = $request->ird;

        $prescription->aproblem1 = $request->aproblem1;
        $prescription->alu1 = $request->alu1;
        $prescription->aru1 = $request->aru1;
        $prescription->ald1 = $request->ald1;
        $prescription->ard1 = $request->ard1;
        $prescription->aproblem2 = $request->aproblem2;
        $prescription->alu2 = $request->alu2;
        $prescription->aru2 = $request->aru2;
        $prescription->ald2 = $request->ald2;
        $prescription->ard2 = $request->ard2;
        $prescription->aproblem3 = $request->aproblem3;
        $prescription->alu3 = $request->alu3;
        $prescription->aru3 = $request->aru3;
        $prescription->ald3 = $request->ald3;
        $prescription->ard3 = $request->ard3;
        $prescription->prescription = $request->prescription;
        $prescription->meet = $request->meet;
        $prescription->save();
        $prescription->Advices()->sync($request->adescripton);
        $prescription->Complaints()->sync($request->complaints);
        $prescription->Examinations()->sync($request->edescription);
        $prescription->Investigations()->sync($request->idescription);
        $notification = array(
            'message' => 'Prescription saved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Print.Page', ['pid' => $prescription->id, 'dNameEn' => $request->dNameEn])->with($notification);
        // return Redirect('/print/'.$request->pid.'/doctor/'.$request->dNameEn)->with($notification);
    }

    public function update(Request $request)
    {
        $prescription = Prescription::findorfail($request->pid);
        $prescription->pName = $request->pName;
        $prescription->pAge = $request->pAge;
        $prescription->date = $request->date;

        $prescription->eproblem = $request->eproblem;
        $prescription->elu = $request->elu;
        $prescription->eru = $request->eru;
        $prescription->eld = $request->eld;
        $prescription->erd = $request->erd;

        $prescription->iproblem = $request->iproblem;
        $prescription->ilu = $request->ilu;
        $prescription->iru = $request->iru;
        $prescription->ild = $request->ild;
        $prescription->ird = $request->ird;

        $prescription->aproblem1 = $request->aproblem1;
        $prescription->alu1 = $request->alu1;
        $prescription->aru1 = $request->aru1;
        $prescription->ald1 = $request->ald1;
        $prescription->ard1 = $request->ard1;
        $prescription->aproblem2 = $request->aproblem2;
        $prescription->alu2 = $request->alu2;
        $prescription->aru2 = $request->aru2;
        $prescription->ald2 = $request->ald2;
        $prescription->ard2 = $request->ard2;
        $prescription->aproblem3 = $request->aproblem3;
        $prescription->alu3 = $request->alu3;
        $prescription->aru3 = $request->aru3;
        $prescription->ald3 = $request->ald3;
        $prescription->ard3 = $request->ard3;

        $prescription->prescription = $request->prescription;
        $prescription->meet = $request->meet;
        $prescription->Advices()->detach();
        $prescription->Complaints()->detach();
        $prescription->Examinations()->detach();
        $prescription->Investigations()->detach();
        $prescription->save();
        $prescription->Advices()->sync($request->adescripton);
        $prescription->Complaints()->sync($request->complaints);
        $prescription->Examinations()->sync($request->edescription);
        $prescription->Investigations()->sync($request->idescription);

        $notification = array(
            'message' => 'Prescription Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('Print.Page', ['pid' => $prescription->id, 'dNameEn' => $request->dNameEn])->with($notification);
    }

    public function destroy($id)
    {
        $prescription = Prescription::findorfail($id);
        $prescription->delete();
        $notification = array(
            'message' => 'Prescription Deleted!',
            'alert-type' => 'error'
        );

        return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $act = "old";
        $advice = Advice::all();
        $complaint = Complaint::all();
        $examination = Examination::all();
        $investigation = Investigation::all();
        $medicine = Medicine::all();
        $type = Type::all();
        $doct = Doctor::all();
        $pres = Prescription::findorfail($id);
        $take = Take::all();
        return view('oldPrescription', compact('act', 'take', 'advice', 'complaint', 'examination', 'investigation', 'medicine', 'type', 'pres', 'doct'));
    }

    public function preview($id)
    {
        return Redirect()->route('Print.Page', ['pid' => $id, 'dNameEn' => "Dentist MD Fakhrul Islam"]);
    }
}
