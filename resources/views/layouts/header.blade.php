<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEAMCO</title>

    <link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>
    <link href="{{ asset('/css/animation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet">
    <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">  

  </head>
  <body>
  
  <style>
    .fixednav
    {
      position: fixed;
      top: 0px;
      z-index:999;
    }
    .nav-link
    {
      color:pink;
    }
    .login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    background: #2BCDC1;
    font-family: Montserrat-Bold;
    font-size: 12px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    }
    .dropbtn {
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #0b0708;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #1e7f79;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: ;}

    /* ACCORDION */
    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }
    .active, .accordion:hover {
      background-color: #ccc; 
    }
    .accordion:after {
      content: '\002B';
      color: #777;
      font-weight: bold;
      float: right;
      margin-left: 5px;
    }
    .active:after {
      content: "\2212";
    }

    .panel {
      padding: 0 18px;
      display: none;
      background-color: white;
      overflow: hidden;
    }
    .panel.show {
    display: block !important;
    }

    /*  */
    .wpm_title_ber{ 
      width:100%; 
        background-image:url("{{url('/images/seamco/bg2.jpg')}}"); 
      background-size:cover; 
      text-align:center; 
      color:#FFF;}

    .gal_img {
    vertical-align: middle;
    width: 970px;
    min-height: 450px;
    max-height: 450px;
    margin-left: auto;
    margin-right: auto;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .gallery_container {
    position: relative;
    background-color:#222;
    }

    /* Hide the images by default */
    .mySlides {
    display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
    cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 35px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 5px 0 0 5px;
    }

    .prev {
    left: 0;
    border-radius: 5px 0 0 5px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */

    /* Container for image text */
    .caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
    }

    .gal_row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Six columns side by side */
    .gal_column {
    float: left;
    width: 16.66%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
    opacity: 0.6;
    width: 200px;
    min-height: 200px;
    max-height: 200px;
    }

    .active,
    .demo:hover {
    opacity: 1;
    }
    .wpm_frooter_ending{ 
      width:100%; 
      background-color:#151515; 
      padding:15px 0px; } 
    .wpm_frooter_ending p{ 
      font-size: 14px; 
      padding-top:5px; 
      color:#151515;}
    .wpm_frooter_ending h5{ 
      color:#ffffff;
      text-align:center;}
    .wpm_frooter_list{
      margin-left:187px;}
    .wpm_frooter_ending a{
      color:#151515; 
      margin-left:10px;}
    .wpm_frooter_ending a:hover{ 
      color:#151515;}
  </style>

   <header class="fixednav wpm_header">
    	 <div class="container"> 
          <div class="row">
              <div class="col-sm-2"  data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                <a href="{!! url('/pages/Index/'); !!}"><img class="wpm_logo" src="{{ asset('/images/logo/NEW.png') }}" alt=""></a>
              </div>
              
              <div class="col-sm-9">
                <nav class=" navbar navbar-default wpm_navber">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right wpm_menu"> 
                        
                          <li><a href="{!! url('/pages/Index/'); !!}">Home</a></li>
                          
                          <li><a href="{!! url('/pages/Index/'); !!}#about-section" class="nav-link">Our Goals</a></li>

                          <li class = "dropdown">
                            <a href="{!! url('/pages/Index/'); !!}#about-section" class = "dropbtn">About us</a>
                            <ul class = "dropdown-content">
                                <li><a href="{!! url('/pages/Index/'); !!}#purpose-section">Our Purpose</a></li>
                                <li><a href="{!! url('/pages/Index/'); !!}#mission-section">Our Mission</a></li>
                                <li><a href="{!! url('/pages/Index/'); !!}#vision-section">Our Vision</a></li>
                                <li><a href="{!! url('/pages/Index/'); !!}#gallery-section">Gallery</a></li>
                            </ul>
                          </li>

                          <li><a href="{!! url('/pages/Index/'); !!}#about-section">Featured</a></li>
                          <li class = "dropdown">
                            <a href="{!! url('/pages/Service/seamco_service'); !!}" class = "dropbtn">Products</a>
                            <ul class = "dropdown-content">
                                <a href="{!! url('/pages/Service/seamco_service'); !!}">Loans</a>
                                <a href="{!! url('/pages/Service/seamco_service_policy'); !!}">Loan Policy</a>
                                <a href="{!! url('/pages/Service/seamco_service_saving'); !!}">Savings</a>
                            </ul>
                          </li>

                          <li><a href="{!! url('/pages/FAQs/seamco_FAQs'); !!}">FAQs</a> </li>
                          <li><a href="{!! url('/pages/Contact/seamco_contact'); !!}">Contact us</a></li>
                          
                        </ul>
                      </div>
                  </nav>	
                </div>

          </div>
      </div>  
   </header>
   
@yield('content')