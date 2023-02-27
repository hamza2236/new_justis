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

        <!-- DataTables -->
        <link href="admin/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="admin/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

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
                                    <div class="card-body table-responsive">
        
                                        <h4 class="mt-0 header-title">Justice Call</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to Justice Call
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Firm</th>
                                                    <th>Appointment Date</th>
                                                    <th>Booking Date</th>
                                                    <th>Appointment Type</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="prof-img">
                                                                <img src="admin/assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                                                            </div>
                                                            <p class="px-3">
                                                                <b>Name</b><br>Lawyer
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        01 Mar 2023<br>3:03 PM
                                                    </td>
                                                    <td>
                                                        27 Feb 2023
                                                    </td>
                                                    <td>
                                                        Offine
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-danger">SCHEDULE</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#editAppoint">Edit Appointment</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-secondary" data-toggle="modal" data-target="#viewProfile">View Profile</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div><!-- container -->

                    <!-- Modal -->
                    <div class="modal fade" id="editAppoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Appointment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" id="date" name="date">
                                                </div>                                  
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-clock font-16"></i></span>
                                                    </div>
                                                    <input type="time" class="form-control" id="time" name="time">
                                                </div>                                  
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="viewProfile">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">View Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-6 text-center">
                                                         <img src="admin/assets/images/users/user-1.jpg" alt="profile-user">
                                                </div>
                                                <div class="col-sm-6 col-xs-6">
                                                    <h4>Name <br><br>109 Bd Carnot, 06400 Cannes, France</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                                
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <tr>
                                                    <th>Name</th>
                                                    <td><label>Mubashar</label></td>
                                                </tr>
                                                <tr>
                                                    <th>Appoinment date : </th>
                                                    <td><label>01 Mar 2023</label></td>
                                                </tr>
                                                <tr>
                                                    <th>Created date :  </th>
                                                    <td><label>27 Feb 2023</label></td>
                                                </tr>
                                                <tr>
                                                    <th>Pro Visit For :</th>
                                                    <td><label>Lawyer</label></td>
                                                </tr>
                                                <tr>
                                                    <th>Status :</th>
                                                    <td><label>SCHEDULE</label></td>
                                                </tr>
                                                <tr>
                                                    <th>Appointment Type :</th>
                                                    <td><label>Office</label></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                        </div>
                      </div>
                    </div>



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

        <!-- Required datatable js -->
        <script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="admin/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/plugins/datatables/jszip.min.js"></script>
        <script src="admin/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="admin/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="admin/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="admin/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="admin/assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

    </body>
</html>

<style>
    .prof-img{
        height: 60px;
        width: 60px;
    }
</style>
@endsection