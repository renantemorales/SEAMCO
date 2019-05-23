@extends('seamco.header')
@section('content')   
    <!--  -->
    <br/><br/>
   <section class="wpm_title_ber">
   
   <div class="wpm_opacity">
 
     <div class="container">
      
        <div class="row">
          
            <div class="col-sm-12">
              
                <h1>&nbsp;</h1>
                  
                <a href="{!! url('/seamco/'); !!}">Home</a> / <a href="{!! url('/seamco/seamco_contact'); !!}">Contact</a>
              
              </div>
          
          </div>
      
      </div> 
      
    </div>  
      
 </section>
 <!--  -->
   <section class="wpm_contact_area">
      <div class="container" id="contact-section">
        
          <div class="row">
            <div class="col-sm-12 text-center">
              
              <h2>GET IN <span class="wpm_bold">TOUCH</span></h2>
              
            </div>
          </div>

                      
          <div class="row wpm_margin_row">
            
            <div class="col-sm-6">
                <h3>Our Location</h3>
                <div class="embed-responsive embed-responsive-16by9 wpm_maph ">
                  <iframe src= "https://maps.google.com/maps?q=hotel%20de%20mercedes&t=&z=13&ie=UTF8&iwloc=&output=embed" width="730" height="370" frameborder="0" style="border:0"></iframe>
                </div> 
            </div>
            
            <div class="col-sm-6">
                <h3>&nbsp;</h3>
                <div class="contact_text">
                  <i class="fa fa-mobile"></i>
                    
                    <p>PHONE:<br> 0928 268 3776<br/>
                                413-2230</p>
                    <div class="clearfix"></div>
                </div>
                
                <div class="contact_text">
                  <i class="fa fa-envelope-o"></i>
                    
                    <p>EMAIL:<br> info@seamco.org</p>
                    <div class="clearfix"></div>
                </div>
                
                <div class="contact_text">
                  <i class="fa fa-map-marker"></i>
                    
                    <p>ADDRESS:<br> 2F Hotel De Mercedes Hotel, Pelaez Street, Brgy. Kalubihan, Cebu City</p>
                    <div class="clearfix"></div>
                </div>

                <div class="contact_text">
                  <i class="fa fa-thumbs-up"></i>
                    
                    <p>SOCIAL MEDIA:<br> <a href="https://www.facebook.com/seafafersmightycreditcoop/">SEAMCO Facebook page</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>

          </div>
          <br/>
          <div class="row">
                
              <div class="col-sm-6" style="background-color: black">
                
                  <h3 style="color:white;">FOR COMMENTS AND SUGGESTIONS:</h3>
                    
                    <form>
                    
                        <input type="text" class="form-control"  placeholder="Name">
                        
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">	

                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Subject">	
                        
                        <textarea class="form-control" rows="5" placeholder="Write Massage"></textarea>
                        
                        <input class="btn btn-default" type="submit" value="SUBMIT">
                        
                    </form>    
                
              </div>
            
            </div>


        </div>

    </section>
   
@extends('seamco.footer')

   
   
   
   
   
   
   