<?php  

session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>

	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body class="bg-secondary ">
	<div class="container">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
			<div class="container-fluid">
			<a href="#" class="navbar-brand logo"><img src="images/logo3.png" class="img-responsive logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon">
				</span>
			</button>
			<div class="collapse navbar-collapse text-center"id="collapsenavbar">
				<ul class="navbar-nav ml-auto nameitems">
					<li class="nav-item ">
						<a href="index.php" class="nav-link text-white focus">Home</a>
					</li>
					<li class="nav-item">
						<a href="#About" class="nav-link  text-white">About-Us</a>
					</li>
					<li class="nav-item">
						<a href="OrderOnline.php" class="nav-link  text-white">Order-Online</a>
					</li>
					<li class="nav-item">
						<a href="menu.php" class="nav-link  text-white">Menu</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link  text-white">Reservation</a>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link  text-white">Contact-Us</a>
					</li>
					<li class="nav-item">
						<a href="login.php" class="search text-white focus"><i class="fas fa-user" style="padding-right: 10px;"></i>Admin</a>
					</li>
				</ul>
			</div>
		</div>
		</nav>

		<div class="container">
		<div class="row border border-dark">
			<div class="col-sm-12 bord">
				<h3>Welcome! Admin <?php echo $_SESSION['username']; ?></h3>
				<a href="logout.php"> Logout?</a>
			</div>
		</div>
		</div>


	<section>
	<div class="container">
		<div class="row border border-dark">
			<div class="col-sm-4 border border-dark">
				<div class="ad_btn">
					<ul>
					<li><button type="button" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px; ">Show-Cart-Data</button></li>
					<li><button type="button" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px;">Manage-Foods</button></li>
					<li><button type="button" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px;">Update-Data</button></li>
					<li><button type="submit" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px;">Messages</button></li>
					<li><button type="button" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px;">Response</button></li>
					<li><button type="button" class="btn btn-outline-dark btn-lg active rounded-pill" style="width: 350px;">All-Records</button></li>
				</ul>
				</div>
			</div>
			<div class="col-sm-8 border border-dark">

				<table class="table table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Name</th>
							<th>email</th>
							<th>phone</th>
							<th>message</th>
							<th>C_Id</th>
						</tr>
					</thead>

				


<?php
	// session_start();

// for redirect


// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'signin');

$sql = "SELECT * from contact";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>".$row["name"].
		"</td><td>".$row["email"].
		"</td><td>".$row["phone"].
		"</td><td>".$row["message"].
		"</td><td>".$row["C_Id"].
		"</td></tr>";
	}
	echo "</table>";
}
	$con-> close();
				?>
			</table>



<!-- for reservation -->
<table class="table table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Name</th>
							<th>email</th>
							<th>contact</th>
							<th>location</th>
							<th>date</th>
							<th>time</th>
							<th>seat</th>
							<th>C_Id</th>
						</tr>
					</thead>

				


<?php
	// session_start();

// for redirect


// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'signin');

$sql = "SELECT * from reserve";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>".$row["name"].
		"</td><td>".$row["email"].
		"</td><td>".$row["contact"].
		"</td><td>".$row["location"].
		"</td><td>".$row["date"].
		"</td><td>".$row["time"].
		"</td><td>".$row["seat"].
		"</td></tr>";
	}
	echo "</table>";
}
	$con-> close();
				?>
			</table>



				
			</div>
		</div>
	</div>
	</section>

	<!-- ---------------------start footer Section------------------------>
		 <section id="fotr">
		 <div class="container">
    <div class="row foter mt-4">

    <div class="col-md-12 foota">

      <div class="boxa"><div></div><h4>Get In Touch!!!</h4></div>
    <div class="boxes">
      <h4> <a href="#"> head office</a> </h4>
      <ul class="contact-details">
        <li>
          <i class="fa fa-map-marker"></i>
          <strong>Adress:</strong>
          <span>Com. 5/1, Boating Basin, Clifton, Block-5, Karachi.</span>
        </li>
        <li>
          <i class="fa fa-envelope">
          </i>
          <strong>Email:</strong>
          <span>
            <a href="khan57540426@gmail.com">khan57540426@gmail.com</a>
          </span>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <strong>Call for delivery:</strong>
          <span>0335-7540426</span>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <strong>phone:</strong>
          <span>0330-574936</span>
        </li>
      </ul>
    </div>
    <div class="boxes hc">
      <h4>
      <a href="#"> Miles stone</a>
      </h4>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/80-1213456-50x50.jpg" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>Another win for your favorite restaurant!</h3>
      </div>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/awsomely-50x50.png" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>higher text prayer!</h3>
      </div>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/123-50x50.png" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>best BBQ resturant!</h3>
      </div>

    </div>
    <div class="boxes hb"><h4><a href="#"> quick links</a></h4>
      <ul class="b1">
        <li><a href="">introduction</a></li>
        <li><a href="">Order online</a></li>
        <li><a href="">Miles stone</a></li>
        <li><a href="">location & menu</a></li>
        <li><a href="">Reservation</a></li>
      </ul>
    </div>
    <div class="boxes ha"><h4><a href="#"> rate us on:</a></h4>

      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-github-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-whatsapp-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-instagram" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>


      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-twitter-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-facebook" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-snapchat-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
    </div>


    </div>
  </div>
  </div>
  </section>
  <!-- end footer -->

	</div>

	<!---------------javascript here------------------  -->
	<script>
		$(document).scroll(function(){
			$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());

		});
	</script>

</body>
</html>