<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
  #notification {
      position:fixed;
      top:0px;
      width:100%;
      z-index:105;
      text-align:center;
      font-weight:normal;
      font-size:14px;
      font-weight:bold;
      color:black;
      background-color:#2ACCC0;
      padding:5px;
  }
  #notification span.dismiss {
      border:2px solid #FFF;
      padding:0 5px;
      cursor:pointer;
      float:right;
      margin-right:10px;
  }
  #notification a {
      color:white;
      text-decoration:none;
      font-weight:bold
  }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEAMCO</title>

    <link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/iCheck/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">

</head>
<body class="hold-transition">
<!-- <div class="content-wrapper">
  <section class="content"> -->

      @if(!empty($message))
        <!-- <div style="position:absolute;background:darkorange;background: darkorange;margin-right: 120px;top:20px;right:0;padding:.75rem 1.25rem;color:inherit">
            <strong>Failed! {{ $message }}</strong>
            </button>
        </div> -->
        <div id="notification" style="display: none;">
          <span class="dismiss"><a title="dismiss this notification">x</a></span>
        </div>
      @endif
      @if(session()->has('message'))
        <div id="notification" style="display: none;">
          <span class="dismiss"><a title="dismiss this notification">x</a></span>
        </div>
      @endif
      <div class ="row">
        <br/><br/><br/>
        <div class="col-md-1">
        </div>

        <div class="col-md-5">

            <div class="box" style="box-shadow: 0px 0px 8px 0px grey">
              <div class="box-body" style="background-color:#fff;line-height:2.5;">
                <h1 class="text-center">Membership Application</h1><br/>
                  <p style="color:black;text-align:justify;" class="text-justify">
                    &emsp;I hereby apply for membership in <span style="color:#2ACCC0;">SEAFARERS MIGHTY CREDIT COOPERATIVE</span> (<a href="{!! url('/pages/Index/'); !!}#home-section"><b style="color:#2ACCC0;">SEAMCO</b></a>) and agree to faithfully obey its rules and regulation as set down in its by-laws 
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
                    withdrawal income of <a href="{!! url('/pages/Index/'); !!}#home-section"><b style="color:#2ACCC0;">SEAMCO</b></a> should I fail to revive my membership within 12 months by putting up a fresh 
                    share capital.<br/><br/> 
                    It is finally understood that withdrawal of membership is subject for the approval of the <b style="color:#2ACCC0;">Board of Directors</b> prior release of my share capital.   
                  </p>
              </div>
            </div>
        </div>


        <div class="col-md-5" >
          <div class="box" style="box-shadow: 0px 0px 8px 0px grey">
            <div class="box-header with-border">
              <div class="register-logo">
                <a href="{!! url('/pages/Index'); !!}" style="color:#2ACCC0;"><b>SEAM</b>CO</a>
              </div>
            </div>
            <div class="box-body">
                <h3 class="text-center" style="background-color:#2ACCC0;"><i>Applicant Infomation</i></h3><br/>
                <form action="{{route('register.create')}}" method="POST">
                  @csrf
                  <input type="hidden" id="rec_id" name="rec_id">
                  <div class="row">
                    <div class="col-xs-6">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Ex. Jose" name="FName" required>
                    </div>
                    
                    <div class="col-xs-6">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Ex. Rizal" name="LName" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-6">
                      <label>Suffix</label>
                      <input type="text" class="form-control" placeholder="Ex. JR./SR./I/II/III...." name="SName">
                    </div>

                    <div class="col-xs-6">
                      <label>Middle Name</label>
                      <input type="text" class="form-control" placeholder="Ex. Mercado" name="MName">
                    </div>
                  </div>

                  <div class="row">
                    <br/>
                    <div class="col-xs-6">
                      <label>Civil Status</label>
                      <select class="form-control" name="CivilStatDesc" required>  
                        @foreach ($civilStatuses as $civilStatus)
                          <option value="{{$civilStatus->CivilStatID}}">{{$civilStatus->CivilStatDesc}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="GenderDesc" required>
                          @foreach ($genders as $gender)
                            <option value="{{$gender->GenderID}}">{{$gender->GenderDesc}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                
                  <div class="row">

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Mobile no.</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone" ></i>
                          </div>
                          <input type="number" name="CellNum" class="form-control" min="0" 
                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength = "11" placeholder="Ex. 09661234567" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Phone no.</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" name="OtherContactNum" class="form-control" value="(___) ___-____" data-mask="(___) ___-____">
                        </div>
                      </div>
                    </div>                    
                  </div>

                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Date of Birth</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control" name="DateOfBirth" max="2000-12-31" required>
                          </div>
                      </div>
                    </div>

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Mailing Address</label>
                        <select class="form-control" name="MailingAddressDesc" required>  
                          @foreach ($mailingAddresses as $mailingAddress)
                            <option value="{{$mailingAddress->MailingAddressID}}">{{$mailingAddress->MailingAddressDesc}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                  </div>
                  
                  <div class="row">
                    <div class="col-xs-6">
                      <label>Address (Street)</label>
                      <input type="text" name="ResAddStreet" class="form-control" placeholder="Ex. San Juan St." required>
                    </div>

                    <div class="col-xs-6">
                      <label>Barangay</label>
                      <input type="text" name="ResAddBarangay" class="form-control" placeholder="Ex. Barangay VI" required>
                    </div>
                  </div><br/>

                  <div class="row">

                    <div class="col-xs-8">
                      <div class="form-group">
                        <label>Geographical Location</label>
                        <select class="form-control" name="GeoDesc" required>  
                          @foreach ($geos as $geo)
                            <option value="{{$geo->GeoID}}">{{$geo->GeoDesc}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-xs-4">
                      <label>Zip Code</label>
                      <input type="text" name="ResAddZipCode" class="form-control"min="0" 
                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength = "4" placeholder="Ex. 6000" required>
                    </div>

                  </div><br/>
                  
                  <div class="row">
                    <div class="col-xs-6">
                      <label>Employer</label>
                      <input type="text" name="BusName" class="form-control" placeholder="..." required>
                    </div>
                    
                    <div class="col-xs-6">
                      <label>Tax Identification Number</label>
                      <input type="text" name="TINNum" class="form-control tin" value="___-___-___-___" data-mask="___-___-___-___" required>
                    </div>
                  </div><br/>
                  
                  <div class="row">
                    <div class="col-xs-6">
                      <label>Position</label>
                      <input type="text" name="BusJobTitle" class="form-control" placeholder="Ex. HR Assistant" required>
                    </div>
                    
                    <div class="col-xs-6">
                      <label>Department</label>
                      <input type="text" name="BusProfession" class="form-control" placeholder="HR Department" required>
                    </div>
                  </div><br/>
                  
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="form-group">
                        <label>Date of Employment</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control" name="BusDateHired" id="datefield" required>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-xs-4">
                      <label>Salary</label>
                      <input type="number" name="SpMonthlyIncome" min="0" class="form-control" placeholder=".00" required>
                    </div>
                  </div><br/>
                  
                  <div class="row">
                    <div class="col-xs-6">
                      <label>Company other source of income</label>
                      <input type="text" name="BusOtherSourceOfIncome" class="form-control" placeholder="Ex. Sari-sari store">
                    </div>
                    
                    <div class="col-xs-6">
                      <label>Email Address</label>
                      <input type="text" name="EmailAddress" class="form-control" placeholder="Ex. juandelacruz@gmail.com" required>
                    </div>
                  </div>
                  
                  <div class="row">
                    <br/>
                    <!-- <div class="col-xs-6">
                      <label>Recruiter Name</label>
                      
                      <select class="form-control" name="AcctTypeDesc" required>  
                        @foreach ($accountTypes as $accountType)
                          <option>{{$accountType->AcctTypeDesc}}</option>
                        @endforeach
                      </select>
                    </div> -->

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Recruiter Name</label>
                          <div class="autocomplete">
                            <input id="myInput" type="text" name="myCountry" class="form-control" placeholder="Ex. Dela Cruz, Juan">
                          </div>
                      </div>
                    </div>

                  </div><br/><br/>
                  
                  <div class="row">
                    <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8 text-center">
                      <b style="align:center;color:#2ACCC0">Thrift. Respect. Unity. Service. Transparency.</b>
                    </div> 
                    <div class="col-xs-2">
                    </div> 
                  </div><br/>

                  <div class="row">
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-10 text-center">
                      <input type="checkbox"  id="tick" onchange="document.getElementById('terms').disabled = !this.checked;" /> I hereby state that I have read, understand and accept the terms and conditions above.
                    </div>  
                    <div class="col-xs-1">
                    </div>
                  </div><br/>

                  <div class="row">
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-10 text-center">
                      <button type="submit" class="btn btn1" style="background-color:#2ACCC0;" onclick="notif()" name="terms" disabled id="terms"><b>CONTINUE APPLICATION</b></button>
                    </div>  
                    <div class="col-xs-1">
                    </div>
                  </div>
                <br/>
              </form>
            </div>
          </div>
      </div>
      <div class="col-md-1">
      </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
$('input').attr('autocomplete','off');

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      document.getElementById('rec_id').value = null;
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      let clients = arr;
      
      for(let clientid in clients) {
        let client = clients[clientid];
        if (client.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + client.substr(0, val.length) + "</strong>";
          b.innerHTML += client.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + client + "'>";
          b.innerHTML += "<input type='hidden' name='id' value='" + clientid + "'>"
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists(e.target);
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");

    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
    
    if(elmnt !== undefined) {

      if(!elmnt.children.length) {
        if(elmnt.id != 'myInput') {
          if(elmnt.parentNode.parentNode.id == "myInputautocomplete-list") {
            (document.getElementById('rec_id')).value = elmnt.parentNode.children[2].value;
          }
        }
      }
      else {
        if(elmnt.children) {
          if(elmnt.parentNode.id == "myInputautocomplete-list") {
            (document.getElementById('rec_id')).value = elmnt.children[2].value;
          }
        }
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
// var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
   let countries = {!! json_encode($recruiters) !!}
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

<script>
Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

function applyDataMask(field) {
    var mask = field.dataset.mask.split('');
    
    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split('').filter(isDigit);
    }
    
    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask.map(function(char) {
            if (char != '_') return char;
            if (data.length == 0) return char;
            return data.shift();
        }).join('')
    }
    
    function reapplyMask(data) {
        return applyMask(stripMask(data));
    }
    
    function changed() {   
        var oldStart = field.selectionStart;
        var oldEnd = field.selectionEnd;
        
        field.value = reapplyMask(field.value);
        
        field.selectionStart = oldStart;
        field.selectionEnd = oldEnd;
    }
    
    field.addEventListener('click', changed)
    field.addEventListener('keyup', changed)
}
</script>

  <script>
    $("#notification").fadeIn("slow").append('Your application was sent successfully and now pending for evaluation. The system will notify you about the result. ');
      $(".dismiss").click(function(){
            $("#notification").fadeOut("slow");
      });
  </script>

  <script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("max", today);
  </script>

<!-- <script>

  function notif() {
    alert("I am an alert box!");
  }
</script> -->




<!-- jQuery 3 -->
<script src="{{ asset('/bower_components/moment/min/moment.min.js') }}"></script>



<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>

</body>
</html>
