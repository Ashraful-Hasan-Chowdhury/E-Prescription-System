<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use PDF;
use App\Prescription;
use App\Advice;
use App\Complaint;
use App\Examination;
use App\Investigation;
use App\Medicine;
use App\Type;
use App\Doctor;
use DB;
use App;

class PrintController extends Controller
{
    // public function index(){
    //     $medicine=Medicine::all();
    //     return view('printPage',compact('medicine'));
    // }

    public function index($pid, $dNameEn)
    {
        $doc = Doctor::where('dNameEn', '=', $dNameEn)->firstOrFail();
        $prescription = Prescription::findorfail($pid);
        if ($doc->id == 1) {

            $pdf = PDF::loadView('printPreviewPrithu', compact('doc', 'prescription'));
            $pdf->setOption('margin-left', '5mm');
            $pdf->setOption('margin-top', '5mm');
            $pdf->setOption('margin-right', '5mm');
            $pdf->setOption('margin-bottom', '5mm');
            $pdf->setOption('page-width', '210mm');
            $pdf->setOption('page-height', '297mm');
            return $pdf->stream('prescription.pdf');
        } else {
            // return response()->json($prescription->examinations);
            $pdf = PDF::loadView('printPreviewRasel', compact('doc', 'prescription'));
            $pdf->setOption('margin-left', '5mm');
            $pdf->setOption('margin-top', '5mm');
            $pdf->setOption('margin-right', '5mm');
            $pdf->setOption('margin-bottom', '5mm');
            $pdf->setOption('page-width', '210mm');
            $pdf->setOption('page-height', '297mm');
            return $pdf->stream('prescription.pdf');
        }
    }

    public function test()
    {
        $pdf = PDF::loadView('printPage');
        $pdf->setPaper('a4');
        $pdf->setOption('margin-left', 0);
        $pdf->setOption('margin-top', 0);
        $pdf->setOption('margin-right', 0);
        $pdf->setOption('margin-bottom', 0);
        return $pdf->stream('prescription.pdf');
    }
}
