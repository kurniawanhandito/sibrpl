<!DOCTYPE html>
<html>
	
<head>
	<title>Logistik Telkom University</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>

	
				 <!-----start-main---->
				<div class="login-form">
					<div class="head">
						<img src="images/telu.jpg" alt=""/>
						
					</div>
					<form method="POST" action="aksi-login.php">
					<li>
						<input type="text" name="username" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
					</li>
					<li>
						<input type="password" name="password"  value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
					</li>
					
					<div class="p-container">
								<label class="checkbox"> <input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit" onclick="myFunction()" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		  <!-----start-copyright---->
   					<div class="copy-right">
						<p align="center" >@2016 <a href="http://logistik.telkomuniversity.ac.id/">Logisitik Tel-U</a></p> 
					</div>
				<!-----//end-copyright---->
		 		
</body>
</html>