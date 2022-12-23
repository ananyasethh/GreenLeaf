
<script>
      const uid = function(){
        return Date.now().toString(36) + Math.random().toString(36).substr(2);
    }
    window.onload = () => {
        // console.log(, "UID IS COMING")
        if (!localStorage.getItem('userId'))
        {
            const id = uid();
            localStorage.setItem('userId', id);
            function setCookie(name,value,exp_days) {
                var d = new Date();
                d.setTime(d.getTime() + (exp_days*24*60*60*1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = name + "=" + value + ";" + expires + ";path=/";
            }
            setCookie('userId',id,500);
            window.location.reload();
        } 
    }
</script>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">
    <a style="color: #367E18; font-size: 1.5rem" class="navbar-brand" href="#" >
      <img src="images\logo_greenLeaf.png" alt="Logo" width="30" height="">
    GreenLeaf</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0 p-2" style="font-size: 1.3rem; gap: 1rem">
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="store.php?category=all" target=_blank><strong>Shop</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="about.php" target=_blank><strong>About</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="contact.php" target=_blank><strong>Contact</strong></a>
        </li>
        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="faq.php"><strong>FAQ</strong></a>
        </li>

        <li class="nav-item">
          <a style="color: #38E54D" class="nav-link" href="cart.php"><strong>Cart</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>