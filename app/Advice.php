<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    protected $fillable = [
        'advice',
    ];

    public function Prescriptions()
    {
        return $this->belongsToMany('App\Prescription', 'Advice_prescriptions');
    }
}
