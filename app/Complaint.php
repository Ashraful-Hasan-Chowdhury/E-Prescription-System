<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //complaint
    protected $fillable = [
        'complaint',
    ];

    public function Prescriptions()
    {
        return $this->belongsToMany('App\Prescription', 'complaint_prescriptions');
    }
}
