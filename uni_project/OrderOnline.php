<!DOCTYPE html>
<html>
<head>
	<title>Resturant</title>
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

<script>
    $(document).scroll(function(){
      $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());

    });
  </script>

</head>
<body class="family">
	<div class="container-fluid">
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
						<a href="#" class="nav-link  text-white">About-Us</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link  text-white">Order-Online</a>
					</li>
					<li class="nav-item">
						<a href="menu.php" class="nav-link  text-white">Menu</a>
					</li>
					<li class="nav-item">
						<a href="Reservation.php" class="nav-link  text-white">Reservation</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link  text-white">Contact-Us</a>
					</li>
					<li class="nav-item">
						<a href="login.php" class="search text-white focus"><i class="fas fa-user" style="padding-right: 10px;"></i>Admin</a>
					</li>
				</ul>
			</div>
		</div>
		</nav>
		<div class="row">
			<div class="col-md-12 bord">
				<h3>OrderOnline</h3>
			</div>
		</div>
		<p class="text-center">* Our Online Order facility is only available for karachi *</p>
		<div class="row">
			<div class="col-md-4 part">
				<ul>
					<li><button type="button" class="b1" style="width: 410px;">Starter</button></li>
					<li><button type="button" class="b8" style="width: 410px;">B.BQ Dishes</button></li>
					<li><button type="button" class="b9" style="width: 410px;">SeaFood Speciality</button></li>
					<li><button type="button" class="b4" style="width: 410px;">Afghan & middleEast</button></li>
					<li><button type="button" class="b5" style="width: 410px;">Chef's Recommendation</button></li>
					<li><button type="button" class="b6" style="width: 410px;">Deserts</button></li>
					<li><button type="button" class="b7" style="width: 410px;">Beverages</button></li>
				</ul>

			</div>
	<div class="col-md-8">

	<section id="start">
	<h2> Starter </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2013/06/52-1364991760-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Hummus</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 400/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/69-1366282736-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Achar (pickel)</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 400/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/98-1364989628-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Aloo Bukhara Chutni</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/7-1366283010-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Labinees Salid</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/14-1364990839-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chiken Wings</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  	</div>
	</div>
	</section>

	<section id="bbq">
	<h2> B.BQ Dishes </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/21-1365446519-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Behari Kabab</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/47-1366285430-300x300.jpg." alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chiken Bihari</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 800/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/1-1366285125-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chiken Booti</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/28-1365447890-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Reshmi Kabab</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 400/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/23-1366290758-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">chiken Tikka</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 400/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/69-1365447799-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Mutton Sekh Kabab</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 400/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>

	<section id="sea">
	<h2> Sea Foods </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/48-1365450635-1-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Finger Fish</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/42-1366283159-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Fish Kabab</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/97-1365450933-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Fish Tikka</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/87-1367396197-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Fried Prawn</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1200/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/33-1366287681-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Grilled Hole Paplet</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>

	<section id="Afghan">
		<h2> Afghani Foods </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/50-1366284711-1-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Afghani Chicken kaba</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/65-1366284466.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Afghani MalaiBoti</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1100/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/38-1366284581-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Afghani kabab</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/47-1366282884-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Afghani Tikka</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 900/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/83-1366284809.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chapli Kabab</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 800/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/18-1366285548-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chicken Chapli</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 700/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>

	<section id="rec">
	<h2><a href="#"> Chefs Recomended </a></h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/27-1367397313-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Brain Masala</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/55-1365454074-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chicken jalfrezy</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/37-1365454169-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chicken ginger</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/21-1365454291-300x300.jpg">
  	<div class="card-body">
    <h5 class="card-title">Chicken Karahi</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 800/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/19-1365454531-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">KataKat</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1000/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>

	<section id="desert">
	<h2> Deserts </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/Fruit-Trifle-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">fruit Trifle</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 1200/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/31-1366288194-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Kulfi</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 350/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>

	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/6-1366287766-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Home made kulfi</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 250/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/Zafrani-Kheer-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Zafrani halwa</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 500/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/Halwa-and-Paratha-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Suji halwa And Pratha</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 150/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/1-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Vanilla gelato</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 500/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>

	<section id="Beverage">
	<h2> Beverages </h2>
	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/10-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Fresh Lime with Cold drink</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 100/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/9-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Chai</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 50/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/8-300x300.png" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Green tea</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 50/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>


	<div class="card" style="width: 18rem;">
  	<img class="card-img-top" src="https://bbqtonight.com/wp-content/uploads/2016/05/42-1366283479-300x300.jpg" alt="Card image cap">
  	<div class="card-body">
    <h5 class="card-title">Lassi Sweet & Sour</h5>
    <p class="card-text">It is a delisious meal for before eating some food and also its banificial for digestive system.</p>
    <p class="card-text">Rs: 150/=</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
 	</div>
	</div>
	</section>


			
		</div>

       <!-- start footer -->
    <div class="row footer">
    <div class="col-md-12 foota">

      <div class="box7"><div></div><h4>Get In Touch!!!</h4></div>
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
    <div class="boxes">
      <h4>
      <a href="#"> Miles stone</a>
      </h4>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/80-1213456-50x50.jpg" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>Another win for your favorite restaurant!</h3>
        <h4>Date:28-dec-2018</h4>
      </div>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/awsomely-50x50.png" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>higher text prayer!</h3>
        <h4>Date:28-dec-2018</h4>
      </div>
      <div class="b3"><img src="http://bbqtonight.com/wp-content/uploads/2016/05/123-50x50.png" alt="BarBQ tonight restaurant"></div>
      <div class="b3"><h3>best BBQ resturant!</h3>
        <h4>Date:28-jan-2016</h4>
      </div>

    </div>
    <div class="boxes"><h4><a href="#"> quick links</a></h4>
      <ul class="b1">
        <li><a href="">introduction</a></li>
        <li><a href="">Order online</a></li>
        <li><a href="">Miles stone</a></li>
        <li><a href="">location & menu</a></li>
        <li><a href="">Reservation</a></li>
      </ul>
    </div>
    <div class="boxes"><h4><a href="#"> rate us on:</a></h4>

      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-github-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-whatsapp-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-instagram" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>


      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-twitter-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-facebook" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
      <div class="b2" style="display: flex; align-items: center; justify-content: center;"><a href="#"><i class="fab fa-snapchat-square" style="color: white; font-size: 50px; margin-right: 40px;"></i></a></div>
    </div>


    </div>
  </div>
  <!-- end footer -->


		</div>



<!-- javascript -->
<script>
	$(document).ready(function(){
		$(".b1").click(function(){
			$("#start").show();
      $("#bbq").hide();
      $("#sea").hide();
      $("#Afghan").hide();
      $("#rec").hide();
      $("#desert").hide();
      $("#Beverage").hide();

		});
});

  $(document).ready(function(){
    $(".b8").click(function(){
      $("#start").hide();
      $("#bbq").show();
      $("#sea").hide();
      $("#Afghan").hide();
      $("#rec").hide();
      $("#desert").hide();
      $("#Beverage").hide();

    });
});

  $(document).ready(function(){
    $(".b9").click(function(){
      $("#start").hide();
      $("#bbq").hide();
      $("#sea").show();
      $("#Afghan").hide();
      $("#rec").hide();
      $("#desert").hide();
      $("#Beverage").hide();

    });
});

$(document).ready(function(){
    $(".b4").click(function(){
      $("#start").hide();
      $("#bbq").hide();
      $("#sea").hide();
      $("#Afghan").show();
      $("#rec").hide();
      $("#desert").hide();
      $("#Beverage").hide();

    });
});


$(document).ready(function(){
    $(".b5").click(function(){
      $("#start").hide();
      $("#bbq").hide();
      $("#sea").hide();
      $("#Afghan").hide();
      $("#rec").show();
      $("#desert").hide();
      $("#Beverage").hide();

    });
});


$(document).ready(function(){
    $(".b6").click(function(){
      $("#start").hide();
      $("#bbq").hide();
      $("#sea").hide();
      $("#Afghan").hide();
      $("#rec").hide();
      $("#desert").show();
      $("#Beverage").hide();

    });
});


$(document).ready(function(){
    $(".b7").click(function(){
      $("#start").hide();
      $("#bbq").hide();
      $("#sea").hide();
      $("#Afghan").hide();
      $("#rec").hide();
      $("#desert").hide();
      $("#Beverage").show();

    });
});

</script>

</body>
</html>