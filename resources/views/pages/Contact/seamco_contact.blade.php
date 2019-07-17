@extends('layouts.header')
@section('content')   
<link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>
    <!--  -->
    <br/><br/>
   <section class="wpm_title_ber">
   
   <div class="wpm_opacity">
 
     <div class="container">
      
        <div class="row">
          
            <div class="col-sm-12">
              
                <h1>&nbsp;</h1>
                  
                <a href="{!! url('/pages/Index/'); !!}">Home</a> / <a href="{!! url('/pages/Contact/seamco_contact'); !!}">Contact</a>
              
              </div>
          
          </div>
      
      </div> 
      
    </div>  
      
 </section>
 <!--  -->
   <section class="wpm_contact_area">
      <div class="container" id="contact-section">
        
          <div class="row">
            <div class="col-sm-12">
                @if(!empty($message))
                        <div class="col-md-12">
                          <div class="box">
                            <div class="box-header with-border">
                              <h3 class="box-title">Successfully sent</h3>

                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                              <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            {{ $message }}
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                @endif
            </div>
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
          <!--  -->
          <div class="row">
                
              <div class="col-sm-6" style="border-style: dashed; padding: 5px;">
                
                  <h3>FOR COMMENTS AND SUGGESTIONS:</h3>
                    
                    <form action="{{ route('message.save') }}" method="POST">
                        @csrf
                        <input type="text" class="form-control"  placeholder="Name" name="Name" required>
                        
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email" name="Email" required>	

                        <input type="text" class="form-control" placeholder="Subject" name="Subject" required>	
                        
                        <textarea class="form-control" rows="5" placeholder="Write Massage" name="Content" required></textarea>
                        <!-- Test -->
                        <input class="btn btn-default" style="background-color: black;" type="submit" value="SUBMIT">
                    </form>    
                
              </div>

            </div>
              
              <br/> 


        </div>

    </section>

    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/dist/js/demo.js')}}"></script>
    <script>
    $('input').attr('autocomplete','off');
    </script>

@extends('layouts.footer')

   
   
   
   
   
   
   