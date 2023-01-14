<!DOCTYPE html>
<html>

<head>
  <title>Contact - GreenLeaf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo_greenLeaf.ico">
</head>

<body>

  <?php include 'menu_cart.php'; ?>

  <section class="my-5">
    <div style="padding-top:6%;">
      <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">

      <form action="userinfo.php" method="post">
      
      <div class="form-group">
          <label>Name</label>
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
          <textarea class="form-control" name="comments"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </section>
  <footer>
    <p style="color: #367E18" class="p-3 bg-light text-center">@GreenLeaf 2022</p>
  </footer>
</body>

</html>