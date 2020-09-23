<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    //onExamination
    protected $fillable = [
        'onExamination',
    ];

    public function Prescriptions()
    {
        return $this->belongsToMany('App\Prescription', 'Examination_prescriptions');
    }
}
