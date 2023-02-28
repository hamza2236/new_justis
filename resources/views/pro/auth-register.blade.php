@extends('pro.layouts.main')


@section('header_style')
    <title>Justis Call</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
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
@endsection


@section('main_content')
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-0 shadow-none">
                        <div class="card-body">  
                            <div class="px-3">
                                <div class="media">
                                    <a href="/" class="logo logo-admin"><img src="{{ asset('assets/img/logo.png')}}" height="55" alt="logo" class="my-3"></a>
                                    <div class="media-body ml-3 align-self-center">   
                                        <h4 class="mt-0 mb-1">Free Register for Justis Call</h4>
                                        <p class="text-muted mb-0">Get your free Justis Call account now.</p>
                                    </div>
                                </div>                            
                                
                                <form class="form-horizontal my-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="fName">First Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="first_name" maxlength="255" required>
                                                @if($errors->any())
                                                        {{ implode('', $errors->all('<div style="color:red">:message</div>')) }}
                                                @endif
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="lName">Last Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="last_name" maxlength="255" required>
                                            </div>                                    
                                        </div>
                                    
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="eMial">Email Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="eMial" name="email" placeholder="Email Address" maxlength="255" required>
                                            </div>                                    
                                        </div>
        
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="phone_number">Phone Number</label>
                                            <div class="input-group mb-3">
                                                <!-- <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                                </div> -->
                                                <input type="textf" class="form-control" id="phone_number" placeholder="Enter Phone Number" name="" maxlength="50" required>
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label for="category">Category Type</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>
                                                <select class="form-control" required name="categories_type" id="category-type">
                                                    <option selected disabled>Choose Category Type</option>
                                                    <option value="Personal">Personal</option>
                                                    <option value="Firm">Firm</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="col-sm-12 pd text-center"><h3>Personal Details</h3></div>
                                        <div class="col-sm-12 fd text-center d-none"><h3>Firm Details</h3></div>
                                        

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="fName">Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fName" placeholder="Enter Name" name="personal_name" maxlength="255" required >
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Gender</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                </div>
                                                <select class="form-control" name="gender" required>
                                                    <option selected disabled>Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>                                
                                        </div>
                                    
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label for="personal_email">Email Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="personal_email" name="personal_email" placeholder="Email Address" maxlength="255" required>
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-12 ">
                                            <label for="google-map-address">Address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-outline font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="google-map-address" placeholder="Enter Address" name="address" size="50" required>
                                                <input type="hidden" name="latitude" id="latitude">
                                                <input type="hidden" name="longitude" id="longitude">
                                            </div>                                    
                                        </div>
                                        <div class="col-sm-6 col-md-12">
                                            <div id="map" style="height: 300px;"></div>
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="pCode">Postal Code</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-circle font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="pCode" placeholder="Enter Postal Code" name="post_code" required maxlength="50">
                                            </div>                                    
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Country</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-city font-16"></i></span>
                                                </div>
                                                <select class="form-control" name="country" required>
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="city">City</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-city font-16"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
                                            </div>                                    
                                        </div>


                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Categories</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>

                                                <select class="form-control" required name="category_id" id="category-id">
                                                    <option selected disabled>Choose Category</option>
                                                </select>


                                            </div>                                
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="category">Sub Categories</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                </div>
                                                <select class="form-control" name="sub_category_id" required id="sub-category-id" multiple>
                                                    <option selected disabled>Choose Sub Category</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12"></div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <input type="checkbox" name="select_all_subcategory" id="all">
                                            <label class="mx-3" for="all"> Select all</label>
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="file-ip-1">Upload ID Card</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-cards font-16"></i></span>
                                                </div>
                                                <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);" name="id_card_img" required>
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
                                                <input type="file" id="file-ip-11" class="form-control" accept="image/*" onchange="showPrevieww(event);" name="profile_img" required>
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
                                                    <input type="checkbox" name="monday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="monday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="monday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Tuesday</b>
                                                    <input type="checkbox" name="tuesday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="tuesday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="tuesday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4 wed">
                                                    <b>Wednesday</b>
                                                    <input type="checkbox" name="wednesday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="wednesday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="wednesday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Thursday</b>
                                                    <input type="checkbox" name="thursday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="thursday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="thursday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Friday</b>
                                                    <input type="checkbox" name="friday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="friday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="friday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Saturday</b>
                                                    <input type="checkbox" name="saturday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="saturday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="saturday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                            <div class="row days">
                                                <div class="col-4">
                                                    <b>Sunday</b>
                                                    <input type="checkbox" name="sunday" class="check-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>Form</b>
                                                    <input type="time" name="sunday_start_time" class="from-time"> 
                                                </div>
                                                <div class="col-4">
                                                    <b>To</b>
                                                    <input type="time" name="sunday_end_time" class="to-time"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="checkbox" name="" required>
                                            <label> Accept Terms & Conditions</label>
                                        </div>
                                        <div class="col-sm-8 col-xs-12">
                                            <h6>payment Accepted</h6>
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-6">
                                                    <input type="checkbox" name="cash">
                                                    <label>CASH</label>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <input type="checkbox" name="credit_card">
                                                    <label>Credit Card</label>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <input type="checkbox" name="check">
                                                    <label>CHECK</label>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <input type="checkbox" name="wire_transfer">
                                                    <label>Wire Transfert</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <input type="hidden" value="pro" name="user_type">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
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
@endsection


@section('script_code')
<!-- AIzaSyDvhmI6LY1QamKQmFQjVmvV2TwPRezt5IQ&libraries=places -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARfbA3PAh_LMFWodbQPchK8JCgALcRvwc"></script>
<script>
    var map;
    var service;
    var infowindow;

    function initialize() {
        var pyrmont = new google.maps.LatLng(-33.8665433, 151.1956316);

        map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 15
        })

        var input = document.getElementById('google-map-address');

        let autocomplete = new google.maps.places.Autocomplete(input)

        autocomplete.bindTo('bounds', map)

        let marker = new google.maps.Marker({
            map: map
        })

        google.maps.event.addListener(autocomplete, 'place_changed', () => {
            let place = autocomplete.getPlace()
      
            $('#latitude').val(place.geometry.location.lat());
            $('#longitude').val(place.geometry.location.lng());
     
                
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport)
            } else {
                map.setCenter(place.geometry.location)
                map.setZoom(17)
            }
            marker.setPosition(place.geometry.location)
            marker.setVisible(true)

            let request = {
                location: place.geometry.location,
                radius: '500',
                type: ['atm']
            }

            service = new google.maps.places.PlacesService(map)
            service.nearbySearch(request, callback)

        })

    }

    google.maps.event.addDomListener(window, 'load', initialize)
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script>
    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
    separateDialCode: true,
    preferredCountries:["FR"],
    hiddenInput: "mobile",
    
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });

</script>



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



    $(".check-time").change(function(){
        var checked=$(this).is(':checked');
        if(checked==true){   
            $(this).parent().closest(".days").find(".from-time").attr('required',"true");
            $(this).parent().closest(".days").find(".to-time").attr('required',"true");
        }else{
            $(this).parent().closest(".days").find(".from-time").removeAttr('required');
            $(this).parent().closest(".days").find(".to-time").removeAttr('required');
        }
    });

</script>

<script>
    // get pro categories
    $("#category-type").change(function(){
        var category_type = $(this).find(":selected").val();
        $.ajax({
            type:'get',
            url:'{!!URL::to('pro/getProCategoriesThroughCategoryTypeAjax')!!}',
            data:{'category_type':category_type},
            success:function(data)
            {
            $("#category-id").html('');
            $("#category-id").append(data);
            },
            error:function()
            {
            alert('error');
            }
        });
     });

    // get pro categories
    $("#category-id").change(function(){
        var category_id = $(this).find(":selected").val();
        $.ajax({
            type:'get',
            url:'{!!URL::to('pro/getProSubCategoriesThroughProCategoryAjax')!!}',
            data:{'category_id':category_id},
            success:function(data)
            {
            $("#sub-category-id").html('');
            $("#sub-category-id").append(data);
            },
            error:function()
            {
            alert('error');
            }
        });
     });      
            
</script>
@endsection
