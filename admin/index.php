<?php 

	include('header.php'); 
	include('../functions.php');
	
	##### user data function ####
	$allUser=allUserData();
	
	/* *****
	echo '<pre>';
		print_r($allUser);
		
		while($detials = mysqli_fetch_assoc($allUser)){
				print_r($detials);
			};
	echo '</pre>';
	****** */
?>

	<!-- ============== content Part ============= -->
<section class="mt-3">
	<div class="container">
		<?php
			
		?>
		<div class="row">
			<h1 class="bg-success text-white text-center w-100">User Data Table</h1>
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">name</th>
				  <th scope="col">email</th>
				  <th scope="col">phone</th>
				  <th scope="col">addr</th>
				  <th scope="col">blood</th>
				  <th scope="col">gender</th>
				  <th scope="col">CV</th>
				  <th scope="col">action</th>
				</tr>
			  </thead>
			  <tbody>
			<?php 
				if(mysqli_num_rows($allUser) >0){
					$x = 1;
					while($detials = mysqli_fetch_assoc($allUser)){
						?>
						<tr>
						  <td scope="col"><?php echo $x++; ?></td>
						  <td scope="col"><?php echo $detials['name']; ?></td>
						  <td scope="col"><?php echo $detials['email']; ?></td>
						  <td scope="col"><?php echo $detials['phone']; ?></td>
						  <td scope="col"><?php echo $detials['addr']; ?></td>
						  <td scope="col"><?php 
								///echo $detials['blood']; 
								switch($detials['blood']){
									case 1: echo 'A<sup>+</sup>';
									break;
									case 2: echo 'A<sup>-</sup>';
									break;
									case 3: echo 'B<sup>+</sup>';
									break;
									case 4: echo 'B<sup>-</sup>';
									break;
									case 5: echo 'O<sup>+</sup>';
									break;
									case 6: echo 'O<sup>-</sup>';
									break;
									case 7: echo 'AB<sup>+</sup>';
									break;
									case 8: echo 'AB<sup>-</sup>';
									break;
									Default : echo '';
								}
								?></td>
						  <td scope="col">
							<?php 
								$gender =array('m'=>'Male', 'f'=>'Female');
								$g= $detials['gender']; 
								echo $gender[$g]; 
							?>
						  </td>
						  <td scope="col">CV</td>
						  <td scope="col">action</td>
						</tr>
						<?php
					};
					?>
					
					<?php
				}else{
					?>
					<tr>
					  <td colspan="9" class="text-center">There Have NO Data At Yet</td>
					</tr>
					<?php
				}
			?>
				
			  </tbody>
			</table>

		</div>
	</div>
</section>
    
	<!-- ============== content Part End ============= -->
<?php include('footer.php'); ?>