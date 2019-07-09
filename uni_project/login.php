<!DOCTYPE html>
<html>
<head>
	<title>lg-form</title>
	<link rel="stylesheet" href="css1/style.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

</head>
<body>

	 <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="validation.php" method="post">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="registration.php" method="post">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <!-- <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div> -->
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>















	<!-- <div class="container">
	<div class="row">
	<div class="col-sm-12">
		<div id="main">
			<img src="images/back.jpg">
		<div id="lgform">
			<img src="images/user.png" style="width: 100px; height: 100px; position: relative; bottom: 50px; left: 110px;">
		<h2>LOGIN HERE</h2>
		<form>
			<p>Email</p>
			<input autofocus type="text" name="name" class="input-field" placeholder="Enter Email"  id="Email"><p id="error" style="color:red;"></p>
			<p>Password</p>
			<input autofocus type="Password" name="Password" class="input-field" placeholder="*******"  id="Password"><p id="passerror"></p>
			<input type="button" class="Submit" name="" value="Sign-In" onclick="myFunction()">
			<a href="#">Forget Password</a>

			<a href="#">Don't Have Account</a>

		</form>

	</div>
	</div>
	</div>
	</div>
</div> -->

</body>

<!-- <script>
	function myFunction(){
		var a = document.getElementById("Email").value;
		var b = document.getElementById("Password").value;
	
	if (a == "") {
		document.getElementById("error").innerHTML = "Plase Enter Your Email";
		document.getElementById("passerror").innerHTML = "";
		
	}
	else if (b == "") {
		document.getElementById("passerror").innerHTML = "Please Enter Your Password";
		document.getElementById("error").innerHTML = "";
	}
	else
	{
		alert("You had all Field Filled");
	}
}
</script> -->

</html>