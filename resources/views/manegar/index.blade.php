<!DOCTYPE html>
<!-- saved from url=(0026)http://192.168.1.101:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="lib/bootstrap.min-SmIndex.css">
   
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/room_info">Rooms</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/place_info">reservations</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                @foreach ($places as $place)
           <h1 class="masthead-heading mb-0">{{ $place->place_name}}</h1>       @endforeach
              <h2 class="masthead-subheading mb-0">&nbsp;</h2><a class="btn btn-dark btn-xl rounded-pill mt-5" role="button" href="/place_info">Edit place information</a></div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="./Service manager Index_files/01.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Room Manager</h2>
                        <p>You can manage the existing room information and amend it or add a grandfather room..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="./Service manager Index_files/02.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <h2 class="display-4"><strong>Manage reservations</strong></h2>
                        <p>Confirm or cancel reservations, or view the passport schedule ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"></div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="text-center text-white m-0 small">Copyright&nbsp;© Brand 2021</p>
        </div>
    </footer>
    <script src="./Service manager Index_files/jquery-3.4.1.min.js.download"></script>
    <script src="./Service manager Index_files/bootstrap.min.js.download"></script>
    <script id="bs-live-reload" data-sseport="59181" data-lastchange="1620430500618" src="./Service manager Index_files/livereload.js.download"></script>


</body></html>