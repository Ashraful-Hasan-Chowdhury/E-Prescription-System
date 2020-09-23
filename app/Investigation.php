<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $fillable = [
        'investigation',
    ];
    public function Prescriptions()
    {
        return $this->belongsToMany('App\Prescription', 'Investigation_prescriptions');
    }
}
