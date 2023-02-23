@extends('pro.layouts.main')
@section('main-container-admin-pro')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Justiscall - Pro login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">

        <!-- App css -->
        <link href="{{ url('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-lg-6  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="index.html" class="logo logo-admin"><img src="{{ url('assets/img/logo.png') }}" height="55" alt="logo" class="my-3"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-0 mb-1">Login on Justiscall</h4>
                                </div>
                            </div>                            
                            
                            <form class="form-horizontal my-4" action="index.html">
    
                                <div class="form-group">
                                    <label for="username">Enter Phone Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>                                    
                                </div>
    
                                
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Send OTP <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                        <div class="account-social text-center">
                            <h6 class="my-4">Or Login With</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="">Don't have an account ? </h5>
                            <a href="#" class="btn btn-primary btn-round waves-effect waves-light">Free Resister</a>                
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-white text-center">
                        <img src="admin/assets/images/logo-sm.png" alt="" class="thumb-sm">
                        <h4 class="mt-3">Welcome To Frogetor</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                        <p class="font-14 mt-3">Don't have an account ? <a href="" class="text-primary">Sign up</a></p>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->


        <!-- jQuery  -->
        <script src="{{ url('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{ url('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ url('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{ url('admin/assets/js/jquery.slimscroll.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ url('admin/assets/js/app.js')}}"></script>

    </body>
</html>
@endsection