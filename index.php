<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a style="color: #367E18" class="navbar-brand" href="#">
      <img src="images\logo_greenLeaf.png" alt="Logo" width="30" height="">
    GreenLeaf</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="#" target=_blank><strong>Shop</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="about.php" target=_blank><strong>About</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="#"><strong>Contact</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="#"><strong>FAQ</strong></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

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
      <h2 class="display-4">We are GreenLeaf Team.</h2>
      <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. </p>
        <a href="about.php" target=_blank class="btn btn-success">More about us </a>
    </div>
  </div>
</div>
</section>

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
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="images\pots.jpg" alt="Pots">
        <div class="card-body">
        <h4 class="card-title">Pots</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="images\accessories.jpg" alt="Accessories">
        <div class="card-body">
        <h4 class="card-title">Accessories</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>

    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email ID</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</section>
<footer>
  <p style="color: #367E18" class="p-3 bg-light text-center">@GreenLeafTeam</p>
</footer>
</body>
</html>