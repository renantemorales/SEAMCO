
   <!--  -->
   <br/><br/>
   <section class="wpm_frooter_ending">
     	<div style="color:#151515;background-color:#151515;">
       <div class="container">

           <div class="col-sm-12 text-center wpm_mobile_center">
           
                   <h5>© Seafarers Mighty Credit Cooperative 2018. All rights reserved.</h5>
                   <!-- <h3><i class="fa fa-facebook color1"></i> <i class="fa fa-envelope-o color2"></i></h3> -->
                   <div class="copytext">Design By <a href="http://html5load.com/" target="_blank" class="copylink">html5load.Com</a></div>
                   
            </div>  
            
           <div class="clearfix"></div>
           
        </div>  
      </div>
   </section>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var panel = document.getElementsByClassName('panel');

        for (var i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
              var setClasses = !this.classList.contains('active');
                setClass(acc, 'active', 'remove');
                setClass(panel, 'show', 'remove');
                
                if (setClasses) {
                    this.classList.toggle("active");
                    this.nextElementSibling.classList.toggle("show");
                }
            }
        }
        
        function setClass(els, className, fnName) {
            for (var i = 0; i < els.length; i++) {
                els[i].classList[fnName](className);
            }
        }
    </script>

    <script src="{{ asset('/js/jquery.min.js') }}"></script> 
    <script src="{{ asset('/js/Main-script.min.js') }}"></script>
    
@stop  
 </body>
</html>