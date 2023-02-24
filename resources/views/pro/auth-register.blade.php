@extends('pro.layouts.main')
@section('main-container-admin-pro')

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
    <body style="background: #fff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-0 shadow-none">
                        <div class="card-body">  
                            <div class="px-3">
                                <div class="media">
                                    <a href="index.html" class="logo logo-admin"><img src="{{ url('assets/img/logo.png')}}" height="55" alt="logo" class="my-3"></a>
                                    <div class="media-body ml-3 align-self-center">   
                                        <h4 class="mt-0 mb-1">Free Register for Justis Call</h4>
                                        <p class="text-muted mb-0">Get your free Justis Call account now.</p>
                                    </div>
                                </div>                            
                                
                                <form class="form-horizontal my-4" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="fName">First Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="lName">Last Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="lName">
                                            </div>                                    
                                        </div>
                                    
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="eMial">Email Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="eMial" name="eMial" placeholder="Email Address">
                                            </div>                                    
                                        </div>
        
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="phNum">Phone Number</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="phNum" placeholder="Enter Phone Number" name="phNum">
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label for="category">Category Type</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option selected disabled>Choose Category Type</option>
                                                    <option value="1">Personal</option>
                                                    <option value="2">Firm</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="col-sm-12 pd text-center"><h3>Personal Details</h3></div>
                                        <div class="col-sm-12 fd text-center d-none"><h3>Firm Details</h3></div>
                                        

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="fName">First Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Gender</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option selected disabled>Choose Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>                                
                                        </div>
                                    
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label for="eMial">Email Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="eMial" name="eMial" placeholder="Email Address">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="address">Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="pCode">Postal Code</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-circle font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="pCode" placeholder="Enter Postal Code" name="pCode">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Country</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-city font-16"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option selected disabled>Choose Country</option>
                                                    
                                                </select>
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="city">City</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-city font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                                            </div>                                    
                                        </div>


                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Categories</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option selected disabled>Choose Category Type</option>
                                                    <option value="1">Lawyer</option>
                                                    <option value="2">Bailiff</option>
                                                    <option value="3">Notarie</option>
                                                    <option value="4">Legal Representative</option>
                                                    <option value="5">Chartered Accountant</option>
                                                </select>
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Sub Categories</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option selected disabled>Choose Sub Category</option>
                                                    <option value="1">Family, personal and property law</option>
                                                    <option value="2">Commercial, business and competition law</option>
                                                    <option value="3">Social security and social protection law</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12"></div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <input type="checkbox" name="all" id="all">
                                            <label class="mx-3" for="all"> Select all</label>
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="file-ip-1">Upload ID Card</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-cards font-16"></i></span>
                                                </div>
                                                <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);">
                                                <div class="preview">
                                                  <img id="file-ip-1-preview">
                                                </div>
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="profile">Upload Profile</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text form-control" id="basic-addon1"><i class="mdi mdi-image font-16"></i></span>
                                                </div>
                                                <input type="file" id="file-ip-11" class="form-control" accept="image/*" onchange="showPrevieww(event);">
                                                <div class="preview1">
                                                    <img id="file-ip-11-preview">
                                                </div>

                                            </div>                                    
                                        </div>

                                        <div class="col-sm-12">
                                            <h3 class="my-3 text-center">Work Timing</h3>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Monday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Tuesday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4 wed">
                                                    <b>Wednesday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Thursday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Friday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Saturday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Sunday</b>
                                                    <input type="checkbox" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name=""> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name=""> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="checkbox" name="">
                                            <label> Accept Terms & Conditions</label>
                                        </div>
                                        <div class="col-sm-8 col-xs-12">
                                            <h6>payment Accepted</h6>
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-6">
                                                    <input type="checkbox" name="">
                                                    <label>CASH</label>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <input type="checkbox" name="">
                                                    <label>Credit Card</label>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <input type="checkbox" name="">
                                                    <label>CHECK</label>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <input type="checkbox" name="">
                                                    <label>Wire Transfert</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                    </div>                            
                                </form>

                            </div>
                            
                            <div class="m-3 text-center bg-light p-3 text-primary">
                                <h5 class="">Already have an account ? </h5>
                                <p class="font-13">Login Frogetor Now</p>
                                <a href="#" class="btn btn-primary btn-round waves-effect waves-light px-3">Log in</a>                
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 px-0">
                    <div class="accountbg d-flex align-items-center"> 
                        <div class="account-title text-white text-center">
                            <img src="{{ url('assets/img/logo.png')}}" alt="" class="thumb-sm">
                            <h4 class="mt-3">Welcome To Justis Call</h4>
                            <div class="border w-25 mx-auto border-primary"></div>
                            <h1 class="">Let's Get Started</h1>
                            <p class="font-14 mt-3">Already have an account ? <a href="" class="text-primary">Login</a></p>
                           
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
    .form-input img {
        display:none;
    }
    #file-ip-1-preview, #file-ip-11-preview{
        height: auto;
        width: 60%;
        margin: 5% 0% 0% 20%;
    }
    .days{
        margin-bottom: 20px;
    }
    @media screen and (min-width: 320px) and (max-width: 1199px) {
        .days b{
            display: block !important;
        }
    }

    @media screen and (min-width: 320px) and (max-width: 424px) {
        .days input{
            width: 80px;
        }
    }
    @media screen and (min-width: 320px) and (max-width: 374px) {
        .wed{
            padding: 0px 0px;
        }
    }
</style>

<script type="text/javascript">
    function showPreview(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }
    function showPrevieww(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-11-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }
</script>
@endsection