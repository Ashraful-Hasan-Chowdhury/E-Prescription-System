<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $act = "";
    return view('index', compact('act'));
});

Route::get('/hello', function () {
    return "Hellow";
});


// how to take cruds are here
Route::get('/TakeInsert', 'TakeController@index')->name('Take.Page');
Route::post('/addTake', 'TakeController@insert')->name('Add.Take');
Route::get('/deletetake/{id}', 'TakeController@destroy')->name('delete.Take');
Route::post('/updatemedtake/{id}', 'TakeController@update')->name('update.Take');
Route::post('/SearchTake', 'TakeController@search')->name('Search.Take');


//Medicine Cruds are here
Route::get('/MedicinePage', 'MedicineController@index')->name('Medicine.Page');
Route::post('/MedicineAdd', 'MedicineController@insert')->name('Add.Medicine');
Route::get('/deletemed/{id}', 'MedicineController@destroy')->name('delete.Medicine');
Route::post('/updatemed/{id}', 'MedicineController@update')->name('update.Medicine');
Route::post('/SearchMedicine', 'MedicineController@search')->name('Search.Medicine');

//Medicine Types Cruds are here
Route::get('/MedicineType', 'TypeController@index')->name('Type.Page');
Route::post('/MedicineTypeAdd', 'TypeController@insert')->name('Add.Type');
Route::get('/deletetype/{id}', 'TypeController@destroy')->name('delete.Type');
Route::post('/updatetype/{id}', 'TypeController@update')->name('update.Type');
Route::post('/Searchtype', 'TypeController@search')->name('Search.Type');

//advice cruds are here
Route::get('/advice', 'AdviceController@index')->name('Advice.Page');
Route::post('/advicesAdd', 'AdviceController@insert')->name('Add.Advices');
Route::get('/deleteAdvice/{id}', 'AdviceController@destroy')->name('delete.Advice');
Route::post('/updateAdvice/{id}', 'AdviceController@update')->name('update.Advice');
Route::post('/SearchAdvice', 'AdviceController@search')->name('Search.Advice');

//Investigation cruds are Here
Route::get('/Investigation', 'InvestigationController@index')->name('Investigation.Page');
Route::post('/InvestigationAdd', 'InvestigationController@insert')->name('Add.Investigations');
Route::get('/deleteinvestigation/{id}', 'InvestigationController@destroy')->name('delete.Investigation');
Route::post('/updateinvestigation/{id}', 'InvestigationController@update')->name('update.Investigation');
Route::post('/Searchinvestigation', 'InvestigationController@search')->name('Search.Investigation');

//Complaints Cruds are here
Route::get('/Complaints', 'ComplaintController@index')->name('Complaints.Page');
Route::post('/ComplaintAdd', 'ComplaintController@insert')->name('Add.Complaints');
Route::get('/deletecom/{id}', 'ComplaintController@destroy')->name('delete.Complaint');
Route::post('/updateecom/{id}', 'ComplaintController@update')->name('update.Complaint');
Route::post('/SearchComplaint', 'ComplaintController@search')->name('Search.Complaint');

//Examination cruds are Here
Route::get('/Examinations', 'ExaminationController@index')->name('Examination.Page');
Route::post('/ExaminationsAdd', 'ExaminationController@insert')->name('Add.Examinations');
Route::get('/deleteexm/{id}', 'ExaminationController@destroy')->name('delete.Examination');
Route::post('/updateexm/{id}', 'ExaminationController@update')->name('update.Examination');
Route::post('/Searchexm', 'ExaminationController@search')->name('Search.Examination');

// Doctors cruds are here
Route::get('/Doctors', 'DoctorController@index')->name('Doctor.Page');
Route::post('/FindDoctor', 'DoctorController@find')->name('find.doctor');
Route::post('/DoctorsAdd', 'DoctorController@addDoctorsFunction')->name('Add.Doctors');

//Prescription cruds are here
Route::get('/NewPrescription', 'PrescriptionController@index')->name('NewPrescription.Page');
Route::post('/insert-prescription', 'PrescriptionController@insert')->name('insert.prescription');
Route::get('/old-prescription', 'PrescriptionController@oldPage')->name('oldPrescription.Page');
Route::post('/update-prescription', 'PrescriptionController@update')->name('update.prescription');
Route::post('/find', 'PrescriptionController@find')->name('find.prescription');
Route::get('/delete-prescription/{id}', 'PrescriptionController@destroy')->name('delete.prescription');
Route::get('/edit-prescription/{id}', 'PrescriptionController@edit')->name('edit.prescription');
Route::get('/preview-prescription/{id}', 'PrescriptionController@preview')->name('preview.prescription');

// printer cruds are here
Route::get('/print/{pid}/doctor/{dNameEn}', 'PrintController@index')->name('Print.Page');
Route::get('/print', 'PrintController@test');

// Backup Cruds are here
Route::get('/backup', 'BackupController@index')->name('db.backup');
Route::get('/create-backup', 'BackupController@backup')->name('create.backup');
