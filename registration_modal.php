
<!-- ===========    Registration In Modal ================ -->
<div class="modal fade" id="careersignIn">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php
				if(isset($error) && count($error) >0){
					foreach($error as $error){
						echo '<span style="color:red">*** '.$error.'</span><br>';
					};
				}
			?>
			 <form class="" method="POST">
				<div class="form-group">
				<label>Name</label>
				<input type="text" name="fullName" placeholder="Enter Full Name" class="form-control">
			  </div>
			  <div class="form-group">
				<label>Email Address</label>
				<input type="email" name="email" placeholder="Enter Email" class="form-control">
			  </div>
			  <div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter Password" class="form-control">
			  </div>
                                                        <div class="form-group">
				<label>Phone Number</label>
				<input type="number" name="phoneNumber" placeholder="Enter your Phone Number" class="form-control">
			  </div>
                                                        <div class="form-group">
				<label>Address</label>
                <textarea class="form-control" name="address" placeholder="Enter your full address"></textarea>
			  </div>
			 <div class="form-group">
				<label for="blood">Blood Group</label>
               <select name="blood" id="blood">
				<option value=""> ** Your Blood Group **</option>
				<option value="1">A<sup>+</sup></option>
				<option value="2">A<sup>-</sup></option>
				<option value="3">B<sup>+</sup></option>
				<option value="4">B<sup>-</sup></option>
				<option value="5">O<sup>+</sup></option>
				<option value="6">O<sup>-</sup></option>
				<option value="7">AB<sup>+</sup></option>
				<option value="8">AB<sup>-</sup></option>
               </select>
			  </div>
			  <div class="form-group">
				<div class="radio">
				<label><input type="radio" name="gender" value="m" checked>Male</label>
				<label><input type="radio" name="gender" value="f">Female</label>
               </div>
			  </div>
			  <div class="form-group">
				<label for="file">Attach Your CV</label>
				<input name="cv" type="file" class="form-control-file" id="file">
			  </div>
			 <div class="form-group">
				<div class="checkbox">
				<label><input type="checkbox" name="agree" value="1" checked>I agree with all terms & conditions</label>
                </div>
			  </div>
			  <button name="registration" type="submit" class="btn btn-primary">Submit</button>
			</form>
      </div>
    </div>
  </div>
</div>
<!-- ===========    End Sign In Modal ================ -->