<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link href="lib/navBar.css" rel="stylesheet">

</head>

<body>
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
       
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
              
                Trips Aid
            </a>
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
            
            <ul class="navbar-nav float-right">
<li class="nav-item">
<a href="overlay-Place Info.html" class="nav-link active"><i class="fas fa-info"></i><span class="hide-menu"> Place Info </span></a>    
</li>
<li class="nav-item">
<a href="overlay-Rooms table.html" class="nav-link "><i class="fas fa-table"></i> <span class="hide-menu"> Rooms Table </span></a>    
</li>
<li class="nav-item">
<a href="overlay-Reservation dates.html" class="nav-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Reservation </span></a>  
</li>
<li class="nav-item">
<a href="overlay-Service managers tables.html" class="nav-link"><i class="fas fa-table"></i> <span class="hide-menu"> SM tables </span></a>  
</li>

<li class="nav-item">
<a href="overlay-user tables.html" class="nav-link"><i class="fas fa-user"></i><span class="hide-menu"> User table </span></a>
</li>

<li class="nav-item">
<a href="overlay-Places table.html" class="nav-link"><i class=" fas fa-warehouse"></i><span class="hide-menu"> Places tables </span></a>    
</li>


                <!-- ============profile========-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img alt="user" width="35" class="profile-pic rounded-circle" id="IMGProfile">  <span class="rounded-circle bg-light  pl-2 pr-2 pt-3 pb-3 text-dark font-14" id="profile" >profile</span>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                        <ul class="dropdown-user list-style-none">
                            <li>
                                <div class="dw-user-box p-3 d-flex">
                                    <div class="u-img"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded bg-light" width="80"></div>
                                    <div class="u-text ml-2">
                                        <h4 class="mb-0">Steave Jobs</h4>
                                        <p class="text-muted mb-1 font-14">varun@gmail.com</p>
                                        <a href="proUserProfile.html" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block">View
                                            Profile</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="" id="2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                            class="fas fa-sign-in-alt"></i>
                        <div class="notify">  </div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                        <ul class="list-style-none">
                           
                            <li>
                                <div class="message-center position-relative" style="height:150px;">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                     <h5><i class=" fas fa-sign-in-alt text-dark-info"></i> Sign in </h5>
                                    </a>
                                    <a href="user rigister.html" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <h5><i class="fas fa-registered text-dark-info"></i> Register </h5>
                                       </a>
                                       <a href="SM rigister.html" class=" d-flex align-items-center border-bottom px-3 py-2">
                                        <h5><i class=" fas fa-plus-circle text-dark-info"></i> Insert a place </h5>
                                       </a>
                                       </div>
                                       </li>
                                
                        </ul>
                    </div>
                </li>
               
                  
           
              </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
          </div>
          </nav>       
</header>
<script>
    var img = document.getElementById("IMGProfile");
    var spanDiv = document.getElementById("profile");
    if(img.src == "")
    {
        img.classList.add("d-none");
    }
    else if(img.src != "")
    {
        spanDiv.classList.add("d-none");
    }
    </script>
</body>
</html>