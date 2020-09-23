@extends('welcome')
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-body">
            <h3 class="card-title border-bottom border-primary">
                <img src="public/img/prescription.png" class="img-fluid" alt="Responsive image">
                New Prescription</h3><br>


            <!-- Error Handler -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Error Handler -->

            <form action="{{ route('insert.prescription') }}" method="post">
                @csrf

                <div class="form-group">
                    <label class="h5" for="pid">Patient ID</label>
                    <input value="{{$prescription+1}}" name="pid" type="text" class="form-control" id="pid"
                        placeholder="Patient Id" readonly>
                </div>
                <div class="form-group">
                    <label class="h5" for="pName">Patient Name</label>
                    <input name="pName" type="text" class="form-control" id="pName" placeholder="Patient Name">
                </div>

                <div class="form-group">
                    <label class="h5" for="pAge">Patient Age</label>
                    <input name="pAge" type="text" class="form-control" id="pAge" placeholder="Patient Age">
                </div>
                <div class="form-group">
                    <label class="h5" for="date">Date</label>
                    <input name="date" type="text" class="form-control" id="date">
                </div>

                <div class="form-group">
                    <label class="h5" for="addComplaints">Chief Complaints</label>
                    <select name="complaints[]" class="select2" multiple="multiple"
                        data-placeholder="Select a Complaint" style="width: 100%;">
                        @foreach ($complaint as $row)
                        <option value="{{$row->id}}">{{$row->complaint}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="card border-0 mt-4">
                    <div class="card-body">
                        <h3 class="card-title text-center border-bottom border-success">
                            On Examination
                        </h3>
                        <div class="mt-5"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">

                                    <label class="h5" for="eproblem">Problem found</label>
                                    <input list="onexamData" name="eproblem" type="text" class=" form-control"
                                        placeholder="Problem" style="width: 100%;">
                                    <datalist id="onexamData">

                                        @foreach ($examination as $row)
                                        <option value="{{$row->onExamination}}">{{$row->onExamination}}</option>
                                        @endforeach
                                    </datalist>
                                </div>

                                <div class="row mt-3">

                                    <label class="h5" for="position">Description</label>
                                    <select name="edescription[]" class="select2" multiple="multiple"
                                        data-placeholder="Description" style="width: 100%;">
                                        @foreach ($examination as $row)
                                        <option value="{{$row->id}}">{{$row->onExamination}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="h5" for="position">Position</label>
                                <table class="table table-hover bg-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input value=" " name="elu" type="text" class="form-control"
                                                    id="elu"></th>
                                            <th scope="col"><input value=" " name="eru" type="text" class="form-control"
                                                    id="eru"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input value=" " name="eld" type="text" class="form-control" id="eld">
                                            </td>
                                            <td><input value=" " name="erd" type="text" class="form-control" id="erd">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 mt-4">
                    <div class="card-body">
                        <h3 class="card-title text-center border-bottom border-success">
                            Investigation
                        </h3>
                        <div class="mt-5"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <label class="h5" for="iproblem">Pathological Test</label>
                                    <input list="iProbemData" name="iproblem" type="text" class=" form-control"
                                        placeholder="Problem" style="width: 100%;">
                                    <datalist id="iProbemData">

                                        @foreach ($investigation as $row)
                                        <option value="{{$row->investigation}}">{{$row->investigation}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                                <div class="row mt-3">
                                    <label class="h5" for="idescription">Description</label>
                                    <select name="idescription[]" class="select2" multiple="multiple"
                                        data-placeholder="Description" style="width: 100%;">
                                        @foreach ($investigation as $row)
                                        <option value="{{$row->id}}">{{$row->investigation}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="h5" for="position">Position</label>
                                <table class="table table-hover bg-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input value=" " name="ilu" type="text" class="form-control"
                                                    id="elu"></th>
                                            <th scope="col"><input value=" " name="iru" type="text" class="form-control"
                                                    id="eru"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input value=" " name="ild" type="text" class="form-control" id="eld">
                                            </td>
                                            <td><input value=" " name="ird" type="text" class="form-control" id="erd">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card border-0 mt-4">
                    <div class="card-body">
                        <h3 class="card-title text-center border-bottom border-success">
                            Advice
                        </h3>
                        <div class="mt-5"></div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="container">
                                    <div class="row">
                                        <label class="h5" for="aproblem1">Advice One</label>
                                        <input list="aproblemData" name="aproblem1" id="aproblem1" type="text"
                                            class=" form-control" placeholder="Problems">
                                        <datalist id="aproblemData">

                                            @foreach ($advice as $row)
                                            <option value="{{$row->advice}}">{{$row->advice}}</option>
                                            @endforeach
                                        </datalist>

                                    </div>
                                    <div class="row mt-3">
                                        <label class="h5" for="position">Position One</label>
                                        <table class="table table-hover bg-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><input value=" " name="alu1" type="text"
                                                            class="form-control" id="elu"></th>
                                                    <th scope="col"><input value=" " name="aru1" type="text"
                                                            class="form-control" id="eru"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input value=" " name="ald1" type="text" class="form-control"
                                                            id="eld">
                                                    </td>
                                                    <td><input value=" " name="ard1" type="text" class="form-control"
                                                            id="erd">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="container">
                                    <div class="row">
                                        <label class="h5" for="aproblem2">Advice Two</label>
                                        <input list="aproblemData2" name="aproblem2" id="aproblem2" type="text"
                                            class="form-control" placeholder="Problems">
                                        <datalist id="aproblemData2">

                                            @foreach ($advice as $row)
                                            <option value="{{$row->advice}}">{{$row->advice}}</option>
                                            @endforeach
                                        </datalist>

                                    </div>
                                    <div class="row mt-3">
                                        <label class="h5" for="position">Position Two</label>
                                        <table class="table table-hover bg-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><input value=" " name="alu2" type="text"
                                                            class="form-control" id="elu"></th>
                                                    <th scope="col"><input value=" " name="aru2" type="text"
                                                            class="form-control" id="eru"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input value=" " name="ald2" type="text" class="form-control"
                                                            id="eld">
                                                    </td>
                                                    <td><input value=" " name="ard2" type="text" class="form-control"
                                                            id="erd">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="container">
                                    <div class="row">
                                        <label class="h5" for="aproblem3">Advice Three</label>
                                        <input list="aproblemData3" name="aproblem3" id="aproblem3" type="text"
                                            class=" form-control" placeholder="Problems">
                                        <datalist id="aproblemData3">

                                            @foreach ($advice as $row)
                                            <option value="{{$row->advice}}">{{$row->advice}}</option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="h5" for="position">Position Three</label>
                                        <table class="table table-hover bg-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><input value=" " name="alu3" type="text"
                                                            class="form-control" id="elu"></th>
                                                    <th scope="col"><input value=" " name="aru3" type="text"
                                                            class="form-control" id="eru"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input value=" " name="ald3" type="text" class="form-control"
                                                            id="eld">
                                                    </td>
                                                    <td><input value=" " name="ard3" type="text" class="form-control"
                                                            id="erd">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="row">
                                    <label class="h5">Description of advice</label>
                                    <select class="select2 border-primary" multiple="multiple"
                                        data-placeholder="Select a Description" data-dropdown-css-class="select2-purple"
                                        name="adescripton[]" style="width: 100%;">
                                        @foreach ($advice as $row)
                                        <option value="{{$row->id}}">{{$row->advice}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 mt-4">
                    <div class="card-body">
                        <h3 class="card-title text-center border-bottom border-success">
                            Prescription
                        </h3>
                        <div class="row mt-5">
                            <div class="col-md-8">
                                <div class="form-group">

                                    <textarea name="prescription" type="text" class="form-control" id="prescription"
                                        rows="20"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- prescription form -->
                                <div class="card bg-primary text-center ">
                                    <div class="card-body text-light">



                                        <div class="form-group">
                                            <input list="type" id="medtype" type="text" class="form-control"
                                                placeholder="Medicine Type">
                                            <datalist id="type">

                                                @foreach ($type as $row)
                                                <option value="{{$row->medType}}">{{$row->medType}}</option>
                                                @endforeach
                                            </datalist>

                                        </div>

                                        <div class="form-group">

                                            <input list="mnamedata" id="medName" type="text" class="form-control"
                                                placeholder="Medicine Name">
                                            <datalist id="mnamedata">

                                                @foreach ($medicine as $row)
                                                <option value="{{$row->medName}}">{{$row->medName}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>

                                        <div class="form-group" id="hide5">

                                            <input list="mnamedata2" id="medName2" type="text" class="form-control"
                                                placeholder="2nd Medicine Name ">
                                            <datalist id="mnamedata2">

                                                @foreach ($medicine as $row)
                                                <option value="{{$row->medName}}">{{$row->medName}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>

                                        <div class="form-group" id="hide1">
                                            <input list="powerPreset" name="power" type="text" class="form-control"
                                                id="medpower" placeholder="Power">
                                            <datalist id="powerPreset">
                                                <option value="500mg">
                                                <option value="250mg">
                                                <option value="200mg">
                                                <option value="50mg">
                                                <option value="20mg">
                                                <option value="120mg">
                                                <option value="40mg">
                                                <option value="100mg">
                                            </datalist>
                                        </div>


                                        <div class="form-group" id="hide2">
                                            <input list="howtoData" id="howTo" type="text" class="form-control"
                                                placeholder="How to Take">
                                            <datalist id="howtoData">

                                                @foreach ($take as $row)
                                                <option value="{{$row->take}}">{{$row->take}}</option>
                                                @endforeach
                                            </datalist>

                                        </div>

                                        <div class="form-group" id="hide3">
                                            <input list="whenToData" id="whenTo" type="text" class="form-control"
                                                placeholder="When to Take">
                                            <datalist id="whenToData">
                                                <option value="খালি পেটে">
                                                <option value="ভরা পেটে">
                                                <option value="খাওয়ার ½ ঘন্টা পূর্বে">
                                            </datalist>
                                        </div>

                                        <div class="form-group" id="hide4">
                                            <input name="howLong" type="text" class="form-control" id="howLong"
                                                placeholder="How long to take" list="howlong">
                                                <datalist id="howlong">
                                                <option value="২ দিন">
                                                <option value="৩ দিন">
                                                <option value="৫ দিন"> 
                                                <option value="৭ দিন">
                                                <option value="১৪ দিন"> 
                                                <option value="২১ দিন">
                                                <option value="১ মাস">
                                                <option value="ব্যাথা থাকলে">
                                                </datalist>
                                        </div>

                                        <input id="btninsertMed" class="btn btn-outline-light btn-block" value="insert">

                                    </div>
                                </div>
                                <!-- prescription form -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="h5 mt-4" for="meet">Next Time to Meet</label>
                    <input name="meet" type="text" class="form-control" id="meet" placeholder="Next Time to Meet">
                </div>
                <center>


                    <div class="form-group clearfix">
                        <h6>Who is printing this?</h6>

                        @foreach ($doct as $row)
                        <label class="mycheck d-inline">{{$row->dNameEn}} &nbsp;&nbsp;
                            <input type="radio" name="dNameEn" value="{{$row->dNameEn}}">
                            <span class="checkmark"></span>
                        </label>
                        @endforeach

                    </div>
                    <br>
                    <button class="btn btn-success text-center rounded" type="submit">
                        <img src="public/img/print.png" class="img-fluid" alt="Responsive image">

                        Print and Save Prescription</button>

                </center>
            </form>
        </div>
    </div>
</div>

<!-- Js for date -->
<script type="text/javascript">
    var d=new Date();
        var day= d.getDate();
        var month=d.getMonth() + 1;
        var year=d.getFullYear();
        var today=day+" - "+month+" - "+year;
        console.log(today);
        document.getElementById("date").value = today;
</script>
<!-- js for date-->
<script type="text/javascript">
    $(document).ready(function () {
    $('.select2').select2();
  
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
  });
  });
</script>
@endsection