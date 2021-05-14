@extends('layouts.app')

@section('content_head')
<link href="lib/bootstrap.min.css" rel="stylesheet">
<link href="lib/regiser.css" rel="stylesheet">
<link href="lib/footer.css" rel="stylesheet">

<style>
    .dtp > .dtp-content > .dtp-date-view > header.dtp-header{
        background: #036cdb;
    }
    .dtp div.dtp-date, .dtp div.dtp-time { background: #2283eb;}
    .dtp table.dtp-picker-days tr > td > a.selected{  background: #0367d3;}
    .dtp .p10 > a{color: #0062cc;}
    .dtp .dtp-actual-meridien a.selected {    background: #0062cc;}
    .year-picker-item.active{background: #0062cc;}
    .year-picker-item:hover{background: #0062cc;}
    .ti-angle-up{
        color: white;
    }


</style>
@endsection

@section('content')
<body>

   
      

    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="" alt="Logo">
                        <h3>Welcome !</h3>
                        <p>Create your account to be able to book at your favorite place</p>
                        <form action="register" method="POST">
                        @csrf
                        <button type="submit" name="" value="Register"><br>
                     </div>
                     <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" style="width: 14%;">
                            <li class="nav-item">
                                <a class="nav-link active"  aria-selected="true">User</a>
                            </li>
                      
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" >
                                <h3 class="register-heading" >User information</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="">
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10"  class="form-control" placeholder="Your Phone *" value=""  name="phone_number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="mdate form-control "placeholder="date of birth" name="birthday">
                                        </div>
                                        <div class="form-group">
                                            <label for="cert" class="btn"style="border:1px solid #ccc ;width: 100%;">Add Picture</label>
                                            <input type="file" class="d-none"  accept="image/*" id="cert" name="picture">
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    </div>
                </div>

            </div>
            
            

            <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>
  
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="proIndex2.html">Home</a></li>
                <li><a href="Login.html">Log in</a></li>
                <li><a href="user rigister.html">Sign Up</a></li>
                <li><a href="SM rigister.html">Add Place</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">@ Trip's Aid team 2021
              </p>
            </div>
  
          </div>
        </div>
  </footer>




           
        <script>
            //==================================================//
            //                  Normal Touchspin                //
            //==================================================//
            $("input[name='demo3']").TouchSpin();
            $("input[name='demo1']").TouchSpin();
            $("input[name='demo2']").TouchSpin();
            
            </script>
        <script>
            $(function(){
                $('.mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    
                
    
            });
            hljs.initHighlightingOnLoad();
        </script>
        
        <script>
            var stars = document.getElementById("stars");
            function dd(){alert(stars.value)}
            function starsValidate(){
                if (stars.value > 5){
                    stars.value = 5;
                }
               else if (stars.value < 1 && stars.value != Number(""))
               {
                    stars.value = 1;
                   
                }
                else if (stars.value == 0)
               {
                    stars.value = null;
                   
                }
                
              
            }
        </script>

        </body>
@endsection
