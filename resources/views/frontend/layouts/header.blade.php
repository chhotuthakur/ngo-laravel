<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        {{-- @foreach ($siteArr as $siteinfo ) --}}
          
        
        <title>title</title>
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

        <!-- Font awesome -->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">

        <!-- Template main Css -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        
        <!-- Modernizr -->
        <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>


    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              <div class="container">
                
                   <section>
                     <div class="row">
                 <div class="col sm">
                       <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" width="85px" alt=""></a>
                      
                      </div>
<div class="col sm">
  <h3 class="text-white">JAI SHRI RADHEY KRISHAN FOUNDATION</h3>
  <p class="squareleft"></p><p class="subtitle">Sabke Sath</p><p class="squareright"></p>

</div>
                     </div>
                
                   
                    


                   </section>
                    
               {{--      <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/images/logo.png')}}" width="85px" alt=""></a>
                    <h3 class="text-white">JAI SHRI RADHEY KRISHAN FOUNDATION</h3> --}}
                    
                  </div>
  
                
            
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  {{-- <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a> --}}
                 
                  
                </div>
                

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="{{url('/')}}">HOME</a></li>
                    <li><a href="{{url('/about')}}">ABOUT</a></li>
                    <li class="has-child"><a href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                      </ul>

                    </li>
                    <li><a href="{{url('/gallery')}}">GALLERY</a></li>
                    <li><a href="{{url('/contact')}}">CONTACT</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header>