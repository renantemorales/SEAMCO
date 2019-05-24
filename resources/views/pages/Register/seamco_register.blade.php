
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEAMCO</title>

    <link rel="icon" type="image/png" href="{{ asset('/images/logo/final.png') }}"/>
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
    
      <div class ="row">
        <br/><br/><br/>
        <div class="col-md-1">
        </div>

        <div class="col-md-5">

            <div class="box">
              <div class="box-body" style="background-color:#fff;line-height:2.5;">
                <h1 class="text-center">Membership Application</h1><br/>
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
                    membership the <i style="color:#b92e34;">amount of P1000.00 shall be retained</i> from my share capital and will be credited to 
                    withdrawal income of <a href="{!! url('/seamco/'); !!}#home-section"><b style="color:#2ACCC0;">SEAMCO</b></a> should I fail to revive my membership within 12 months by putting up a fresh 
                    share capital.<br/><br/> 
                    It is finally understood that withdrawal of membership is subject for the approval of the <b style="color:#2ACCC0;">Board of Directors</b> prior release of my share capital.   
                  </p>
                  <p>
                    <label>
                    <input type="checkbox" class="flat-red"> I hereby state that I have read, understand and accept the terms and conditions above.
                    </label>
                  </p>
                  <p>
                    <button type="submit" class="btn pull-right" style="background-color:#2ACCC0;"><b>CONTINUE APPLICATION</b></button>
                  </p>
              </div>
            </div>
        </div>

        <div class="col-md-5">
          <div class="box">
            <div class="box-header with-border">
              <div class="register-logo">
                <a href="{!! url('/seamco/'); !!}" style="color:#2ACCC0;"><b>SEAM</b>CO</a>
              </div>
            </div>
            <div class="box-body">
                <h3 class="text-center" style="background-color:#2ACCC0;"><i>Applicant Infomation</i></h3><br/>
              <div class="row">
                <div class="col-xs-6">
                  <label>Full Name</label>
                  <input type="text" class="form-control" placeholder="Ex. Juan P. Dela cruz Jr.">
                </div>
                <!--  -->
                <div class="col-xs-3">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Prefer not to say</option>
                    </select>
                  </div>
                </div>
                <!--  -->
                <div class="col-xs-3">
                  <div class="form-group">
                    <label>Civil Status</label>
                    <select class="form-control">
                      <option>Single</option>
                      <option>Married</option>
                      <option>Widow</option>
                      <option>Prefer not to say</option>
                    </select>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Date masks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-xs-4">
                    <label>Mobile no.</label>
                    <input type="number" class="form-control" placeholder="Ex. 09970000000">
                </div>
                <!--  -->
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Telephone no.:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-12">
                  <label>Present Address</label>
                  <input type="text" class="form-control" placeholder="Ex. 2F Hotel De Mercedes Hotel, Pelaez Street, Brgy. Kalubihan, Cebu City">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-12">
                  <label>Permanent Address</label>
                  <input type="text" class="form-control" placeholder="Ex. 2F Hotel De Mercedes Hotel, Pelaez Street, Brgy. Kalubihan, Cebu City">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-6">
                  <label>Employer</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
                <!--  -->
                <div class="col-xs-6">
                  <label>Tax Identification Number</label>
                  <input type="text" class="form-control tin" value placeholder="___-___-___-___">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-6">
                  <label>Position</label>
                  <input type="text" class="form-control" placeholder="Ex. HR Assistant">
                </div>
                <!--  -->
                <div class="col-xs-6">
                  <label>Department</label>
                  <input type="text" class="form-control" placeholder="HR Department">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-8">
                  <div class="form-group">
                    <label>Date masks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="col-xs-4">
                  <label>Salary</label>
                  <input type="number" class="form-control" placeholder=".00">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-12">
                  <label>Address of Employer</label>
                  <input type="text" class="form-control" placeholder="Ex. Brgy. Sambag 1, Cebu City">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-6">
                  <label>Other source of income</label>
                  <input type="text" class="form-control" placeholder="Ex. Sari-sari store">
                </div>
                <!--  -->
                <div class="col-xs-6">
                  <label>Number of dependencies</label>
                  <input type="number" class="form-control" placeholder="...">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-6">
                  <label>Email Address</label>
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="juandelacruz@gmail.com">
                  </div>
                </div>
                <!--  -->
                <div class="col-xs-6">
                  <label>Referred By</label>
                  <input type="text" class="form-control" placeholder="Indicate NONE if not referred">
                </div>
              </div><br/>
              <!-- ROW -->
              <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                  <b style="align:center;color:#2ACCC0">Thrift. Respect. Unity. Service. Transparency.</b>
                </div>
                <div class="col-xs-2">
                </div>
              </div><br/>

            </div>

          </div>
      </div>

      <div class="col-md-1">
      </div>

  </div>


  <!-- </section>
</div> -->




<!-- jQuery 3 -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script> 
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script src="{{ asset('/bower_components/moment/min/moment.min.js') }}"></script>



<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script>
    $('.tin').mask('000-000-000-000', {placeholder: "___-___-___-___"})
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
