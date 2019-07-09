<!DOCTYPE html>
<html>
<head>
	<title>Reservation And Contact-Us</title>
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
<body class="bg-secondary">

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
		<div class="row">
			<div class="col-sm-12 bord">
				<h3>Reservation & Contact-Us</h3>
			</div>
		</div>
		</div>

		<section class="Reserve text-white">
			<div class="container border bg-dark">
				<div class="row">
					<div class="col-sm-12">
						<div class="headerText text-center">
						<h2>Reservaton</h2>
						<p class="mt-1 justify-content text-center">Please provide the following information to complete your reservation request. Make sure you provide correct information to avoid any inconvenience. We will contact you on the phone number you provide.</p>

						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="offset-sm-2 col-sm-8">
						<form action="insert.php" method="post">
							<div class="form-group">
								<label>Full Name:</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Email Adress:</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact No:</label>
								<input type="text" name="contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Location:</label>
								<select name="location" class="form-control">
									<option>Select-location</option>
									<option>Nazimabad No#2</option>
									<option>North Nazimabad lock-L</option>
									<option>Saddar Branch</option>
									<option>Clifton Branch</option>
								</select>
							</div>
							<div class="form-group">
								<label>Date of Reservation:</label>
								<input type="text" name="date" class="form-control">
							</div>

							<div class="form-group">
								<label>Time:</label>
								<select name="time" class="form-control">
									<option>Select-Time</option>
									<option>1:00am</option>
									<option>2:00am</option>
									<option>3:00am</option>
									<option>4:00am</option>
									<option>5:00am</option>
									<option>6:00am</option>
									<option>1:00pm</option>
									<option>2:00pm</option>
									<option>3:00pm</option>
									<option>4:00pm</option>
									<option>5:00pm</option>
									<option>6:00pm</option>
									<option>7:00pm</option>
									<option>8:00pm</option>
								</select>
							</div>

							<div class="form-group">
								<label>Seat No:</label>
								<input type="number" name="seat" class="form-control">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-outline-light btn-lg active rounded-pill">Submit</button>
							</div>


						</form>
					</div>
				</div>



			</div>
		</section>
		<!-- -------------------------------Contact us section-------------- -->
		<section class="contact" id="contact">
			<div class="container mt-2 border bg-dark text-white">
				<div class="row">
					<div class="col-sm-12">
						<div class="headerText text-center">
						<h2>Contact Us</h2>
						<p>Do you have any Query So Contact with us annd take better response.</p>

						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="offset-sm-2 col-sm-8">
						<form method="post" action="insert.php">
							<div class="form-group">
								<label>Name:</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Phone No:</label>
								<input type="text" name="phone" class="form-control">
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control textarea" name="message"></textarea>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-outline-light btn-lg active rounded-pill">Send</button>
							</div>


						</form>
					</div>
				</div>

			</div>

		</section>
		<!-- --------------------------end contact us section------------- -->


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
	<!-----------------------------script for scroll-------------------------->
	<script>
		$(document).scroll(function(){
			$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());

		});
	</script>

</body>
</html>