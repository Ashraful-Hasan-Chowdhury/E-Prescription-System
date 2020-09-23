<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Artisan;
use Log;
use Storage;

class BackupController extends Controller
{
    public function index()
    {
        $act = "db";
        return view('db', compact('act'));
    }
    public function backup()
    {
        Artisan::call('backup:run --only-db');

        $notification = array(
            'message' => 'Backup has been taken successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
