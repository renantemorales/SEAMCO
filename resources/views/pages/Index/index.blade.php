@extends('layouts.header')
@section('content')  

<link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>
  <section class="wpm_slider_area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              
                <div class="item active">

                  <img src="{{url('images/slider/FINAL LOGO.jpg')}}" alt="...">
                  
                  <div class="carousel-caption">
                    <h1>Seafarers Mighty Credit Cooperative</h1><br>
                      <div class="container-login100-form-btn">
                        <a href="{!! url('/pages/Membership/seamco_membership'); !!}" class="login100-form-btn" name="login">Join us now</a>
                      </div>
                  </div>

                </div>
                
                <div class="item">
                
                <img src="{{url('images/slider/seamco_one_year.jpg')}}" alt="...">
                  
                  <div class="carousel-caption">
                    <h1>Seafarers Mighty Credit Cooperative</h1><br>
                      <div class="container-login100-form-btn">
                        <a href="{!! url('/pages/Membership/seamco_membership'); !!}" class="login100-form-btn" name="login">Join us now</a>
                      </div>
                  </div>

                </div>
                
                <div class="item">
                
                  <img src="{{url('images/slider/anniversary_post.jpg')}}" alt="...">
                  
                  <div class="carousel-caption">
                    <h1>Seafarers Mighty Credit Cooperative</h1><br>
                      <div class="container-login100-form-btn">
                        <a href="{!! url('/pages/Membership/seamco_membership'); !!}" class="login100-form-btn" name="login">Join us now</a>
                      </div>
                  </div>

                </div>
                
              </div><br/>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
   </section>

   <!--  -->
   <section class="wpm_welcome_area">
   
   		<div class="container">
        
        	<div class="row">
        
              <div class="col-sm-12">
                <!-- <div class="wpm_angle"></div> -->
                <h1>Your trusted partner in advancing economic and quality of life</h1>
                  <p>THRIFT - RESPECT - UNITY - SERVICE - TRANSPARENCY</p>
                <!-- <div class="wpm_angle"></div> -->
              </div>

          </div>
        
        </div>
   
   </section>

   <!--  -->
   <section class="wpm_feature_area">
   
        <div class="wpm_opacity" id="about-section">
   
   		<div class="container">
          <h1 style="color:#ffffff;text-align:left;">OUR GOALS</h1>
          <p>THE GOALS OF THIS COOPERATIVE ARE TO HELP IMPROVE THE QUALITY OF SERVICES OF ITS MEMBERS AND IN FURTHERANCE THERETO SHALL AIM</p>
          <br/><br/><br/><br/>
        	<div class="row">
            
            	<div class="col-sm-3">
                
                	<i class="fa fa-line-chart color1"></i>
                    
                    <h3>Save for the future!</h3>
                    
                    <p>Instill culture of saving and financial stability among its members.</p>
                
                </div>
                
                <div class="col-sm-3">
                
                    <i class="fa fa-star color3"></i>
                    
                    <h3>Life quality</h3>
                    
                    <p>Promote quality of life among members through mutual and SEAMCO Programs.</p>
                
                </div>
                
                
                <div class="col-sm-3">
                
                    <i class="fa fa-building color2"></i>
                    
                    <h3>Our part in the nation's economy</h3>
                    
                    <p>Implement programs and activities that addresses socio-economic needs of the community.</p>
                
                </div>

            	  <div class="col-sm-3">
                
                	<i class="fa fa-shield color3"></i>
                    
                    <h3>Secure your money</h3>
                    
                    <p>Provide protection to the loans and funds of the members.</p>
                
                </div>
            
            </div>
            <!--  -->
            <div class="row">
            
                <div class="col-sm-3">
                
                    <i class="fa fa-credit-card color2"></i>
                    
                    <h3>Loans for members</h3>
                    
                    <p>Source of credit for its members at affordable rates of interest.</p>
                
                </div>
                
                <div class="col-sm-3">
                
                    <i class="fa fa-arrows-alt color1"></i>
                    
                    <h3>To help more members!</h3>
                    
                    <p>Increase membership in regional and national level.</p>
                
                </div>
            
              <div class="col-sm-3">
              
                <i class="fa fa-lightbulb-o color2"></i>
                  
                  <h3>Share financial knowledge</h3>
                  
                  <p>Conduct financial education program for the members.</p>
              
              </div>
            
            </div>
            <!--  -->
        
        </div>
        
     </div>   
   
   </section>
    <!--  -->
   <section class="wpm_member_area">
   
    <div class="wpm_opacity" id="purpose-section">
   
    <div class="container">
        <h1></h1>
        <p></p><br/><br/><br/><br/>
        <div class="row">
        
          <div class="col-sm-6 " data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">

              <img src="{{url('images/seamco/Advert.png')}}">
            
            </div>
            
            <div class="col-sm-6">
            
              <h2>Purpose of <span class="wpm_bold">SEAMCO</span> </h2>
                
                <h4>The cooperative has been organized, bearing in mind the following ideologies:</h4>
                
                <ul class="list-group text-justify">
                  <li class="list-group-item">
                     <p><i class="fa fa-check color1"></i>&emsp;PROMOTES AND UNDERTAKES SAVINGS AND LENDING SERVICES AMONG ITS MEMBERS</p>
                  </li>
                  
                  <li class="list-group-item">
                     <p><i class="fa fa-check color1"></i>&emsp;GENERATES A COMMON POOL OF FUNDS IN ORDER TO PROVIDE FINANCIAL ASSISTANCE TO ITS MEMBERS FOR PRODUCTIVE AND PROVIDENT PURPOSES</p>
                  </li>
                  
                  <li class="list-group-item">
                     <p><i class="fa fa-check color1"></i>&emsp;ENGAGES TO PROVIDE THE BASIC AND NECESSARY SERVICES TO SEAFARERS AND TO THE MARITIME INDUSTRY AS A WHOLE</p>
                  </li>
                  
                  <li class="list-group-item">
                      <div class="container-login100-form-btn">
                        <a href="{!! url('/pages/Membership/seamco_membership'); !!}" class="login100-form-btn" name="login">Join us now</a>
                      </div>
                  </li>
                </ul>
            
            </div>
        
        </div>
    
    </div>
    </div>

  </section>

  <!--  -->
  <section class="wpm_about_area">
    <div class="wpm_opacity" id="mission-section">
   		<div class="container">
            <h1></h1>
            <p></p><br/><br/><br/><br/>
            <div class="row">
                <div class="col-sm-12" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}">
                
                  <img src="{{url('images/seamco/MISSION.png')}}">
            
                </div>
            </div>
        </div>
    </div>
    
    <div class="wpm_opacity" id="vision-section">
   		<div class="container">
            <h1></h1>
            <p></p><br/><br/><br/><br/>
            <div class="row">
                <div class="col-sm-12" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                
                  <img src="{{url('images/seamco/VISION.png')}}">
              
                </div>
            </div>
        </div>
        <br/>
    </div>
    
    <div class="wpm_opacity" id="vision-section">
   		<div class="container" style="background-color:#333;">
            <h1></h1>
            <p></p><br/><br/><br/><br/>
            <div class="row">
                <div class="col-sm-12" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
                  <h2 class="text-center">Join Us Today and Take Control of Your Future!</h2>
                </div>
                <div class="text-center">
                  <a href="{!! url('/pages/Membership/seamco_membership'); !!}" class="btn btn-primary" style="background-color:#2ACCC0;"><h1>REGISTER NOW</h1></a>
                </div>
            </div>
        </div>
        <br/><br/>
    </div>

   </section>
   <!--  -->
   <!--  -->
    
   <section class="wpm_portfolio">
    <div class="wpm_opacity" id="gallery-section">
   		<div class="container">
           <h1><span class="wpm_bold">GALLERY</span></h1>
           <p>SEAMCO'S EVENTS AND ACTIVITIES</p><br/><br/><br/><br/>
            <div class="row">
                <div class="col-sm-12">

                    <div class="gallery_container" class="carousel slide" data-ride="carousel">
                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/the_team.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/welcome1.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/all.jpg')}}">
                            </div>
                                
                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/arrival_2.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/cert.jpg')}}">
                            </div>
                                
                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/green.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/jjc.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/presentation.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/anniversary_post.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/arrival.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/blessing.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/first_year.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/happy.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/mangrove_tarp.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/planting_1.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/planting_2.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/planting_3.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/ribbon_cutting.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/seamco_one_year.jpg')}}">
                            </div>

                            <div class="mySlides">
                                <img class="gal_img" src="{{url('images/seamco/signing.jpg')}}">
                            </div>
                                
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                            <div class="gal_row">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </section>
   <!--  -->
   <section class="wpm_client_area">
   
   		<div class="container">
        
        	<div class="row">
            
            	<div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                
                	<img src="{{url('images/seamco/large_ad.png')}}">
                
                </div>
                
                <div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                
                  <img src="{{url('images/seamco/large_ad.png')}}">
                
                </div>
                
                <div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                
                  <img src="{{url('images/seamco/large_ad.png')}}">
                
                </div>
            
            </div>
        
        </div>
   
   </section>
      
   
@extends('layouts.footer')

<script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>
      
      <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("MySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 1000); // Change image every 2 seconds
      }
      </script>

   
   
   
   
   
   
   