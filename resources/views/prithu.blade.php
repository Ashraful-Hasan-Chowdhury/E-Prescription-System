<!doctype html>
<html lang="en">
<head>
  <title>Nurjahan Dental Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="img/tooth.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href={{asset('public/css/style.css')}}>
  <link rel="stylesheet" href={{asset('public/css/font-awesome.min.css')}}>
  <link rel="stylesheet" href={{asset('public/css/bootstrap.css')}}>
  <link rel="stylesheet" href={{asset('public/css/toastr.min.css')}}>


</head>

  <body>
    <div class="container" id="mainContainer">
        <section id="homeSection">
            <div class="dark-overlay">
                <div class="home-inner" >

                    <div class="row">
                        <!-- for title bar -->
                        <div class="col-md-4">
                            <!-- logo bar -->
                            <div class="logo justify-content-center mt-4">
                                <img src="{{asset('public/images/prescription/mainlogo.png')}}" class="img-fluid" alt="Responsive image">
                            </div>
                            <!-- <div class="chamberName text-center">


                            </div> -->
                        </div>
                        <div class="col-md-8 bg-primary" id="example1">
                            <!-- Doctors name bar -->
                                <div class="row text-center" >
                                    <div class="col-md-4">
                                        <div class="card bg-primary text-white border-0">
                                            <!-- Doc name bn -->
                                            <div class="card-body">
                                                <h6 class="card-title text-white">
                                                    {{$doc->dNameBn}}
                                                </h6>
                                                <small><p class="card-text">
                                                    {{$doc->designationBn}}
                                                </p></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-primary text-white border  mt-5">
                                            <!-- Doc name en -->
                                            <div class="card-body">
                                                <h6 class="card-title text-white">
                                                    রোগী দেখার সময়ঃ
                                                </h6>
                                                <p class="card-text">
                                                    <small>
                                                    {{$doc->vTimeBn}}
                                                </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-primary text-white border-0">
                                            <!-- Doc name en -->
                                            <div class="card-body">
                                                <h6 class="card-title text-white">
                                                    {{$doc->dNameEn}}
                                                </h6>
                                                <small><p class="card-text">
                                                    {{$doc->designationEn}}
                                                </p></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="row bg-primary text-white text-center p-4 mt-2 mb-2" id="example2">
                        <!-- style="border-top: 5px solid #007bff;" -->
                        <!-- for namebar -->
                        <div class="col-md-2">
                            <strong>ID: {{$prescription->id}}</strong>
                        </div>
                        <div class="col-md-6">
                            <strong>Name: {{$prescription->pName}}</strong>
                        </div>
                        <div class="col-md-2">
                            <strong>Age: {{$prescription->pAge}}</strong>
                        </div>
                        <div class="col-md-2">
                            <strong>Date: {{$prescription->date}}</strong>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center" >
                        <!-- for prescription bar -->

                        <div class="col-md-4  " id="prescriptionBorder">
                            <div style="height:50px"></div>
                            <div class="row justify-content-center">
                                <!-- for chief complaints -->
                                <span class="d-block" ><h6 id="titleBorder">Chief Complaints</h6></span>
                                <div class="w-100" style="height:20px;"></div>

                                <p>{{$prescription->complaints}}</p>

                            </div>
                            <div style="height:20px"></div>
                            <div class="row justify-content-center">
                                <!-- on Examination -->
                                <div class="row">
                                    <h6 id="titleBorder">On Examination</h6>
                                </div>
                                <div class="w-100" style="height:20px;"></div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row mt-2">
                                            @if(!empty($prescription->elu) || !empty($prescription->eru) || !empty($prescription->eld) || !empty($prescription->erd))
                                            <p>{{$prescription->eproblem}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        @if(!empty($prescription->elu) || !empty($prescription->eru) || !empty($prescription->eld) || !empty($prescription->erd))
                                        <table id="maint">
                                            <tr>
                                                <td>
                                                    <table ID="INTER1" class="n-bordered d-block-inline">
                                                        <tr>
                                                            <td>&nbsp;&nbsp;{{$prescription->elu}}&nbsp;&nbsp;</td>
                                                            <td >&nbsp;&nbsp;{{$prescription->eru}}&nbsp;&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td >&nbsp;&nbsp;{{$prescription->eld}}&nbsp;&nbsp;</td>
                                                            <td >&nbsp;&nbsp;{{$prescription->erd}}&nbsp;&nbsp;</td>
                                                        </tr>


                                                    </table>
                                                </td>

                                            </tr>
                                        </table>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center">
                                @if(!empty($prescription->edescription))
                                <p><strong>{{$prescription->edescription}}</strong> </p>
                                @endif
                            </div>

                            <div style="height:20px"></div>
                            <div class="row justify-content-center">
                                <!-- for investigation -->
                                <div class="row justify-content-center " >
                                    <!-- on Examination -->
                                    <div class="row justify-content-center" id="titleBorder">
                                        <h6 >Investigation</h6>
                                    </div>
                                    <div class="w-100" style="height:20px;"></div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row mt-2">
                                                @if(!empty($prescription->ilu) || !empty($prescription->iru) || !empty($prescription->ild) || !empty($prescription->ird))
                                                <p>{{$prescription->iproblem}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            @if(!empty($prescription->ilu) || !empty($prescription->iru) || !empty($prescription->ild) || !empty($prescription->ird))
                                            <table id="maint">
                                                <tr>
                                                    <td>
                                                        <table ID="INTER1" class="n-bordered d-block-inline">
                                                            <tr>
                                                                <td>&nbsp;&nbsp;{{$prescription->ilu}}&nbsp;&nbsp;</td>
                                                                <td >&nbsp;&nbsp;{{$prescription->iru}}&nbsp;&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td >&nbsp;&nbsp;{{$prescription->ild}}&nbsp;&nbsp;</td>
                                                                <td >&nbsp;&nbsp;{{$prescription->ird}}&nbsp;&nbsp;</td>
                                                            </tr>


                                                        </table>
                                                    </td>

                                                </tr>
                                            </table>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="row justify-content-center">
                                @if(!empty($prescription->idescription))
                                <p><strong>{{$prescription->idescription}}</strong></p>
                                @endif
                            </div>

                            <div style="height:20px"></div>
                            <div class="row justify-content-center">
                                <div class="row justify-content-center">
                                    <!-- for investigation -->
                                    <div class="row justify-content-center" >
                                        <!-- on Examination -->
                                        <div class="row justify-content-center" id="titleBorder">
                                            <h6 >Advice</h6>
                                        </div>
                                        <div class="w-100" style="height:20px;"></div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row mt-2">
                                                    @if(!empty($prescription->alu1) || !empty($prescription->aru1) || !empty($prescription->ald1) || !empty($prescription->ard1))
                                                    <p>{{$prescription->aproblem1}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                @if(!empty($prescription->alu1) || !empty($prescription->aru1) || !empty($prescription->ald1) || !empty($prescription->ard1))
                                                <table id="maint">
                                                    <tr>
                                                        <td>
                                                            <table ID="INTER1" class="n-bordered d-block-inline">
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->alu1}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->aru1}}&nbsp;&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ald1}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ard1}}&nbsp;&nbsp;</td>
                                                                </tr>


                                                            </table>
                                                        </td>

                                                    </tr>
                                                </table>
                                                @endif
                                            </div>
                                            <div class="w-100" style="height:20px;"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row justify-content-center">
                                <div class="row justify-content-center">
                                    <!-- for investigation -->
                                    <div class="row justify-content-center">
                                        <!-- on Examination -->

                                        <div class="w-100"></div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row mt-2">
                                                    @if(!empty($prescription->alu2) || !empty($prescription->aru2) || !empty($prescription->ald2) || !empty($prescription->ard2))
                                                    <p>{{$prescription->aproblem2}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                @if(!empty($prescription->alu2) || !empty($prescription->aru2) || !empty($prescription->ald2) || !empty($prescription->ard2))
                                                <table id="maint">
                                                    <tr>
                                                        <td>
                                                            <table ID="INTER1" class="n-bordered d-block-inline">
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->alu2}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->aru2}}&nbsp;&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ald2}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ard2}}&nbsp;&nbsp;</td>
                                                                </tr>


                                                            </table>
                                                        </td>

                                                    </tr>
                                                </table>
                                                @endif
                                            </div>
                                            <div class="w-100" style="height:20px;"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="row justify-content-center">
                                <div class="row justify-content-center">
                                    <!-- for investigation -->
                                    <div class="row justify-content-center">
                                        <!-- on Examination -->

                                        <div class="w-100"></div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row mt-2">
                                                    @if(!empty($prescription->alu3) || !empty($prescription->aru3) || !empty($prescription->ald3) || !empty($prescription->ard3))
                                                    <p>{{$prescription->aproblem3}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                @if(!empty($prescription->alu3) || !empty($prescription->aru3) || !empty($prescription->ald3) || !empty($prescription->ard3))
                                                <table id="maint">
                                                    <tr>
                                                        <td>
                                                            <table ID="INTER1" class="n-bordered d-block-inline">
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->alu3}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->aru3}}&nbsp;&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ald3}}&nbsp;&nbsp;</td>
                                                                    <td>&nbsp;&nbsp;{{$prescription->ard3}}&nbsp;&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>

                                                    </tr>
                                                </table>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div style="height:50px"></div>
                            <div class="row justify-content-center" id="MeetBorder">
                                Meet me after: {{$prescription->meet}}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!-- For prescription -->
                            <div style="height:50px"></div>
                            <div class="row ml-4 mt-2 h5">
                                <p>Rx</p>
                            </div>
                            <div class="row ">

                                <div class="col-md-12"><pre class="h6">{{$prescription->prescription}}</pre></div>
                            </div>
                        </div>

                    </div>
                    <div class="row bg-primary text-light text-center mt-2" id="example3">
                        <!-- for footer part -->
                        <div class="col-md-6 mt-3">
                            <small><p class="h6">চেম্বারঃ নুরজাহান ডেন্টাল কেয়ার</p></small>
                            <small><p>{{$doc->addressBn}}</p></small>
                        </div>
                        <div class="col-md-6 mt-3">
                            <small><p class="h6">যোগাযোগঃডেন্টিস্ট মোঃ ফখরুল ইসলাম
                            </p></small>
                            <small>
                            <p>
                                মোবাইলঃ
                                 <strong>{{$doc->phoneBn}}</strong>
                            </p></small>
                        </div>

                    </div>
                    </div>
                        </div>
            </section>
    </div>

    <!--Toastr Notifier  -->
    <script src={{asset('js/toastr.min.js')}}></script>
            <script>
              @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
              @endif
            </script>
    <!--Toastr Notifier  -->
<script>


var btnContainer = document.getElementById("activebtns");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("act");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function() {
var current = document.getElementsByClassName("active");

// If there's no active class
if (current.length > 0) {
  current[0].className = current[0].className.replace(" active", "");
}

// Add the active class to the current/clicked button
this.className += " active";
});
}
</script>
<script src={{asset('public/js/jquery.min.js')}}></script>
<script src={{asset('public/js/popper.js')}}></script>
<script src={{asset('public/js/bootstrap.min.js')}}></script>
<script src={{asset('public/js/main.js')}}></script>
<script src={{asset('public/js/ajaxWorks.js')}}></script>
<script type="text/javascript" src={{asset('public/js/jquery.printPage.js')}}></script>
  </body>
</html>
