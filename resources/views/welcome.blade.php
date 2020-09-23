<!doctype html>
<html lang="en">

<head>
    <title>Nurjahan Dental Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href={{asset('public/img/favicon.ico')}}>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src={{ asset('public/js/google_jquery.min.js') }}></script>

    <!-- Select2 event -->
    <link rel="stylesheet" href="{{asset('public/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href={{asset('public/css/style.css')}}>

    <link rel="stylesheet" href={{asset('public/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('public/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('public/css/toastr.min.css')}}>
    <link rel="stylesheet" href={{asset('public/css/sweetalert2.min.css')}}>
    <link rel="stylesheet" href={{asset('public/css/select2mod.css')}}>
    <link rel="stylesheet" href={{asset('public/css/myCheck.css')}}>

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4"
                style="background-image: url({{asset('public/images/bg_1.jpg')}});">
                <div class="user-logo">
                    <div class="img" style="background-image: url({{asset('public/images/logo.jpg')}});"></div>
                    <h3>Dr. Fakhrul Islam</h3>
                </div>
            </div>

            <ul id="activebtns" class="list-unstyled components sticky-top mb-5">
                <div>
                    @php
                    if($act == "new"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}}">
                        <a href="{{ route('NewPrescription.Page') }}"><img src="{{asset('public/img/newp.png')}}"
                                class="img-fluid mr-3" alt="Responsive image"> New Prescription</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "old"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href={{ route('oldPrescription.Page') }}><img src="{{asset('public/img/rx.png')}}"
                                class="img-fluid mr-3" alt="Responsive image"> Old Prescription</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "doc"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Doctor.Page') }}"><img src="{{asset('public/img/d.png')}}"
                                class="img-fluid mr-3" alt="Responsive image"> Doctors Info</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "on"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Examination.Page') }}"><img src="{{asset('public/img/ds.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">On Examinations</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "med"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Medicine.Page') }}"><img src="{{asset('public/img/m.png')}}"
                                class="img-fluid mr-3" alt="Responsive image"></span>Medicines</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "com"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Complaints.Page') }}"><img src="{{asset('public/img/c.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">Complaints</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "type"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Type.Page') }}"><img src="{{asset('public/img/drug.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">Medicine Types</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "in"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} }">
                        <a href="{{ route('Investigation.Page') }}"><img src="{{asset('public/img/test.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">Investigations</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "ad"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Advice.Page') }}"><img src="{{asset('public/img/a.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">Advices</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "how"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('Take.Page') }}"><img src="{{asset('public/img/h.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">How to take</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp
                    @php
                    if($act == "db"){
                    $act='active';
                    }
                    @endphp
                    <li class="{{$act}} ">
                        <a href="{{ route('db.backup') }}"><img src="{{asset('public/img/database.png')}}"
                                class="img-fluid mr-3" alt="Responsive image">Database Backup</a>
                    </li>
                    @php
                    if($act == "active"){
                    $act='';
                    }
                    @endphp

                </div>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>

        <!-- sweet alert start -->
        <script>
            $(document).on("click","#delete",function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                  window.location.href= link;
              }
            })
            });

        </script>
        <!-- sweet alert end -->



        <!--Toastr Notifier  -->
        <script src={{asset('public/js/toastr.min.js')}}></script>
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


        <script src={{asset('public/js/jquery.min.js')}}></script>
        <script src={{asset('public/js/popper.js')}}></script>
        <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src={{asset('public/js/bootstrap.min.js')}}></script>
        <script src={{asset('public/js/main.js')}}></script>
        <script src={{asset('public/js/ajaxWorks.js')}}></script>
        <script src={{asset('public/js/sweetalert2.min.js')}}></script>
        <!-- table -->
        <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script>
            $(function () {
        $("#Dtable1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#Dtable2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
        </script>
</body>

</html>
