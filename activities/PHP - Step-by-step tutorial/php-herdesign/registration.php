<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HerDesigns: Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />

</head>

<body>
	<div id="page">
		<div id="header">
			<div id="connect">
				<a href="#" target="_blank" class="facebook" title="Facebook"></a>
				<a href="#" target="_blank" class="twitter" title="Twitter"></a>
 			</div>

			<a href="index.html" id="logo"><img src="images/logo.gif" alt="LOGO" /></a>

			<ul id="navigation">
				<li><a href="index.php">Home</a></li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
    		</ul>
		</div> <!-- /#header -->

		<div id="body">
			<div id="articles">
				<div id="blogs">
				 <h4>Registration</h4><br/>
					<p>


					<form method="post">
					Email:<br> <input type="text" name="email" class="txtfield"  /><br /><br />
					Password:<br> <input type="text" name="password" class="txtfield"  /> <br /><br />
                    Name:<br> <input type="text" name="name" class="txtfield"  /><br /><br />
                    City:<br> <input type="text" name="city" class="txtfield"  /><br /><br />

					<input type="submit" name="registration" value="" class="button" />
					</form>


					</p>

				</div>
				<!-- end of blogs -->
				<div id="updates">
				    <h4>Membership</h4>
				   	<p>Member? <a href="login.php">Login</a> here.</p>
					<p>Not yet a member? <a href="register.php">Register</a> now.</p>

				</div>
			</div>
		</div> <!-- /#body -->
	</div> <!-- /#page -->
	<div id="footer">
		&copy; Copyright 2019 HerDesigns. All rights reserved
	</div> <!-- /#footer -->
</body>
</html>