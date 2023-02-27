@extends('client.layouts.main')
@section('main-container-client')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <link href="admin/assets/plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">


        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

    @include('client.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('client.includes.sidebar')
                <!-- end left-sidenav-->


                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <h4 class="mt-0 header-title">Professional's Profile</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->


                        <div class="row">

                            <div class="col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="mt-0 header-title">Booking Summery</h4>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded pt-3 pb-2">
                                                            <div class="col-sm-12 col-xs-12 mt-3">
                                                                <input type="checkbox" name=""> 
                                                                <label>
                                                                    I have read and accept 
                                                                    <a href="">Terms & Conditions</a>
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-8 col-xs-12 mt-3"></div>
                                                            <div class="col-sm-4 col-xs-12 mt-3">
                                                                <button class="btn-submit form-control">
                                                                    Confirm
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade  show active" id="profile-settings">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h4 class="mt-0 header-title">Booking Summery</h4>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="row border rounded pt-3 pb-5">
                                                            <div class="col-sm-5 col-xs-12 mt-3">
                                                                <div class="profile-image-div">
                                                                    <img src="admin/assets/images/users/user-1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7 col-xs-12 mt-3">
                                                                <div class="col-sm-12">
                                                                    <h4>Name</h4>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i> (5/5)</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label>
                                                                        <i class="mdi mdi-map-marker"></i>
                                                                        109 Bd Carnot, 06400 Cannes, France
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xs-12 mt-3">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-xs-6">
                                                                        <b>Date</b>
                                                                    </div>
                                                                    <div class="col-lg-7 col-xs-6">
                                                                        <label>02 March, 2023</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xs-12 mt-3">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-xs-6">
                                                                        <b>Time</b>
                                                                    </div>
                                                                    <div class="col-lg-7 col-xs-6">
                                                                        <label>12:30 PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            

                                                        </div>
                                                    </div>

                                                    


                                                </div> <!--end col-->                                          
                                            </div><!--end row-->
                                        </div><!--end tab-pane-->
                                    </div>  <!--end tab-content-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->

                        </div><!--end col-->

                         <div class="row mt-5 pt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <footer class="footer text-center text-sm-left">
                                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                                    </footer>                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!-- container -->

                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

        <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="admin/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="admin/assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="admin/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="admin/assets/plugins/chartjs/chart.min.js"></script>
        <script src="admin/assets/pages/jquery.profile.init.js"></script>

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