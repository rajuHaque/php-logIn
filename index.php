<!-- ====== Header Part ======= ->

<?php
	include('header.php');
?>
<!-- ====== Header Part End======= ->
            
<!--slider carosel-->			
   
        <div class="carousel slide" data-ride="carousel" data-interval="2200" id="mySlider">
                        <ol class="carousel-indicators">
                            <li data-target="#mySlider" data-slide-to="0" class="active"></li>
                            <li data-target="#mySlider" data-slide-to="1"></li>
                            <li data-target="#mySlider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner"> 


                            <div class="item active">
                                <img src="img/Slider/Slider1.png" alt="" title="This is a heading of councel slider"/>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/Slider/Slider2.png" alt=""/>
                                <div class="carousel-caption"> 
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/Slider/Slider3.png" alt=""/>
                                <div class="carousel-caption"> 
                                </div>
                            </div>
                            
                </div>  
                        <a href="#mySlider"  class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>

                        <a href="#mySlider"  class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>  
                
  <!-- .............. End of Slider ............... -->      
<!-- ===========    Sign In Modal ================ -->
<div class="modal fade" id="signIn">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
      </div>
    </div>
  </div>
</div>
   <!-- ===========    End Sign In Modal ================ -->     
        
        
        
        
<!--About section-->		
	<div class="container">
			<div class="about-us-main col-lg-12 col-md-12 col-sm-12 ">
		<!--about heading-->		
                            <div class="row">
					<div class="about-title  col-lg-12 col-md-12 col-sm-12 ">
						<h1 >ABOUT</h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
					</div>
				</div>
				<div class="row">
					<div class="about-us-content col-lg-12 col-md-12 col-sm-12">
		 <!--about first part-->				
                                            <div class="our-story col-lg-6 col-md-6 col-sm-6 ">	
							<h1>OUR STORY</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 	commodo ligula eget 	dolor. Aenean massa. 	Cum sociis natoque penatibus et magnis dis parturient 	montes, nascetur ridiculus mus. Donec quam felis, 	ultricies nec, pellentesque eu, pretium quis, sem. Nulla   consequat massa quis enim.<br> <br>      	
							</p>
                                                        <a href="about.html" class="btn btn-primary">Read More</a>
						</div>
                                            <!--about second part-->
						<div class="what-we-do col-lg-6 col-md-6 col-sm-6">
							<h1>WHAT WE DO</h1>
						        <div class="row">
					                <div class="panel-main col-md-12">
					                    <div class="panel-group" id="myPanelGroup">
					                        <div class="panel panel-info">
					                            <div class="panel-heading active">
					                                <a href="#panel1" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">BAR PHONE</a>
					                            </div>
					                            <div class=" collapse panel-collapse in" id="panel1">
					                                <div class="panel-body">
					                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					                                </div>
					                            </div>
					                            
					                        </div>
					                         <div class="panel panel-info in">
					                            <div class="panel-heading  ">
					                                <a href="#panel2" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">SMART PHONE</a>
					                            </div>
					                            <div class=" collapse panel-collapse" id="panel2">
					                                <div class="panel-body">
					                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					                                </div>
					                            </div>
					                            
					                        </div>

					                         <div class="panel panel-info in">
					                            <div class="panel-heading  ">
					                                <a href="#panel3" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">SERVICE & SUPPORT</a>
					                            </div>
					                            <div class=" collapse panel-collapse" id="panel3">
					                                <div class="panel-body">
					                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					                                </div>
					                            </div>
					                            
					                        </div>
					                    </div> 
					               </div>   
						    </div>
						</div>
                                             <!--end about second part-->
					</div>
				</div>
			</div>
	</div>

	<!-- .............. End About section ............... -->




  <!-- Start Product Area -->
  <section class="portfolio-area">
    <div class="container p-l-r-0 portfolio-masonry">
    <div class="about-title  col-lg-12 col-md-12 col-sm-12 ">
		<h1>OUR PRODUCT</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
	</div>
      <div class="portfolio-filter text-center">
        <ul>
          <li class="active"><a href="#" data-filter="*">ALL</a></li>
          <li><a href="#" data-filter=".item-1">BAR PHONE</a></li>
          <li><a href="#" data-filter=".item-2">SMART PHONE</a></li>
          <li><a href="portfolio-list.html">MORE</a></li>
        </ul>
      </div><!-- .portfolio-filter-area -->
      <div class="portfolio" id="portfolio_box">
        <div class="portfolio-item item-1">
          <div class="inner-portfolio">
              <img src="img/product/J7A.JPG" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#">J7</a></h2>
              <h4>Dual Camera</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
        <div class="portfolio-item item-2">
          <div class="inner-portfolio">
              <img style="background-color: #9d9d9d" src="img/SmarPhone/Mirage.png" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#">Mirage</a></h2>
              <h4>2GB RAM, 6.0 Android</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
        
        <div class="portfolio-item item-2">
          <div class="inner-portfolio">
              <img src="img/SmarPhone/z4.png" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#">Z4</a></h2>
              <h4>1GB RAM, 5.0 Android</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
        <div class="portfolio-item item-1">
          <div class="inner-portfolio">
              <img src="img/product/Musicman I golden.jpg" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#">Musicman I </a></h2>
              <h4>More Slim</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
        <div class="portfolio-item item-1">
          <div class="inner-portfolio">
              <img style="background-color: #9d9d9d" src="img/product/G3-Blue.png" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#">G3</a></h2>
              <h4>Long Lasting</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
 

        <div class="portfolio-item item-1">
          <div class="inner-portfolio">
              <img src="img/product/Litepro I (1).jpg" alt="">
            <div class="portfolio-hover text-center">
              <h2><a href="#"></a>Litepro I</h2>
              <h4>Comfortable</h4>
            </div><!-- .portfolio-hover -->
          </div>
        </div><!-- .portfolio-item -->
   
      </div><!-- .portfolio -->
    </div><!-- .container -->
  </section>
  <!-- End Portfolio Area -->



<!--new bloge section-->	
	<div class="container">
		<div class="blog col-lg-12 col-md-12 col-sm-12">
			<div class="row">
				<div class="title_blog">
					<h1>LATEST NEWS</h1>
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</P>
				</div>
			</div>
				<div class="row">
					<div class="blog-list col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="blog-item col-lg-6 col-md-12 col-sm-12 col-xs-12">	
							<div class="blog-thumb  ">
								<img src="img/blog1.jpg" class="img-responsive">
							</div>
							<div class="blog-details ">
								<h1 class="blog-title">ABOUT BRAND IDENTITY</h1>
								<span class="blog-meta">10 Jan, 2015 </span>
								<p class="blog-summary">
									Lorem ipsum dolor sit amet, <br >
									consectetuer adipiscing elit. 
								</p>
								 <a href="#" class="read-more">READ MORE </a>
							</div>
						</div>


						<div class="blog-item col-lg-6 col-12-6 col-sm-12 col-xs-12">	
							<div class="blog-thumb">
								<img src="img/blog2.jpg" class="img-responsive">
							</div>
							<div class="blog-details">
								<h1 class="blog-title">ABOUT BRAND IDENTITY</h1>
								<span class="blog-meta">10 Jan, 2015 </span>
								<p class="blog-summary">Lorem ipsum dolor sit amet, <br>
									 consectetuer adipiscing elit. 
								</p>
								 <a href="#" class="read-more">READ MORE </a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- .............. End news Bloge Section ............... -->

	


	<div class="fun-fact-main col-md-12 col-lg-12 col-sm-12">
		<div class="container">
			<div class="row">
				<div class="fun-fact col-md-12 col-lg-12 col-sm-12">
					<div class="fun-box col-md-4 col-lg-4 col-sm-4">
						<div class="fun-text a col-md-12 col-lg-12 col-sm-12">
							<h1> 1000</h1>
							<p>WEB SITE VIEWER</p>
						</div>
					</div>
					<div class="fun-box col-md-4 col-lg-4 col-sm-4">
						<div class="fun-text col-md-12 col-lg-12 col-sm-12">
							<h1>1500000</h1>
							<p>HAPPY CLIENTS</p>
						</div>
					</div>
					<div class="fun-box col-md-4 col-lg-4 col-sm-4">
						<div class="fun-text col-md-12 col-lg-12 col-sm-12">
							
                                                        <div class="input-group">
                                                        <input type="number" name="IMEI NUMBER" placeholder="Enter IMEI Number" class="form-control text-center">
                                                        <p>WARRANTY STATUS</p>
<!--                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-sm btn-success">GO</button>
                                                        </span></div>-->
                                                    
						</div>
					</div>
<!--					<div class="fun-box col-md-3 col-lg-3 col-sm-3">
						<div class="fun-text col-md-12 col-lg-12 col-sm-12">
							<h1> 9999</h1>
							<p>WRITTEN</p>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	
	<!-- .............. End Fun Fact Section ............... -->




<!--	<div class="container">
		<div class="happy-clients col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				<div class="happy-client-title">
					<h1>HAPPY CLIENTS</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				</div>
			</div>
			<div class="row">
				<div class="clients-logo col-sm-12 col-lg-12 col-md-12">
					<ul>
						<li><img src="img/client-logo-1.png"></li>
						<li><img src="img/client-logo-1.png"></li>
						<li><img src="img/client-logo-1.png"></li>
						<li><img src="img/client-logo-1.png"></li>
						<li><img src="img/client-logo-1.png"></li>
					</ul>

				</div>
			</div>

		</div>

	</div>-->

<!--big footer
	<div class="footer ">
                     <div class="container">
                        <div class="row">
                            <div  class="footer-content col-md-12 col-lg-12 col-sm-12">
                                <div class="footer-recent-post">
		<div class="recent-post title ">
                                        <h3>RECENT POST</h3>
		</div>
		<div class="recent-post-content">
                                        <ul>
                                             <li><a href="#">> AUDIO POST</a></li> 
                                             <li><a href="#">> VIDEO POST</a></li>
                                             <li><a href="#">> GALLERY POST</a></li>
                                             <li><a href="#">> QUOTE POST</a></li>
                                        </ul>
		</div>
                                </div>
                            </div>
                        </div>
                    </div>
	</div>-->

<!-- ====== Footer Part ======= ->

<?php
	include('footer.php');
?>
<!-- ====== Footer Part End======= ->	
	
	
	
	
	