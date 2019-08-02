@extends('layouts.header')
@section('content')   
<link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>

   <section class="wpm_member_area">
   
   	<div class="container">
        <br/><br/><br/><br/>
        	<div class="row">
        
              <div class="col-sm-12">
                <!-- <div class="wpm_angle"></div> -->
                <!-- src="{{ asset('/images/logo/final.png') }}" -->
                <img src="{{ asset('/images/seamco/seamco_logo_final.png') }}" alt="...">
                <!-- <div class="wpm_angle"></div> -->
              </div>

          </div>
          <br/><br/><br/>

        	<div class="row">
              <div class="col-sm-3">
                  
                  <h1><a href="#" style="text-decoration:none;color:#000000;" data-toggle="modal" data-target="#modal-registrationcert">REGISTRATION CERTIFICATE</a></h1>
                  <!-- <a class="image-link" href="{{ asset('images/seamco/registration_cert.jpg') }}">Open popup</a> -->
              </div>

              <div class="col-sm-2">
                  
                  <h1><a href="{!! url('/pages/Register/seamco_register'); !!}" style="text-decoration:none;color:#000000;">CREATE AN ACCOUNT</a></h1>
              
              </div>

              <div class="col-sm-2">
                  
                  <h1><a href="http://52.221.234.223/login" style="text-decoration:none;color:#000000;">I HAVE AN ACCOUNT</a></h1>
              
              </div>

              <div class="col-sm-2">
                  
                  <h1><a href="http://52.221.234.223/admin/login" style="text-decoration:none;color:#000000;">I AM AN AMDIN</a></h1>
              
              </div>

              <div class="col-sm-3">
                  
                  <h1><a href="#" style="text-decoration:none;color:#000000;" data-toggle="modal" data-target="#modal-default">TERMS AND CONDITIONS</a></h1>

              </div>
          </div>

          <div class="modal fade" id="modal-default">
          <div class="modal-dialog" style="width:1000px;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Terms and Conditions</h4>
              </div>
              <div class="modal-body">
                <p style="color:black;text-align:justify;" class="text-justify">
                &emsp;I hereby apply for membership in <span style="color:#2ACCC0;">SEAFARERS MIGHTY CREDIT COOPERATIVE</span> (<a href="{!! url('/seamco/'); !!}#home-section"><b style="color:#2ACCC0;">SEAMCO</b></a>) and agree to faithfully obey its rules and regulation as set down in its by-laws 
                and amendments thereof and the decision of the general membership as well as those of the directors.<br/><br/>
                I hereby pledge to subscribe <b>TWO HUNDRED FIFTY (250) SHARES</b> with a total value of <b>TWENTY-FIVE THOUSAND 
                PESOS (25,000.00)</b>. I also pledge to pay <i style="color:#b92e34;">at least twenty-five percent (25%)</i> of my subscription and <b>TWO 
                THOUSAND PESOS (2,000.00)</b> membership fee upon this application.<br/><br/> 
                I agree that the <i style="color:#b92e34;">minimum monthly contribution</i> to the share capital is <b>FIVE HUNDRED PESOS 
                (500.00)</b> and I will continue to pay this amount until I have paid <b>TWENTY-FIVE THOUSAND PESOS 
                (25,000.00)</b>. Payments made by me in excess of my share capital of P25, 000.00 will be considered as my 
                savings deposits.<br/> <br/>
                It is understood that <i style="color:#b92e34;">I cannot withdraw</i> my share capital during my membership. In case of withdrawal of 
                membership the <i style="color:#b92e34;">amount of P2000.00 shall be retained</i> from my share capital and will be credited to 
                withdrawal income of <a href="{!! url('/seamco/'); !!}#home-section"><b style="color:#2ACCC0;">SEAMCO</b></a> should I fail to revive my membership within 12 months by putting up a fresh 
                share capital.<br/><br/> 
                It is finally understood that withdrawal of membership is subject for the approval of the <b style="color:#2ACCC0;">Board of Directors</b> prior release of my share capital.   
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background-color:#b92e34;">Close</button>
                <a href="{!! url('/pages/Register/seamco_register'); !!}" class="btn btn-primary" style="background-color:#2ACCC0;">Continue for Registration</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-registrationcert">
          <div class="modal-dialog">
            <div class="modal-content" style="background-color:#000000;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:#ffffff;">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('images/seamco/registration_cert.jpg') }}" alt="...">
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      </div>
  </section>

@extends('layouts.footer')

   
   
   
   
   
   
   