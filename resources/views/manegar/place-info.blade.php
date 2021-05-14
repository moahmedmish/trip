@extends('layouts.app')


@section('content_head')
<style>
    .HrefBooking{
        color:slategrey;
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    .Plcae-name{
        text-shadow: 0.1em 0.1em 0.1em #bbb;
    }
    .place-photo
    {
     white-space: nowrap;
 position: relative;
 overflow-x: auto;
 overflow-y: hidden;
 -webkit-overflow-scrolling: touch;
    }
      /*-----------scrollbar style----------*/
 ::-webkit-scrollbar {
width: 0.5em;
height: 0.4em;

}

/* Track */
::-webkit-scrollbar-track {
background: #dce3f8;
box-shadow: inset 0 0 5px gray;
}

/* Handle */
::-webkit-scrollbar-thumb {
background: rgb(112, 124, 138); 
border-radius: 1em;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
background: rgb(75, 79, 105);
}



</style>
@endsection


@section('content')

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
       <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                      
                        Trips Aid
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto float-left">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- Mega Menu -->
                        <!-- ============================================================== -->
                      
                        <!-- ============================================================== -->
                        <!-- End Mega Menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                  
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background-color:rgb(93, 118, 133) ; ">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/6.jpg" alt="user" class="w-100 rounded-circle" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <sapn class=" UserName w-100 text-white d-block position-relative"role="button" aria-haspopup="true" aria-expanded="true">Rula hamed</span>
                        
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   
                        
                
                    <ul id="sidebarnav" class="in">
                        
                
                        
                        <ul aria-expanded="false" class="collapse first-level in">
                            <li class="sidebar-item  active"><a href="overlay-Place Info.html" class="sidebar-link  active"><i class="fas fa-info"></i><span class="hide-menu"> Place Info </span></a></li>
                            <li class="sidebar-item "><a href="overlay-Rooms table.html" class="sidebar-link"><i class="fas fa-table"></i> <span class="hide-menu"> Rooms Table </span></a></li>
                            <li class="sidebar-item"><a href="overlay-Reservation dates.html" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Reservation dates </span></a></li>
                            <li class="sidebar-item"><a href="proUserProfile.html" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu">Profile </span></a></li>
                            
                        </ul>
                   
        
        <!-- End Bottom points-->
    </ul>
                       
                        
            <!-- Bottom points-->
            <div class="sidebar-footer">
               
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Place info</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Place info</li>
                    </ol>
                </div>
            
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-info  mb-5 Plcae-name">Foure season</h1>
                        <h6 class="card-subtitle"> To update Place information</h6>
                    </div>
                    <hr class="mt-0">
                    <form class="form-horizontal r-separator">
                        <div class="card-body">
                            <h4 class="ml-5">place information</h4>
                            <hr>
                        
                            <div class="form-group row align-items-center mb-0">
                                
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="icon-location-pin text-info"></i> Addriss</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Addriss Here">
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" mdi mdi-email-outline text-info"></i> Email</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email Here">
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" fas fa-star text-info"></i> Stars</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                   <div id="default-star-rating" style="cursor: pointer;"></div> 
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="fas fa-arrows-alt-h text-info"></i> X</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="Number" class="form-control" id="inputEmail3" placeholder="X Coordinates">
                                </div>
                            </div>
                            
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="fas fa-arrows-alt-v text-info"></i> Y</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="number" class="form-control" id="inputEmail3" placeholder="Y Coordinates">
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" fas fa-location-arrow text-info"></i> Region</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input list="Region" class="form-control" placeholder="The Region" >
                                    <datalist id="Region">
                                        <option value="mazza" class="col-12 col-md-2   d-inline border-success"></option>
                                   </datalist>
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0 place-photo">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label">Photos</label>
                                <div class="col-md-9 border-left pb-2 pt-2 place-photo">
                                    <a href="../My Assets/images/hh.jpg" class="image-popup-no-margins"><img src="../My Assets/images/hh.jpg" width="100" height="100"></a>
                                    <a href="../assets/images/background/تنزيل (2).jpg" class="image-popup-no-margins"><img src="../assets/images/background/تنزيل (2).jpg" width="100" height="100"></a> 
                                
                                    <label for="inputPhoto" class="btn btn-info ml-2"><i class="mdi mdi-plus font-16 mr-1"></i>Add photo</label>
                                    <input type="file" class="d-none"   accept="image/*" id="inputPhoto">
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-info waves-effect waves-light ">Save</button>
                                    <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                </div>
                            </div>
                        </div>
                        </form>
                            <!--------------------------Services------------------>
                            <div class="card-body">
                            <div class="mt-5">
                            <h4 class="ml-5">Services</h4>
                        </div>
                            <hr>
                            <div class="widget-content searchable-container list">
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <form>
                                                <input type="text" class="form-control product-search" id="input-search" placeholder="Search room...">
                                            </form>
                                        </div>
                                        <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                                <a href="#"  class="btn btn-info" data-toggle="modal" data-target="#AddService"><i class="mdi mdi-plus font-16 mr-1"></i> Add Room</a>
                                        </div>
                                </div>
                                </div>
                             
                                <div class="mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-striped search-table v-middle">
                                            <thead class="header-item">
                                              
                                                <th class="text-dark font-weight-bold">RoomID</th>
                                                <th class="text-dark font-weight-bold">Service name</th>
                                                <th class="text-dark font-weight-bold">Price</th>
                                              
                                                <th class="text-center">
                                                    <div class="action-btn">
                                                        <sapn class="delete-multiple  text-danger"></a><i class="fas fa-trash font-20 font-medium"></i> Delete Service</span>
                                                    </div>
                                                </th>
                                            </thead>
                                            <tbody>
                                                <!-- row -->
                                                <tr class="search-items">
                                                   
                                                   
                                                    <td>
                                                        <span>1</span>
                                                    </td>
                                                    <td>
                                                        <span>23</span>
                                                    </td>
                                                    <td>
                                                        <span>Clothes Clean</span>
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <div class="action-btn">
                                                            <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                            <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- /.row -->
                                                
                                                
            
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn btn-info waves-effect waves-light ">Save</button>
                                <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
     
            <!--========================================================= -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                @Trips aid team
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
             <!--===========================Delete Row========================-->

             <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Delete this Row</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="font-20 font-weight-bolder text-dark">Are you sure to Delete This Row ?</p>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button id="BookingUnConf" class="btn btn-danger"  data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================EndDelete Row========================-->

                <!--===========================Edit Row========================-->

             <div class="modal fade" id="EditRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Edit this Row</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Service name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="GuestNo" placeholder="Service name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Price" placeholder=" Service Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button id="BookingUnConf" class="btn btn-success"  data-dismiss="modal">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================EndEdit Row========================-->

                
                <!--===========================Add Row========================-->

             <div class="modal fade" id="AddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Add Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Service name</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="GuestNo" placeholder="Service name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="Price" placeholder="Service Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button id="BookingUnConf" class="btn btn-success"  data-dismiss="modal">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================EndAdd Row========================-->



 
    <!-- ============================================================== -->
    <!-- All Jquery -->
  
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <script src="../../dist/js/app.min.js"></script>
        <script src="../../dist/js/app.init.overlay.js"></script>
        <script src="../../dist/js/app-style-switcher.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
       
        <!--Menu sidebar -->
        
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
        <!--This page plugins -->
        
        <script src="../assets/extra-libs/prism/prism.js"></script>
        <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
            <script src="../assets/libs/magnific-popup/meg.init.js"></script>
    
            <script src="../assets/extra-libs/raty/rating-init.js"></script>
            <script src="../assets/libs/raty-js/lib/jquery.raty.js"></script>
    
    
    
</body>

@endsection
