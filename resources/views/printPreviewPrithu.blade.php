<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription</title>
    <link rel="stylesheet" href={{asset('public/css/style.css')}}>
    <link rel="stylesheet" href={{asset('public/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('public/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('public/css/toastr.min.css')}}>
</head>

<body>
    <div class="mainContainer" style="margin:0px;">
        <div class="topPortion" style="width:100%;height:280px;margin-left:0px;">
            <div class="" style="width:200px;height:100%;float:left;">
                <img src="{{asset('public/images/prescription/NDC-Logo.png')}}" class="ml-0"
                    style="height:180px; width:420px;" alt="Responsive image">

                <div class="card  text-white text-center justify-content-center" id="vtime"
                    style="width:200px;height:100px;margin-left:90px;background-color:#0099ff;">
                    <!-- Doc name en -->
                    <div class="card-body">
                        <h5 class="card-title text-white" style="font-size:17px;">
                            <strong>
                                
                            রোগী দেখার সময়ঃ
                            </strong>
                        </h5>
                        <p class="card-text" style="font-size:15px;">
                            <strong>
                                
                            {{$doc->vTimeBn}}
                            </strong>

                        </p>
                    </div>
                </div>

            </div>

            <div class="bg-primary text-center" style="width:545px;height:100%;float:right;">
                <div class="card bg-primary text-white border-0" style="width:300px;height:100%;float:left;">
                    <!-- Doc name bn -->
                    <div class="card-body">
                        <p class="h4 text-white mb-0">
                            <strong>{{$doc->dNameBn}}</strong>
                        </p>
                        <pre class="text-white" style="font-size:18px;">
                            {{$doc->designationBn}}
                        </pre>

                    </div>




                </div>


                <div class="card bg-primary text-white border-0 "
                    style="width:245px;height:100%;float:left; margin:0px;">
                    <!-- Doc name en -->
                    <div class="card-body">
                        <h5 class="card-title text-white " style="font-size: 25px;">
                            <strong>চেম্বারঃ</strong>
                        </h5>
                        <h5 class="card-title text-white" style="font-size: 22px;">
                            <strong>নুরজাহান ডেন্টাল কেয়ার</strong>
                        </h5>
                        <p class="card-text" style="font-size:20px;">
                            পূর্ব গলি, বাংলাবাজার, বেগমগঞ্জ, নোয়াখালী।
                        </p>
                        <p class="card-text" style="font-size:20px;">
                            মোবাইলঃ ০১৮১৮-৫৩৭০৯৩
                        </p>
                    </div>
                    {{-- <div class="card bg-primary text-white justify-content-center ml-5 mt-2" id="vtime"
                        style="width:200px;height:150px;">
                        <!-- Doc name en -->
                        <div class="card-body">
                            <h5 class="card-title text-white">
                                Visiting Hour:
                            </h5>
                            <p class="card-text" style="font-size:17px;">

                                {{$doc->vTimeEn}}

                    </p>
                </div>
            </div> --}}
        </div>
    </div>
    </div>

    <div class="text-white text-center" style="width:100%;height:30px;background:gray;">
        <div class="h-100 float-left ml-5 mt-0" style="width:50px; font-size:18px">
            <strong>ID: {{$prescription->id}}</strong>
        </div>
        <div class="h-100 float-left ml-5 mt-0" style="width:300px;font-size:18px">
            <strong>Name: {{$prescription->pName}}</strong>
        </div>
        <div class="h-100 w-25 float-left mt-0" style="font-size:18px;">
            <strong>Age: {{$prescription->pAge}}</strong>
        </div>
        <div class="h-100 w-25 float-left mt-0" style="font-size:18px;">
            <strong>Date: {{$prescription->date}}</strong>
        </div>
    </div>

    <!-- Prescription part will be here -->
    <div class="middlepart" style="width:100%;height:980px;">
        <div class="middleLeft h-100 float-left" id="prescriptionBorder" style="width:370px;">
            <div class="card   border-0" style="width:400px;height:140px;float:none; background-color:rgba(0,0,0,.1);">
                <!-- Doc name bn -->
                <div class="card-body">
                    <h5 class="card-title text-center ml-4" style="font-size:18px;">
                        <strong>Chief Complaints</strong>
                    </h5>
                    <hr>
                    <p class="card-text text-center" style="font-size:18px;">
                        @foreach ($prescription->complaints as $complaint)
                        @if ($loop->index > 0)
                        ,&nbsp;
                        @endif
                        {{$complaint->complaint}}
                        @endforeach
                        {{-- {{$prescription->complaints}} --}}
                    </p>
                </div>
            </div>
            <div class="card    border-0" style="width:400px;height:231px;float:none; background-color:rgba(0,0,0,.1);">
                <!-- Doc name bn -->
                <div class="card-body">
                    <h5 class="card-title text-center ml-4" style="font-size:18px;">
                        <strong>On Examination</strong>
                    </h5>
                    <hr>
                    @if(empty($prescription->elu) && empty($prescription->eru) && empty($prescription->eld)
                        && empty($prescription->erd))
                        <div class="problem card-text" style="font-size:18px;width:100%;">
                        @if(!empty($prescription->eproblem))
                        <p class="text-center">{{$prescription->eproblem}}</p>
                        @endif
                    </div>

                        @else

                    <div class="problem card-text float-left" style="font-size:18px;width:200px;">
                        @if(!empty($prescription->eproblem))
                        <p>{{$prescription->eproblem}}</p>
                        @endif
                    </div>
                    @endif

                    
                    <div class="position card-text float-right" style="font-size:18px;width:130px;">
                        @if(!empty($prescription->elu) || !empty($prescription->eru) || !empty($prescription->eld)
                        || !empty($prescription->erd))
                        <table id="maint">
                            <tr>
                                <td>
                                    <table ID="INTER1" class="n-bordered d-block-inline">
                                        <tr>
                                            <td>&nbsp;&nbsp;{{$prescription->elu}}&nbsp;&nbsp;</td>
                                            <td>&nbsp;&nbsp;{{$prescription->eru}}&nbsp;&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp;{{$prescription->eld}}&nbsp;&nbsp;</td>
                                            <td>&nbsp;&nbsp;{{$prescription->erd}}&nbsp;&nbsp;</td>
                                        </tr>


                                    </table>
                                </td>
                            </tr>
                        </table>
                        @endif
                    </div><br>
                    <div class="Description text-center float-left mt-2" style="font-size:18px;width:100%;">

                        @foreach ($prescription->examinations as $examinations)
                        @if ($loop->index > 0)
                        ,&nbsp;
                        @endif
                        {{$examinations->onExamination}}
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="card    border-0" style="width:400px;height:200px;float:none; background-color:rgba(0,0,0,.1);">
                <!-- Doc name bn -->
                <div class="card-body">
                    <h4 class="card-title text-center ml-4" style="font-size:18px;">
                        <strong>Investigation</strong>
                    </h4>
                    <hr>
                    @if(empty($prescription->ilu) && empty($prescription->iru) && empty($prescription->ild)
                        && empty($prescription->ird))
                        <div class="problem card-text" style="font-size:18px;width:100%;">
                        @if(!empty($prescription->iproblem))
                        <p class="text-center">{{$prescription->iproblem}}</p>
                        @endif
                    </div>

                        @else

                    <div class="problem card-text float-left" style="font-size:18px;width:200px;">
                        @if(!empty($prescription->iproblem))
                        <p>{{$prescription->iproblem}}</p>
                        @endif
                    </div>
                    @endif
                    <div class="position card-text float-right" style="font-size:18px;width:130px;">
                        @if(!empty($prescription->ilu) || !empty($prescription->iru) || !empty($prescription->ild)
                        || !empty($prescription->ird))
                        <table id="maint">
                            <tr>
                                <td>
                                    <table ID="INTER1" class="n-bordered d-block-inline">
                                        <tr>
                                            <td>&nbsp;&nbsp;{{$prescription->ilu}}&nbsp;&nbsp;</td>
                                            <td>&nbsp;&nbsp;{{$prescription->iru}}&nbsp;&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp;{{$prescription->ild}}&nbsp;&nbsp;</td>
                                            <td>&nbsp;&nbsp;{{$prescription->ird}}&nbsp;&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>
                        @endif
                    </div><br>
                    <div class="Description text-center float-left mt-2" style="font-size:18px;width:100%;">
                        @foreach ($prescription->investigations as $investigations)
                        @if ($loop->index > 0)
                        ,&nbsp;
                        @endif
                        {{$investigations->investigation}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card border-0" style="width:400px;height:408px;float:none; background-color:rgba(0,0,0,.1);">
                <!-- Doc name bn -->
                <div class="card-body">
                    <h4 class="card-title text-center ml-4" style="font-size:18px;">
                        <strong>Advice</strong>
                    </h4>
                    <hr>
                    @if (!empty($prescription->aproblem1) || !empty($prescription->alu1) || !empty($prescription->aru1)
                    ||
                    !empty($prescription->ald1) || !empty($prescription->ard1))
                    {{-- Start --}}
                    @if(empty($prescription->alu1) && empty($prescription->aru1) && empty($prescription->ald1)
                        && empty($prescription->ard1))
                        <div class="problem card-text" style="font-size:18px;width:100%;">
                        @if(!empty($prescription->aproblem1))
                        <p class="text-center">{{$prescription->aproblem1}}</p>
                        @endif
                    </div>

                        @else

                    <div class="problem card-text float-left" style="font-size:18px;width:200px;">
                        @if(!empty($prescription->aproblem1))
                        <p>{{$prescription->aproblem1}}</p>
                        @endif
                    </div>
                    @endif
                    {{-- End --}}
                    
                        @if(!empty($prescription->alu1) || !empty($prescription->aru1) ||
                        !empty($prescription->ald1) || !empty($prescription->ard1))
                    <div class="position card-text float-right" style="font-size:18px;width:130px;">
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
                    </div>
                    <br>
                    <div class="emptydiv" style="height:50px;width:200px;"></div>
                        @endif
                    
                    @endif

                    @if(!empty($prescription->alu2) || !empty($prescription->aru2) ||
                    !empty($prescription->ald2) || !empty($prescription->ard2) || !empty($prescription->aproblem2))
                    {{-- Start --}}
                    @if(empty($prescription->alu2) && empty($prescription->aru2) && empty($prescription->ald2)
                        && empty($prescription->ard2))
                        <div class="problem card-text" style="font-size:18px;width:100%;">
                        @if(!empty($prescription->aproblem2))
                        <p class="text-center">{{$prescription->aproblem2}}</p>
                        @endif
                    </div>

                        @else

                    <div class="problem card-text float-left" style="font-size:18px;width:200px;">
                        @if(!empty($prescription->aproblem2))
                        <p>{{$prescription->aproblem2}}</p>
                        @endif
                    </div>
                    @endif
                    {{-- End --}}
                    
                        @if(!empty($prescription->alu2) || !empty($prescription->aru2) ||
                        !empty($prescription->ald2) || !empty($prescription->ard2))
                    <div class="position card-text float-right" style="font-size:18px;width:130px;">
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
                    </div><br>
                    <div class="emptydiv" style="height:50px;width:200px;"></div>
                        @endif
                    @endif

                    @if(!empty($prescription->alu3) || !empty($prescription->aru3) ||
                    !empty($prescription->ald3) || !empty($prescription->ard3) || !empty($prescription->aproblem3))
                    {{-- Start --}}
                    @if(empty($prescription->alu3) && empty($prescription->aru3) && empty($prescription->ald3)
                        && empty($prescription->ard3))
                        <div class="problem card-text" style="font-size:18px;width:100%;">
                        @if(!empty($prescription->aproblem3))
                        <p class="text-center">{{$prescription->aproblem3}}</p>
                        @endif
                    </div>

                        @else

                    <div class="problem card-text float-left" style="font-size:18px;width:200px;">
                        @if(!empty($prescription->aproblem3))
                        <p>{{$prescription->aproblem3}}</p>
                        @endif
                    </div>
                    @endif
                    {{-- End --}}
                    
                        @if(!empty($prescription->alu3) || !empty($prescription->aru3) ||
                        !empty($prescription->ald3) || !empty($prescription->ard3))
                    <div class="position card-text float-right" style="font-size:18px;width:130px;">
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
                         
                    </div>
                    <div class="emptydiv" style="height:50px;width:200px;"></div>
                <br><br>
                        @endif
                   
                    @endif
                </div>
                <div class="text-center justify-content-center" style=" font-size:18px;width:100%;float:none;">
                    @foreach ($prescription->advices as $advices)
                    @if ($loop->index > 0)
                    ,&nbsp;
                    @endif
                    {{$advices->advice}}
                    @endforeach
                </div>

            </div>
            <!-- meet me -->

        </div>
        <div class="middleRight h-100 float-right" style="width:546px;border-left:2px solid #0099ff;">
            <div class="RxPart" style="margin-left:30px;margin-top:40px;">
                <p class="h4">Rx</p>
            </div>
            <div class="prescriptionPart" style="margin-left:80px;margin-top:40px;">
                <pre style="font-size:20px;" class="h6">{{$prescription->prescription}}</pre>
                <div class="" style="font-size:20px;height:50px;float:none;">
                    @if(!empty($prescription->meet))
                    <strong>{{$prescription->meet}} পর আবার আসবেন।</strong>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Prescription part will be here -->

    <div class="bg-primary text-light text-center p-3" style="width:100%;height:65px;">
        <p class="h4 text-light" style="word-spacing: 5px; font-size: 30px;"><strong>দাঁতের যত্নে প্রতি ৬ মাস অন্তর
                আপনার ডেন্টিস্টের
                পরামর্শ নিন। </strong></p>
        <!-- for footer part -->
        {{-- <div class="w-50 float-left mt-3 ">
            <p class="h4 text-light"><strong>চেম্বারঃ নুরজাহান ডেন্টাল কেয়ার</strong></p>
            <p class="h5 text-light"><strong>{{$doc->addressBn}}</strong></p>
    </div> --}}
    {{-- <div class="w-50 float-left mt-3 ">
            <p class="h4 text-light"><strong>প্রতি সোমবার ডেন্টাল সার্জন রোগী দেখেন। </strong>
            </p>

            <p class="h5 text-white">

                <strong>মোবাইলঃ{{$doc->phoneBn}}</strong>
    </p>
    </div> --}}

    </div>
    </div>
</body>

</html>
