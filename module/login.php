<!-- login -->
<?php 
if(@$_SESSION['is_login']==TRUE){
 header("Location:".base_url);
}
?>
		<div class="w3_login">
			<h3><?=(@$_GET['status']=="wrongpass")?"<font color='red'>Username atau Password Salah..!</font>":(@$_GET['status']=="wrongreg")?"<font color='red'>Something Wrong When Registration</font>":"Sign In & Sign Up";?></h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="<?=base_url;?>module/proseslogin.php" method="post">
					  <input type="text" name="username" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="<?=base_url;?>module/prosesdaftar.php" method="post">
					  <input type="text" name="username" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="email" name="email" placeholder="Email Address" required=" ">
					  <input type="text" name="phone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
