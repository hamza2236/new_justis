@extends('client.layouts.main')
@section('main-container-client')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justice Call</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

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
                                                    <h4 class="mt-0 header-title">Favourite Personal</h4>
                                                    <p class="text-muted mb-4 font-13">Welcome to JUSTISCALL</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->             
                                    </div><!--end card-body-->                                    
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                       

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <h5>Name</h5>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fas fa-briefcase mr-2"></i>Lawyer
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-star mr-2"></i>(5/5/10) (5/5/5)
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-map-marker mr-2"></i>
                                                109 Boulevard Beaumarchais, Paris, France - 75003
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                Country: France
                                            </p>

                                             
                                            <a class="btn btn-sm btn-primary text-light mt-3 px-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3 px-3">Book Now</a>

                                            <p class="my-3 font-12 text-muted">
                                                <button class="btn-submit form-control">Unfavourite</button>
                                            </p>
                                        </div>
                                    </div><!--end card-body-->


                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <h5>Name</h5>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fas fa-briefcase mr-2"></i>Lawyer
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-star mr-2"></i>(5/5/10) (5/5/5)
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-map-marker mr-2"></i>
                                                109 Boulevard Beaumarchais, Paris, France - 75003
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                Country: France
                                            </p>

                                             
                                            <a class="btn btn-sm btn-primary text-light mt-3 px-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3 px-3">Book Now</a>

                                            <p class="my-3 font-12 text-muted">
                                                <button class="btn-submit form-control">Unfavourite</button>
                                            </p>
                                        </div>
                                    </div><!--end card-body-->


                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <h5>Name</h5>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fas fa-briefcase mr-2"></i>Lawyer
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-star mr-2"></i>(5/5/10) (5/5/5)
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-map-marker mr-2"></i>
                                                109 Boulevard Beaumarchais, Paris, France - 75003
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                Country: France
                                            </p>

                                             
                                            <a class="btn btn-sm btn-primary text-light mt-3 px-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3 px-3">Book Now</a>

                                            <p class="my-3 font-12 text-muted">
                                                <button class="btn-submit form-control">Unfavourite</button>
                                            </p>
                                        </div>
                                    </div><!--end card-body-->


                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card  profile-card">
                                    <img src="admin/assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <h5>Name</h5>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fas fa-briefcase mr-2"></i>Lawyer
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-star mr-2"></i>(5/5/10) (5/5/5)
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                <i class="fa fa-map-marker mr-2"></i>
                                                109 Boulevard Beaumarchais, Paris, France - 75003
                                            </p>
                                            <p class="mb-1 font-12 text-muted">
                                                Country: France
                                            </p>

                                             
                                            <a class="btn btn-sm btn-primary text-light mt-3 px-3">View Profile</a>
                                            <a class="btn btn-sm btn-info text-light mt-3 px-3">Book Now</a>

                                            <p class="my-3 font-12 text-muted">
                                                <button class="btn-submit form-control">Unfavourite</button>
                                            </p>
                                        </div>
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
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.min.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.min.js"></script>

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