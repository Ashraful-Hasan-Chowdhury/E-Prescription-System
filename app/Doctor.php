<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'dNameEn',
        'dNameBn',
        'vTimeEn',
        'vTimeBn',
        'designationEn',
        'designationBn',
        'addressEn',
        'addressBn',
        'phoneEn',
        'phoneBn',
    ];
}
