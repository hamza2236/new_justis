@extends('admin.layouts.main')
@section('main-container-admin')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Justis Call</title>
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
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-lg-4 col-sm-3 col-xs-12"></div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="mb-0 shadow-none">
                        <div class="card-body">  
                            <div class="px-3">
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="logo logo-admin">
                                        <img src="{{ url('assets/img/logo.png')}}" height="55" alt="logo" class="my-3">
                                    </a>
                                </div>                            
                                
                                <form class="form-horizontal my-4" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <!-- <label for="uName">User Name</label> -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fName" placeholder="Enter User Name" name="uName">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-12">
                                            <!-- <label for="pass">Password</label> -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass">
                                            </div>                                    
                                        </div> 
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-3 mt-2"></div>
                                        <div class="col-sm-6 col-xs-12 mt-2">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Sign In</i></button>
                                        </div>
                                    </div>                            
                                </form>

                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
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
    body{
        background-image: url(assets/img/adminimages.jpg);
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
@endsection