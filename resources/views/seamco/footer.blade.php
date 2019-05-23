
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
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>
    
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

    <script src="{{ asset('/js/jquery.min.js') }}"></script> 
    <script src="{{ asset('/js/Main-script.min.js') }}"></script> 
    
@stop  
 </body>
</html>