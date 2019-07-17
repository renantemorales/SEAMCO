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
                  
                <a href="{!! url('/pages/Index/'); !!}">Home</a> / <a href="{!! url('/pages/Service/seamco_service'); !!}">Loan Services</a>
              
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
          
          <h2>LOAN <span class="wpm_bold">SERVICES</span></h2>
          
        </div>
      </div>
       
    <div class = "row">
      <div class="col-sm-12 text-justify">
        <button class="accordion text-bold">REGULAR LOAN </button>
        <div class="panel">
          <div class = "row">
            <div class="col-sm-2 text-center">
              <p><b>Loanable Amount</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                  For regular SEAMCO members<br/> 
                  -	First loan = 25,000<br/>
                  -	2nd loan = 50,000<br/>
                  -	3rd loan = 75,000<br/>
                  -	4th loan = 100,000<br/><br/>
                  -	Minimum of P 100T<br/>
                  -	Above P100T subject to BOD Approval (collateral required)<br/>
                  </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Terms of Payment</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                  6months<br/>
                  12 months
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Interest Rate</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                1.6 (6 months)<br/>
                2.0 (12months)<br/><br/>

                (Diminishing<br/>
                Fixed)
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Service Charge</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                2%
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <p><b>Requirements</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                      -	Member in good standing<br/>
                      -	Fully paid the subscribe capital<br/>
                      -	Pre signed Post Dated Checks<br/>
                      -	Loan renewal can be made halfway thru loan amortization and/ or anniversary date whichever comes first<br/><br/>

                      (Above P100T)<br/>
                      -	1 month residency<br/>
                      -	Loans should be 100% secured<br/>
                      -	Acceptable collaterals are real estate and chattel. This would involve payment of documentary stamp and notarial fee to be deducted from the proceeds.<br/><br/>

                      -	Borrower shall execute agreement for notarial foreclosure only in case of default in payment where said action is initiated by the cooperative<br/><br/>

                      -	Other conditions<br/><br/>

                      -	Pre signed Post Dated Checks<br/>
                      -	Subject to availability of funds<br/>
                      -	Co-maker</p>
            </div>
          </div>
        </div><br/>

        <button class="accordion text-bold" style="background-color:#32A8DB;">BUSINESS LOAN </button>
        <div class="panel" style="background-color:#e2f6ff;">
          <div class = "row">
            <div class="col-sm-2 text-center">
              <p><b>Loanable Amount</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                  -	P 300T – P 500T<br/> 
                  </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Terms of Payment</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                  12 months
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Interest Rate</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                  2.0 (12 months)<br/>
                    (Diminishing)
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Service Charge</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                2%
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <p><b>Requirements</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
              -	1 month residency<br/>
              -	Member in good standing<br/>
              -	Full paid the subscribe capital<br/>
              -	Submission of proof of business such as DTI and Mayor’s Permit and subject to background verification by Credit Committee.<br/>
              -	Loans should be 100% secured<br/>
              -	Acceptable collaterals are real estate and chattel. This would involve payment of documentary stamp and notarial fee to be deducted from the proceeds.<br/><br/>
              -	Borrower shall execute agreement for notarial foreclosure only in case of default in payment where said action is initiated by the cooperative<br/><br/>
              -	Other conditions<br/><br/>
              -	Pre signed Post Dated Checks<br/>
              -	Subject to availability of funds<br/>
              -	Co-maker or guarantor<br/><br/>
              -	Must have a feasibility study

              </p>
            </div>
          </div>
        </div>

        <button class="accordion text-bold" style="background-color:#2ACCC0;">EMERGENCY LOAN </button>
        <div class="panel" style="background-color:#e0fffc;">
          <div class = "row">
            <div class="col-sm-2 text-center">
              <p><b>Loanable Amount</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                For regular and associate SEAMCO members <br/><br/>
                -	Maximum of 20T<br/>
                  </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Terms of Payment</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                  6 monnths<br/>
                  12 months
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Interest Rate</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                1.6 (6 months)<br/>
                2.0 (12months)<br/><br/>
                (Diminishing)
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Service Charge</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                2%
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <p><b>Requirements</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                -	1 month residency <br/>
                -	Member in good standing<br/>
                -	Full paid the subscribe capital<br/>
                -	Loan renewal can be made halfway thru loan amortization and/ or anniversary date whichever comes first<br/>
                -	Co-maker or guarantor<br/>
              </p>
            </div>
          </div>
        </div>

        <button class="accordion text-bold" style="background-color:#F36630;">PRE-JOINING LOAN </button>
        <div class="panel" style="background-color:#fcd5c7;">
          <div class = "row">
            <div class="col-sm-2 text-center">
              <p><b>Loanable Amount</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                  -	P 20T – P 50T<br/> 
                  </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Terms of Payment</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                  6 monnths<br/>
                  12 months
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Interest Rate</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                1.6 (6 months)<br/>
                2.0 (12months)<br/><br/>
                (Diminishing)
              </p>
            </div>
            <div class="col-sm-2 text-center">
              <p><b>Service Charge</b></p><hr>
              <p style="font-size:12px;" class="text-center">
                2%
              </p>
            </div>
            <div class="col-sm-4 text-center">
              <p><b>Requirements</b></p><hr>
              <p style="font-size:12px;" class="text-justify">
                -	1 month residency <br/>
                -	Member in good standing<br/>
                -	Full paid the subscribe capital<br/>
                -	Loan renewal can be made halfway thru loan amortization and/ or anniversary date whichever comes first<br/>
                -	Co-maker or guarantor<br/>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div><br/>

    <div class="row">
      <div class="col-sm-2">
      </div>

      <div class="col-sm-8" style="background-color:#eee;">
          <p><h3>LOAN REQUIREMENTS</h3>
          &emsp;&emsp;•	Active checking account<br/>
          &emsp;&emsp;•	Duly accomplished loan application form<br/>
          &emsp;&emsp;•	Valid ID<br/>
          &emsp;&emsp;•	If with collateral; the original documents of collateral must be presented<br/>
          &emsp;&emsp;•	and membership fee of P2000.00
          </p>
      </div>

      <div class="col-sm-2">
        
      </div>
    </div>
    <br/><br/>

    <div class="row">
      <div class="col-sm-2">
      </div>

      <div class="col-sm-8" style="background-color:#eee;">
          <p><h3>WHO CAN & CANNOT APPY LOAN</h3>
          &emsp;&emsp;•	Both Regular and Associate member can apply loan
          </p>
      </div>

      <div class="col-sm-2">
        
      </div>
    </div>
    <br/><br/>
    
    </div>
  </section>
  <!--  -->
@extends('layouts.footer')

   
   
   
   
   
   
   