@extends('welcome')
@section('content')

<div class="card bg-warning text-center card-form">
    <div class="card-body">
        <h3 class="card-title border-bottom border-secondary">
            <img src="public/img/doctor.png" class="img-fluid" alt="Responsive image">
            Doctors Information</h3><br>
        <!--Find doctor part   -->
        <form action="{{ route('find.doctor') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="h6" for="doc">Select Doctor</label>
                <select name="doc" class="form-control" id="doc">
                    @foreach ($doct as $row)
                    <option>{{$row->dNameEn}}</option>
                    @endforeach
                </select>

            </div>
            <input class="btn btn-success text-center" type="submit" value="Search Doctor">

        </form>
        <br><br>
        <!--Find doctor part   -->
        @if(!empty($doc))
        <form action="{{ route('Add.Doctors') }}" method="post">
            @csrf

            <div class="form-group">
                <input name="id" type="text" class="form-control" id="id" placeholder="Doctor's Name"
                    value="{{$doc->id}} " hidden>
            </div>

            <div class="form-group">
                <label class="h5" for="dName">Doctor's Name</label>
                <input name="dNameEn" type="text" class="form-control" id="dName" placeholder="Doctor's Name"
                    value="{{$doc->dNameEn}} ">
            </div>

            <div class="form-group">
                <label class="h5" for="dName">ডাক্তারের নাম</label>
                <input name="dNameBn" type="text" class="form-control" id="dName" placeholder="ডাক্তারের নাম"
                    value="{{$doc->dNameBn}} ">
            </div>

            <div class="form-group">
                <label class="h5" for="vTime">Visiting Time</label>
                <textarea placeholder="Visiting Time" name="vTimeEn" id="vTime" class="form-control from-control-lg"
                    rows="5">{{$doc->vTimeEn}}</textarea>
            </div>

            <div class="form-group">
                <label class="h5" for="vTime">সাক্ষাতের সময়</label>
                <textarea placeholder="সাক্ষাতের সময়" name="vTimeBn" id="vTime" class="form-control from-control-lg"
                    rows="5">{{$doc->vTimeBn}}</textarea>
            </div>

            <div class="form-group">
                <label class="h5" for="designation">Designation</label>
                <textarea placeholder="Designation" name="designationEn" id="designation"
                    class="form-control from-control-lg" rows="5">{{$doc->designationEn}}</textarea>
            </div>

            <div class="form-group">
                <label class="h5" for="designation">ডেজিগনেশান</label>
                <textarea placeholder="ডেজিগনেশান" name="designationBn" id="designation"
                    class="form-control from-control-lg" rows="5">{{$doc->designationBn}}</textarea>
            </div>


            <div class="form-group">
                <label class="h5" for="address">Address</label>
                <textarea placeholder="Address" name="addressEn" id="address" class="form-control from-control-lg"
                    rows="5">{{$doc->addressEn}}</textarea>
            </div>

            <div class="form-group">
                <label class="h5" for="address">চেম্বারের ঠিকানা </label>
                <textarea placeholder="চেম্বারের ঠিকানা" name="addressBn" id="address"
                    class="form-control from-control-lg" rows="5">{{$doc->addressBn}}</textarea>
            </div>

            <div class="form-group">
                <label class="h5" for="dName">Phone Number</label>
                <input name="phoneEn" type="text" class="form-control" id="phone" placeholder="Phone Number"
                    value="{{$doc->phoneEn}}">
            </div>

            <div class="form-group">
                <label class="h5" for="dName">ফোন নাম্বার</label>
                <input name="phoneBn" type="text" class="form-control" id="phone" placeholder="ফোন নাম্বার"
                    value="{{$doc->phoneBn}}">
            </div>

            <input class="btn bg-success btn-outline-light btn-block" type="submit" name="" value="save info">
        </form>
        @endif
    </div>
</div>

@endsection