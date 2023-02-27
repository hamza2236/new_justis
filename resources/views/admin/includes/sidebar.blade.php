<div class="left-sidenav">
                    
                    <ul class="metismenu left-sidenav-menu" id="side-nav">

                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{ url('admin-dashboard') }}"><i class="mdi mdi-monitor"></i><span>Dashboards</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-cards-outline"></i><span>Licence Management</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('all-subscription') }}"><span>Admin Subscription</span></a></li>
                                <li><a href="{{ url('add-subscription') }}"><span>Add Subscription</span></a></li> 
                                <li><a href="{{ url('admin-licence') }}"><span>Admin Licence</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-account-multiple"></i><span>Clients</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('all-client') }}"><span>All Clients</span></a></li>
                                <li><a href="{{ url('add-client') }}"><span>Add Client</span></a></li> 
                                <!-- <li><a href="{{ url('admin-licence') }}"><span>Admin Licence</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-format-page-break"></i><span>Referral Coupon</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('create-coupan') }}"><span>Create Coupan</span></a></li> 
                                <li><a href="{{ url('create-refferal') }}"><span>Create Referral</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-account-multiple-plus"></i><span>Category Management</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('categories-list') }}"><span>All Categories</span></a></li>
                                <li><a href="{{ url('add-categories') }}"><span>Add Categories</span></a></li>
                                <li><a href="{{ url('sub-categories-list') }}"><span>All Categories</span></a></li>
                                <li><a href="{{ url('add-sub-categories') }}"><span>Add Categories</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-account-multiple-plus"></i><span>Personal Category</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('lawyer-category') }}"><span>Lawyer</span></a></li> <!-- 
                                <li><a href=""><span>Bailiff</span></a></li>
                                <li><a href=""><span>Notarie</span></a></li>
                                <li><a href=""><span>Legal Representative</span></a></li>
                                <li><a href=""><span>Chartered Accountant</span></a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-account-multiple-plus"></i><span>Firm Category</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <!-- <li><a href=""><span>Lawyer Firm</span></a></li>
                                <li><a href=""><span>Bailiff Firm</span></a></li>
                                <li><a href=""><span>Notarie Firm</span></a></li>
                                <li><a href=""><span>Legal Representative Firm</span></a></li>
                                <li><a href=""><span>Chartered Accountant Firm</span></a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-message-text-outline"></i><span>Pro Chat</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('app-chat') }}"><span>Chat</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-cards-outline"></i><span>Firm Licence</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('admin-licence') }}"><span>Manage Licence</span></a></li>
                            </ul>
                        </li>
 <!--
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>App</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('app-chat') }}"><span>Chat</span></a></li>
                                <li><a href="{{ url('app-calendar') }}"><span>Calendar</span></a></li> 

                                <li>
                                    <a href="javascript: void(0);">ECommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="app-ecommerce-product.html">Product</a></li>
                                        <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                        <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                                        <li><a href="app-ecommerce-cart.html">Cart</a></li>
                                        <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="{{ url('app-contact-list') }}"><span>Contact List</span></a></li>
                            </ul>
                        </li>

                        

                       

                        <li class="menu-title">Components</li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-cards-playing-outline"></i><span>UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ url('ui-other-clipboard') }}">Clip Board</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('advanced-sweetalerts') }}">Sweet Alerts</a></li>
                                <li><a href="{{ url('advanced-ratings') }}">Ratings</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span class="badge badge-info float-right">8</span><span>Forms</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('forms-advanced') }}">Advance Elements</a></li>
                                <li><a href="{{ url('forms-wizard') }}">Wizard</a></li>
                                <li><a href="{{ url('forms-editors') }}">Editors</a></li>
                                <li><a href="{{ url('forms-repeater') }}">Repeater</a></li>
                                <li><a href="{{ url('forms-uploads') }}">File Upload</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-poll"></i><span>Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('charts-apex') }}">Apex</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                
                                <li><a href="{{ url('tables-datatable') }}">Datatables</a></li>
                            </ul>
                        </li>


                        <li class="menu-title">More</li>


                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('auth-login') }}">Login</a></li>
                                <li><a href="{{ url('auth-register') }}">Register</a></li>
                                <li><a href="{{ url('auth-recoverpw') }}">Recover Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Pages</span><span class="badge badge-success float-right">Hot</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{  url('page-invoice') }}">Invoice</a></li>
                                <li><a href="{{ url('page-profile') }}">Profile</a></li>
                                <li><a href="{{ url('page-pricing') }}">Pricing</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('email-templates-alert')  }}">Alert Email</a></li>
                            </ul>
                        </li> -->

                    </ul>
                </div>