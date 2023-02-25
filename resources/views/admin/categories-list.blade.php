@extends('admin.layouts.main')
@section('main-container-admin')
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

       
    @include('admin.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('admin.includes.sidebar')
                <!-- end left-sidenav-->


                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Categories List</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Welcome to JUSTISCALL
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Category NAME</th>
                                                <th>TYPE</th>
                                                <th>Fees</th>
                                                <th>Discount</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Justiscall PRO</td>
                                                    <td>Personal</td>
                                                    <td>100</td>
                                                    <td>20</td>
                                                    <td><button class="btn-success rounded">Enable</button></td>
                                                    <td class="action">
                                                        <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                        <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Justiscall PRO</td>
                                                    <td>Personal</td>
                                                    <td>100</td>
                                                    <td>30</td>
                                                    <td><button class="btn-danger rounded">Disable</button></td>
                                                    <td class="action">
                                                        <a href=""><i class="mdi mdi-pencil-box-outline"></i></a>
                                                        <a href="" class="ml-2"><i class="mdi mdi-delete"></i> </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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
    .action .mdi{
        font-size: 20px;
    }
</style>
@endsection