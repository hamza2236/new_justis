@extends('pro.layouts.main')
@section('main-container-admin-pro')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!--calendar css-->
        <link href="admin/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
          
    
    @include('pro.layouts.header')
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

             <!-- Left Sidenav -->
             @include('pro.includes.sidebar')
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-12"><h5>0</h5></div>
                                            <div class="col-12"><h5>Feedback</h5></div>
                                            <div class="col-12">
                                                <input type="range" class="form-control" value="0" name="">
                                            </div>
                                            <div class="col-12"><h5>Change 0%</h5></div>
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-12"><h5>0</h5></div>
                                            <div class="col-12"><h5>Positive Feedback</h5></div>
                                            <div class="col-12">
                                                <input type="range" class="form-control" value="0" name="">
                                            </div>
                                            <div class="col-12"><h5>Change 0%</h5></div>
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-12"><h5>0</h5></div>
                                            <div class="col-12"><h5>Negative Feedback</h5></div>
                                            <div class="col-12">
                                                <input type="range" class="form-control" value="0" name="">
                                            </div>
                                            <div class="col-12"><h5>Change 0%</h5></div>
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
               
                        </div><!--end row-->
                        

                        


                        <div class="row"> 
                            <div class="container-fluid"> 
                                <div class="row">
                                    <div class="col-sm-8 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id='calendar'></div>
                                                <div style='clear:both'></div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="text-center">Today Schedule</h4>
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="border-top-0">Schedule</th>
                                                            <th class="border-top-0 text-center">1</th>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th class="border-top-0">Check In</th>
                                                            <th class="border-top-0 text-center">0</th>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th class="border-top-0">Engaged</th>
                                                            <th class="border-top-0 text-center">1</th>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th class="border-top-0">Checked Out</th>
                                                            <th class="border-top-0 text-center">0</th>
                                                        </tr><!--end tr-->

                                                        <tr class="pb-5">
                                                            <td class="border-top-0 pt-5">Schedule at 02:00 PM</td>
                                                            <td class="border-top-0 text-center pt-5">
                                                                <button class="btn-submit form-control">
                                                                    CHECKIN
                                                                </button>
                                                            </td>
                                                        </tr><!--end tr-->

                                                        <tr class="pb-5">
                                                            <td class="border-top-0 pt-3">SCHEDULE</td>
                                                            <td class="border-top-0 text-center pt-3">
                                                                <button class="btn-submit form-control">SCHEDULE</button>
                                                            </td>
                                                        </tr><!--end tr-->


                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table> <!--end table--> 
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                </div><!-- End row -->
                            </div><!-- container -->   
                        </div><!--end row-->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body new-user order-list">
                                        <h4 class="header-title mt-0 mb-3">Appoinments Client List</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="thead-light">
                                                    <tr>
             
                                                        <th class="border-top-0">#</th>
                                                        <th class="border-top-0">CLIENT NAME</th>
                                                        <th class="border-top-0">PRO NAME</th>
                                                        <th class="border-top-0">APPOINTMENT TYPE</th>
                                                        <th class="border-top-0">BOOKING FOR</th>
                                                        <th class="border-top-0">STARTTIME</th>
                                                        <th class="border-top-0">ENDTIME</th>
                                                    </tr><!--end tr-->
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table> <!--end table-->                                        
                                        </div><!--end /div-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

        <script src="admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src='admin/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src='admin/assets/pages/jquery.calendar.js'></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>
<style>
    .btn-submit, .btn-cancel{
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
</style>
@endsection