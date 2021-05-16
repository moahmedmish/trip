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
                            <li class="sidebar-item "><a href="overlay-Place Info.html" class="sidebar-link "><i class="fas fa-info"></i><span class="hide-menu"> Place Info </span></a></li>
                            <li class="sidebar-item active"><a href="overlay-Rooms table.html" class="sidebar-link active"><i class="fas fa-table"></i> <span class="hide-menu"> Rooms Table </span></a></li>
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
                    <h3 class="text-themecolor mb-0">Rooms table</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rooms table</li>
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
                <!-- ============================================================== -->
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                                <div class="col-md-4">
                                    <form>
                                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search room...">
                                    </form>
                                </div>
                                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                        <a href="#"  class="btn btn-info" data-toggle="modal" data-target="#AddRoom"><i class="mdi mdi-plus font-16 mr-1"></i> Add Room</a>
                                </div>
                        </div>
                    </div>
                 
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item">
                                  
                                    <th class="text-dark font-weight-bold">RoomID</th>
                                    <th class="text-dark font-weight-bold">Price</th>
                                    <th class="text-dark font-weight-bold">Number Of Guests</th>
                                    <th class="text-dark font-weight-bold">Descriptoin</th>
                                    <th class="text-dark font-weight-bold">Photo</th>
                                    <th class="text-dark font-weight-bold"></th>
                                    <th class="text-center">
                                        <div class="action-btn">
                                            <sapn class="delete-multiple  text-danger"></a><i class="fas fa-trash font-20 font-medium"></i> Delete Row</span>
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
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <span>it have tow single beds</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="srcPhoto" src="../assets/images/background/تنزيل (1).jpg"  width="35" data-toggle="modal" data-target="#PhotoModal">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="TsTherePhoto"></h5>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="overlay-Reservation dates.html" class="HrefBooking">Reservation dates</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                     <!-- row -->
                                     <tr class="search-items">
                                       
                                       
                                        <td>
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <span>23</span>
                                        </td>
                                        <td>
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <span>it have one single beds</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="srcPhoto" src="../assets/images/background/تنزيل (1).jpg"  width="35" data-toggle="modal" data-target="#PhotoModal">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="TsTherePhoto"></h5>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="overlay-Reservation dates.html" class="HrefBooking">Reservation dates</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                     <!-- row -->
                                     <tr class="search-items">
                                       
                                       
                                        <td>
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <span>23</span>
                                        </td>
                                        <td>
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <span>it have one double beds</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="srcPhoto" src="../assets/images/background/تنزيل (1).jpg"  width="35" data-toggle="modal" data-target="#PhotoModal">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="TsTherePhoto"></h5>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="overlay-Reservation dates.html" class="HrefBooking">Reservation dates</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                     <!-- row -->
                                     <tr class="search-items">
                                       
                                       
                                        <td>
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <span>23</span>
                                        </td>
                                        <td>
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <span>it have one single beds</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="srcPhoto" src="../assets/images/background/تنزيل (1).jpg"  width="35" data-toggle="modal" data-target="#PhotoModal">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="TsTherePhoto"></h5>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="overlay-Reservation dates.html" class="HrefBooking">Reservation dates</a>
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
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Number of  guest</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="GuestNo" placeholder="Number of guest">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Price" placeholder="Price for night">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">photo</label>
                                            <button class="btn btn-light-info mb-2"><label for="RoomPhoto">Change Photo</label> </button>
                                                <img src="../assets/images/background/تنزيل (1).jpg"  width="75%" style="margin-left: 13%;">
                                                <input type="file" class="d-none" id="RoomPhoto" accept="image/*">
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

             <div class="modal fade" id="AddRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Add Room</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Number of  guest</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="GuestNo" placeholder="Nimber of guest">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="Price" placeholder="Price for night">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">photo</label>
                                            <button class="btn btn-light-info mb-2"><label for="RoomPhoto">Upload Photo</label> </button>
                                                <img  width="75%" style="margin-left: 13%;">
                                                <input type="file" class="d-none" id="RoomPhoto" accept="image/*">
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



     <!--=================== Photo Room  modal===========================-->

     <div class="modal fade" id="PhotoModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg ">
         <div class="modal-content">
             
             <div class="modal-body p-0">
                <img src="../assets/images/background/تنزيل (1).jpg" width="100%">
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->

 <script>
    var IsThrePhoto = document.getElementsByClassName("TsTherePhoto");
    var RoomImg = document.getElementsByClassName("srcPhoto");
     for(i = 0 ; i < IsThrePhoto.length ; i ++)
     {
   if(RoomImg[i].src !="")
   {
       IsThrePhoto[i].innerHTML = "";
   }
   else {
       IsThrePhoto[i].innerHTML = "no Photo";
   }
     } 
     function ss (){
         alert(RoomImg[0].src)
     }
       </script>

       
@endsection
