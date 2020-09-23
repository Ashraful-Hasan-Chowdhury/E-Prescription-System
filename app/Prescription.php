<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'pName',
        'pAge',
        'date',
        'complaints',
        'eproblem',
        'elu',
        'eru',
        'eld',
        'erd',
        'edescription',
        'iproblem',
        'ilu',
        'iru',
        'ild',
        'ird',
        'idescription',
        'aproblem1',
        'alu1',
        'aru1',
        'ald1',
        'ard1',
        'aproblem2',
        'alu2',
        'aru2',
        'ald2',
        'ard2',
        'aproblem3',
        'alu3',
        'aru3',
        'ald3',
        'ard3',
        'prescription',
        'meet',
    ];

    public function Advices()
    {
        return $this->belongsToMany('App\Advice', 'advice_prescriptions')->withTimeStamps();
    }

    public function Complaints()
    {
        return $this->belongsToMany('App\Complaint', 'complaint_prescriptions')->withTimeStamps();
    }

    public function Examinations()
    {
        return $this->belongsToMany('App\Examination', 'examination_prescriptions')->withTimeStamps();
    }
    public function Investigations()
    {
        return $this->belongsToMany('App\Investigation', 'investigation_prescriptions')->withTimeStamps();
    }
}
