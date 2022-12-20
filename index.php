<!DOCTYPE html>
<html>
<head>
    <title>GreenLeaf</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\Green1.jpg" alt="Green1" width="1707" height="600">
      <div class="carousel-caption">
        <h1>Go Green</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\Green4.jpg" alt="Green4" width="1707" height="600">  
      <div class="carousel-caption">
        <h1>Grow Green</h1>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images\Green2.jpg" alt="Green2" width="1707" height="600">
      <div class="carousel-caption">
        <h1>Live Green</h1>
      </div>   
    </div>  
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- ABOUT US -->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images\Green5.jpg" alt="Green5" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">We are GreenLeaf.</h2>
      <p class="py-3">An e-Nursery website with a mission to present to you selected indoor and 
        outdoor plants, tools and accessories, and beautiful planting pots to showcase your home's 
        greenery. Taste the essence of living in a greener world with the motto of <em> Go Green! 
          Grow Green! Live Green! </em>
</p>
        <a href="about.php" target=_blank class="btn btn-success">More about us </a>
    </div>
  </div>
</div>
</section>

<!-- PRODUCT CATEGORIES -->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Product Categories</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="images\Plants.png" alt="Plants">
        <div class="card-body">
        <h4 class="card-title">Plants</h4>
        <p class="card-text">Let's decorate your home with some plants!</p>
        <a href="store.php?category=Plant" class="btn btn-success" target=_blank>Let's Shop</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="images\pots.jpg" alt="Pots">
        <div class="card-body">
        <h4 class="card-title">Pots</h4>
        <p class="card-text">Check out some beautiful pots for your plants!</p>
        <a href="store.php?category=Pot" class="btn btn-success">Let's Shop</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="images\accessories.jpg" alt="Accessories">
        <div class="card-body">
        <h4 class="card-title">Accessories</h4>
        <p class="card-text">Make plantation mess-free with handy accessories!</p>
        <a href="store.php?category=Accessories" class="btn btn-success">Let's Shop</a>
  </div>
</div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->

<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Frequently Asked Questions (FAQ)</h2>
    </div>
    <div class="container-fluid">
      <div class="px-5">
        <h4>WHICH INDOOR PLANTS ARE THE EASIEST TO CARE FOR?</h4>
        <p>Pothos, Aglaonema, Sansevieria, Dracaena Lisa, Spider, Corn, Iron, ZZ plants,
          Bird's Nest fern, Cacti, Succulents. </p>
        <br>
        <h4>SHOULD I MIST MY PLANTS? WHICH PLANTS LIKE TO HAVE LEAVES MISTED?</h4>
        <p>◉ Plants like Bird of Paradise, Philodendron, Fern, Iron plant, Bella Palm will enjoy
          if you mist their leaves often. <br>◉ Plants like Bird of Paradise, Philodendron, Fern, Iron
          plant, Bella Palm will enjoy if you mist their leaves often.<br>◉ Plants like Snake, ZZ, Yucca,
          Jade prefer not to be misted. <br> Heat dries out the air the most, and misting pants that
          love humidity <strong>daily</strong> during the cold season is essential. AC will remove
          moisture from the air as well but not as much. Mist your humidity loving plants at least
          few times a week during the warm season. A humidifier is also a good option. Your skin
          and your plants will benefit from it equally.
        </p>
        <div class="text-center">
          <h5>Want to know more?</h5>
          <a href="faq.php" target=_blank class="btn btn-success text-center">FAQs</a>
        </div>
      </div>
    </div>
  </section>

<footer>
  <p style="color: #367E18" class="p-3 bg-light text-center">@GreenLeaf 2022</p>
</footer>
</body>
</html>