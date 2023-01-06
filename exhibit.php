<!DOCTYPE html>
<html>

<head>
  <title>Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/exhibit-styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo_greenLeaf.ico">
</head>
<body>
<?php include 'menu.php'; ?>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top:7%;">
  <div class="carouselinner">
    <div class="carousel-item active">
      <div class="cardwrapper">
      <div class="card">
        <img src="images/exhibit.jpeg" class="card-img-top" alt="Exhibit-1">
      </div>
      <div class="card d-none d-md-block">
        <img src="images/exhibit2.jpeg" class="card-img-top" alt="Exhibit-2">
      </div>
      <div class="card d-none d-md-block">
        <img src="images/Exhibit3.jpg" class="card-img-top" alt="Exhibit-3">
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cardwrapper">
        <div class="card">
          <img src="images/Exhibit4.jpg" class="card-img-top" alt="Exhibit-4">
        </div>
        <div class="card d-none d-md-block">
          <img src="images/Exhibit5.jpg" class="card-img-top" alt="Exhibit-5">
        </div>
        <div class="card d-none d-md-block">
          <img src="images/Exhibit6.png" class="card-img-top" alt="Exhibit-6">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="cardwrapper">
        <div class="card">
          <img src="images/Exhibit7.jpg" class="card-img-top" alt="Exhibit-7">
        </div>
        <div class="card d-none d-md-block">
          <img src="images/Exhibit8.jpg" class="card-img-top" alt="Exhibit-8">
        </div>
        <div class="card d-none d-md-block">
          <img src="images/Exhibit9.jpg" class="card-img-top" alt="Exhibit-9">
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>