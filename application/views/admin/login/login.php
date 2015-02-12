
<div id="login">

	<!-- Box -->
	<div class="form-signin">
		<h3>Sign in to Your Account</h3>
		
		<!-- Row -->
		<div class="row-fluid row-merge">
		
			<!-- Column -->
			<div class="span7">
				<div class="inner">
				
					<!-- Form -->
					<form id="loginform" class="form-horizontal" autocomplete="off" method="post" action="" >
					
						<label class="strong">Email</label>
						<input type="text" id="username" name="username" class="input-block-level" placeholder="Your Email address"/> 
						<label class="strong">Password </label>
						<input type="password" id="password" name="password" class="input-block-level" placeholder="Password"/> 
						
						<label class="strong">Password <a class="password" href="<?php echo base_url()?>index.php/admin/login/forgotpassword"">forgot your password?</a></label>
						
						<div class="row-fluid">
							<div class="span5 center">
								<button class="btn btn-block btn-primary" type="submit">Login</button>

							</div>
													
						</div>
					
					</form>
					<!-- // Form END -->

				</div>
			</div>
			<!-- // Column END -->
			
			
		</div>
		<!-- // Row END -->
		
		
	</div>
	<!-- // Box END -->
	
</div>
