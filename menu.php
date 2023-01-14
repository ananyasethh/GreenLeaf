<script>
  const uid = function() {
    return Date.now().toString(36) + Math.random().toString(36).substr(2);
  }
  window.onload = () => {
    // console.log(, "UID IS COMING")
    if (!localStorage.getItem('userId')) {
      const id = uid();
      localStorage.setItem('userId', id);

      function setCookie(name, value, exp_days) {
        var d = new Date();
        d.setTime(d.getTime() + (exp_days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
      }
      setCookie('userId', id, 500);
      window.location.reload();
    }
  }
</script>

<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">
    <a style="color: #367E18; font-size: 2.3rem" class="navbar-brand" href="index.php">
      <img src="images\logo_greenLeaf.png" alt="Logo" width="45" height="">
      GreenLeaf</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0 p-2" style="font-size: 1.3rem; gap: 1rem">
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Home" style="color: #38E54D" class="nav-link active" aria-current="page" href="index.php">
            <img src="images/home.png" alt="Home" width="38" height="" style="margin-top:3px;"/></a>
        </li>
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Shop" style="color: #38E54D" class="nav-link" href="store.php?category=all" target=_blank>
            <img src="images/shop.png" alt="Shop" width="37" height="" style="margin-top:3px;"/></a>
        </li>
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="About Us" style="color: #38E54D" class="nav-link" href="about.php" target=_blank>
            <img src="images/AboutUs.png" alt="About Us" width="36" height="" style="margin-top:3px;"/></a>
        </li>
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Contact Us" style="color: #38E54D" class="nav-link" href="contact.php" target=_blank>
            <img src="images/ContactUs.png" alt="Contact" width="37" height="" style="margin-top:2px;" /></a>
        </li>
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="FAQs" style="color: #38E54D" class="nav-link" href="faq.php">
            <img src="images/faq.png" alt="FAQs" width="53" height="" style="margin-top:1.5px;"/></a>
        </li>

        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Cart" style="color: #38E54D" class="nav-link" href="cart.php">
            <img src="images/cart.png" alt="Cart" width="36" height="" style="margin-top:4px;"/></a>
        </li>
      </ul>
    </div>
  </div>

  <div style="position:absolute; top:91%; z-index:1; width:100%; background-color: #f1f1f1; left:0px;">
    <div style="width: 100%; height: 8px; background: #ccc;">
      <div style="height: 8px; background: #54B435; width: 0%;" id="myBar"></div>
    </div>
  </div>

  <script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
      myFunction()
    };

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }
  </script>

  <script>
    //tool tip calling
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</nav>