<!-- ====== Header Part ======= -->
<?php
	include('header.php');
	
	########### Sign In ##################
	if(isset($_POST['signIn'])){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			require_once('signIn.php');
		}else{
			echo '<script> alert("Email / Password is Invalid");</script>';
		}
	}
	########### Registration #############
	if(isset($_POST['registration'])){
		require_once('registration.php');
	}
?>
<!-- ====== Header Part End======= -->
<style>
/* --- Contact page --- */
/* --- Contact Form --- */
.contact-main {
    padding: 100px 0px;
    margin:0;
}

.contact-title {
    text-align: center;
}

.contact-title h1{
    font-size: 25px;
    font-weight: bold;
    color: #fff;
    letter-spacing: 3px;
    border: 1px solid #000;
    border-radius: 10px;
    padding: 16px 53px;
    position: relative;
    display: inline-block;
}

.contact-title h1:before{
  content: '';
  display: block;
  width: 60%;
  height: 3px;
  background:red;
  position: absolute;
  bottom: -2px;
  background: #00ccff;
  left: 50%;
  margin-left: -30%;
  opacity: 1;
}

.form-group {
    margin-bottom: 30px;
}

.contact-title p{
    color: #e3e3e3;
    letter-spacing: 1px;
    padding-top: 6px;
    font-size: 14px;

}

.contact-form {
    margin-top: 70px;

}

.contact-form  .contact input{
    outline: 0;
}


.contact-form  .contact textarea{
    outline: 0;
}

.contact .submit-button button{
    border-radius: 0;
    background-color: #00ccff;
    border: none;
    color: white;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 1px;
}

.contact .submit-button button:hover{
    background-color: #e54148;
}

</style>
<!-- ====== Main Part Star ======= -->
            
<main>
<!-- =========== Breadcrumb Section ============== -->
	<section>
		<div class="slider-main">
			<div class="container">
				<div class="row">
					<div class="banner-text col-lg-12 col-md-12">
						<h3>CONTACT US</h3>
						<p> <span> <a href="home.html"> HOME </a> </span> / CONTACT</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- =========== Carrer Section ============== -->
	<section>
		<div class="container">
			<div class="contact-main col-lg-12 col-md-12 col-sm-12">
									<div class="row">
				<div class="contact-title">
												<h1>CAREER WITH US</h1>
				</div>
									</div>
					<!--career heading-->
					<!--career nav-->
			   <div class="row">    
			<div class="col-sm-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#career1" data-toggle="tab"><b>Why Join Us</b></a></li>
		  <li style="border: 1px solid #0593aa"><a href="#career2" data-toggle="tab"><b>Meet Our Employee</b></a></li>
		  <li style="border: 1px solid #0593aa"><a href="#career3" data-toggle="tab"><b>FAQ</b></a></li>
		  <li style="border: 1px solid #0593aa"><a href="#career4" data-toggle="tab"><b>Vacancies</b></a></li>
		  <li style="border: 1px solid #0593aa"><a href="#career5" data-toggle="tab"><b>Login / CV Send</b></a></li>
		</ul>
				</div>
			<div class="col-sm-9">
					<div class="tab-content">
						 <!--career nav1-->
						<div class="tab-pane active" id="career1" style="color: white;">
							<h1>Why Join Us</h1>
							<p><strong>Ookayama Limited</strong>, one of the encouraging and evolving business company, is founded with the aim of enhancing all aspects of life for the customers with powerful brands, reliable products and services. The group has diversified investment in mobile sectors in Bangladesh. Named as Okapia.
								At Ookayama Limited we put more emphasis on career development, a culture of flexibility, equality, knowledge sharing and development. Our employees come from all walks of life, but share a common approach: POSITIVITY. We offer a wide range of career opportunities, enabling you to collaborate across borders and experience different cultures. Providing our people with distinct experiences in line with their career aspirations, skills, experience and strengths is an important part of our development approach.</p>
							<h1>Work Environment</h1>
							<p>In <strong>Ookayama Limited</strong> our culture is a winning culture where everyone benefits. It's the perfect environment in which to carve out a niche according to your own skills and ambitions, and to keep on growing, both as a person and as an employee, as you work alongside great people to meet some of the most pressing challenges of today - and tomorrow.</p>
							<h1>Selection Process</h1> 
							<img class="" src="img/selection-process.png">
						</div>
						 <!--career nav2-->
						 <div class="tab-pane" id="career2">
							 <h1 style="color: white;">Meet Our Employee</h1>
							 <div class="card-deck">
								 <!--card1-->
				<div class="card col-sm-4 thumbnail carddec">
							<img class="card-img-top img-circle img-responsive img-thumbnail" src="img/Employee/rofikul.jpg" alt="Card image cap">
				<div class="card-body text-center">
							<h3 class="card-title">R I Chowdhury<br>Head of IT</h3>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer text-center">
											<button class="btn btn-sm btn-primary">View Details</button>
				</div>
				</div>
									<!--card2-->
									<div class="card col-sm-4 thumbnail carddec">
											<img class="card-img-top img-circle img-responsive img-thumbnail" src="img/Employee/Nizam.p.jpg" alt="Card image cap">
				<div class="card-body text-center">
							<h3 class="card-title">Md. Nizam Uddin Akond<br>GM, Sales</h3>
				<p class="card-text">I am an enthusiastic and professional Sales Manager, who enjoys being part of, as well as leading, a successful and productive team.  I am quick to grasp new ideas and concepts, and to develop innovative and creative solutions to problems.</p>
				</div>
				<div class="card-footer text-center">
											<button class="btn btn-sm btn-primary">View Details</button>
				</div>
				</div>
									
							 </div>
						  </div>
						  <!--career nav3-->
						<div class="tab-pane" id="career3">
							<h1 style="color: white;">Frequently Asked Questions</h1>
						<!--career nav3 panel-->
							<div class="panel-main">
			  <div class="panel-group" id="myPanelGroup">
			 <!--career nav3 panel1-->
						   <div class="panel panel-info">
			 <div class="panel-heading active">
			<a href="#panel1" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title"> How do I apply for a vacancy at Ookayama Limited?</a>
			 </div>
			 <div class=" collapse panel-collapse in " id="panel1">
			 <div class="panel-body">
			 <p style="color: white;"> If your profile match with our required Job description and job specification of a vacant position, please click to "apply now" button. You have to complete your profile as per given format or if you have already completed your profile then just apply.</p>
			</div>
			</div>				                            
			 </div>
				 <!--career nav3 pane2-->
			<div class="panel panel-info in">
			<div class="panel-heading  ">
			 <a href="#panel2" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">How long does the recruitment process take?</a>
			</div>
			<div class=" collapse panel-collapse" id="panel2">
			<div class="panel-body">
			<p>Time limit depends on the urgency of the position. But usually we recruit at our earliest.</p>
			 </div>
			</div>				                            
			</div>
				 <!--career nav3 pane3-->
			 <div class="panel panel-info in">
			 <div class="panel-heading  ">
			 <a href="#panel3" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">Can I apply for more than one vacancy?</a>
			  </div>
			<div class=" collapse panel-collapse" id="panel3">
			<div class="panel-body">
			<p>Yes, if all the required competencies matches with you.</p>
			 </div>
			</div>				                            
			</div>
				 <!--career nav3 pane4-->
			 <div class="panel panel-info in">
			 <div class="panel-heading  ">
			 <a href="#panel4" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title">I have already applied, how do I sign in my account?</a>
			  </div>
			<div class=" collapse panel-collapse" id="panel3">
			<div class="panel-body">
			<p>You can use your ID and password for our career site to log in.</p>
			 </div>
			</div>				                            
			</div>
				 <!--career nav3 pane5-->
			 <div class="panel panel-info in">
			 <div class="panel-heading  ">
			 <a href="#panel5" data-parent="#myPanelGroup" data-toggle="collapse" class="panel-title"> Is your online application process is secure?</a>
			  </div>
			<div class=" collapse panel-collapse" id="panel3">
			<div class="panel-body">
			<p> Yes, our online application process is well secured.</p>
			 </div>
			</div>				                            
			</div>
		  
			</div> 
			 </div>
				 </div>
				  <!--career nav4-->        
						<div class="tab-pane" id="career4" style="color: white;">Right now there is no vacancy but you can submit your Resume</div>
				  <!--career nav5-->    
						<div class="tab-pane" id="career5">
		<!-- =========== Panel sign in ================== --> 
			<div class="panel panel-primary col-sm-6">
				<div class="panel-heading">Sign In</div>
				<div class="panel-body">
				<form method="post">
					  <div class="form-group">
						<label for="exampleInputEmail1" class="text-primary">Email address</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1" class="text-primary">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group form-check text-primary">
						<input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Remind me</label>
					  </div>
					  <button type="submit" name="signIn" class="btn btn-primary">Submit</button>
				</form>
				</div>
			  </div>
						 <!--panel forgot password-->
							<div class="panel panel-primary col-sm-6">
				<div class="panel-heading">Forgot Password</div>
				<div class="panel-body">
											<form>
					  <div class="form-group">
						<label for="exampleInputEmail1" class="text-primary">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <button type="submit" class="btn btn-primary">Send now</button>
				</form>
				</div>
			  </div>
						 <div class="panel panel-primary col-sm-12">
				<div class="panel-body text-primary">
							<p>Don't have an account yet? <a href="" data-toggle="modal" data-target="#careersignIn">Click to create one</a>, it's free!</p>
				</div>
			  </div>
							
						</div>
					</div>
					</div>
					</div>
						</div>
		</div>
	</section>

<!-- =========== Registration Form Modal ============== -->
<?php include('registration_modal.php'); ?>

<!-- =========== contact form ============== -->
	<section>
		<div class="container">
			<div class="contact-main col-lg-12 col-md-12 col-sm-12">
				<div class="row">
					<div class="contact-title">
						<h1>CONTACT WITH US</h1>
						
					</div>
				</div>
				<div class="row">
					<div class="contact-form col-lg-12 col-md-12">
						<form class="contact" action="contactUs.php">
							<div class="name form-group col-md-6"> 
								<input id="name" type="text" name="name" class="form-control" placeholder="Name:*" required>  
							</div>
							<div class="email form-group col-md-6"> 
								<input id="email" type="email" name="email" class="form-control" placeholder="Email:*" required>  
							</div>
							<div class="phone form-group col-md-6"> 
								<input id="phone" type="text" name="phone" class="form-control" placeholder="Phone:*" required>  
							</div>
							<div class="website form-group col-md-6"> 
								<input id="website" type="url" name="website" class="form-control" placeholder="Website:">  
							</div>
							 <div class="textarea form-comments form-group col-md-12"> 
								<textarea class="form-control" type="text" name="description" placeholder="Write here..." required></textarea> 
							</div>
							<div class="submit-button col-md-2 col-md-offset-5">
								<button id="submit" type="submit" name="cotactUs" class="btn btn-primary btn-lg btn-group-justified " >SEND MESSAGE
								</button>
							</div>
							
						</form>
					
					</div>
				</div>
			</div>
		</div>
		

	</section>
	<section>
		<!--Big Footer-->
		<div class="footer ">
							   <div class="container">
									<div class="row">
			<div  class="footer-content col-md-12 col-lg-12 col-sm-12">
											<div class="footer-contact-info">
												<div class="contact-info title">
														<div class="contact-title">
						<h1>CONTACT INFO</h1>
						
					</div>
														</div>
														<div class="address">
				<ul>
														  <li><b>House # 01, Road # 20, Block # J, Baridhara, Dhaka-1212, Bangladesh</b></li>
														  <li><span class="glyphicon glyphicon-phone"></span><b> : </b>+88 01777 709602, +88 01709 654853, <h1 class="text-danger"><strong>Hot Line: 16423</strong></h1></li>
														  <li><span class="glyphicon glyphicon-phone-alt"></span><b> : </b>02 9843140-43</li>
														  <li><span class="glyphicon glyphicon-envelope"></span><b> : </b>info@okapia-mobile.com</li>
				</ul>
														</div>					
											</div>
										</div>
									</div>
								</div>
		</div>

		<!--address map-->
		<div class="container" style="margin-bottom: 40px">
			<div class="row">
				<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5445926771245!2d90.42241711456286!3d23.799226084565312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c42453a8855f%3A0xb148cd6bce4daa07!2z4KaV4Kaw4KeN4Kaq4KeL4Kaw4KeH4KafIOCmquCnjeCmsOCmp-CmvuCmqCDgppXgpr7gprDgp43gpq_gpr7gprLgpq_gprwsIOCmk-CmleCmvuCmquCmv-Cnn-CmviDgpq7gp4vgpqzgpr7gpofgprI!5e0!3m2!1sbn!2sbd!4v1535271314581" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

	</section>
			
</main>			
			
<!-- ====== Main Part End ======= -->

<!-- ====== Footer Part ======= -->

<?php
	include('footer.php');
	if(isset($error) && count($error)>0){
		
		?>
	<script>
		$('#careersignIn').modal('show');
	</script>
	
		<?php
	}
?>
<!-- ====== Footer Part End======= -->	
	
	
	
	
	