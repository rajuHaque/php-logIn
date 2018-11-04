
<!--footer-->
	<footer>
	<div class="copy-right-main">
	<div class="container">
	<div class="row">
	<div class="copy-right col-sm-6">
	<p><span class="fa fa-copyright "></span> 2018 OOKAYAMA LIMITED ALL RIGHTS RESERVED</p>
	</div>
    <div class="social col-sm-6">
		<ul >
		<li><a style="" data-toggle="tooltip" data-placement="bottom" title="Web mail" href="https://mail.okapia-mobile.com/"><span class="fa fa-user"></span></a></li>
        <li><a data-placement="bottom" title="Login" href="" data-toggle="modal" data-target="#signIn"><span class="fa fa-unlock"></span></a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href=""><span class="fa fa-twitter"></span></a> </li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/OkapiaMobile/"><span class="fa fa-facebook"></span></a></li>                                                                            
		<li><a data-toggle="tooltip" data-placement="bottom" title="Youtube" href=""><span class="fa fa-youtube-play"></span></a></li>
		</ul>
    </div>
	</div>
	</div>
	</div>
</footer>
	<!--Scroll-Top-->
	<div><img class="back-to-top" src="img/up.png" alt=""></div>
	
	
	
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
    <script src="js/plugin.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<script type="text/javascript">
  			$("#slider").owlCarousel({
     		 navigation : false, // Show next and prev buttons
      		 slideSpeed : 300,
     		 paginationSpeed : 400,
      		 singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
	});

  		$(window).scroll(function() {
        if ($("#mainNav").offset().top > 1) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });


	  $(function(){
	      $(".element").typed({
	        strings: ["HELLO, WELCOME TO MY WORLD ", "THIS IS A PORTFOLIO SITE "],
	        typeSpeed: 200,
	        loop:true
	      });
	  });
	</script>
<script> 
  // ## Portfolio
    $(document).ready(function() {

        $('.portfolio').isotope({
          itemSelector: '.portfolio-item',
          transitionDuration: '0.60s',
          masonry: {
            percentPosition: true
          }
        });

        /* Active Class of Portfolio*/
        $('.portfolio-filter ul li').click(function(event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

        /*=== Portfolio filtering ===*/
        $('.portfolio-filter ul').on('click', 'a', function() {
            var filterElement = $(this).attr('data-filter');
            $(this).parents(".portfolio-filter").next().isotope({
                filter: filterElement
            });
        });

    });
    
/*=== Scroll-Top ===*/
$(document).ready(function() {
            var btt = $('.back-to-top');
            
            btt.on('click', function(e) {
                $('html, body').animate({
                    scrollTop:0
                }, 2000);
                e.preventDefault();
                });
            
        $(window).on('scroll', function(){
                var self = $(this),
                height = self.height(),
                top = self.scrollTop();
                
                if(top > height){
                    if(!btt.is(':visible')){
                        btt.show();
                    }
                } else{
                    btt.hide();
                }
                 });
        });
    
</script>

</body>
</html>