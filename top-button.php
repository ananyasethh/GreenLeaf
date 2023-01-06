<head>
  <style>
    #myButton {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      border: none;
      outline: none;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
      background: #38d986;
      background-image: -webkit-linear-gradient(top, #38d986, #22a12b);
      background-image: -moz-linear-gradient(top, #38d986, #22a12b);
      background-image: -ms-linear-gradient(top, #38d986, #22a12b);
      background-image: -o-linear-gradient(top, #38d986, #22a12b);
      background-image: linear-gradient(to bottom, #38d986, #22a12b);
      -webkit-border-radius: 47;
      -moz-border-radius: 47;
      border-radius: 47px;
      font-size: 25px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      opacity: 0.7;
    }

    #myButton:hover {
      background: #0d6b0a;
      background-image: -webkit-linear-gradient(top, #0d6b0a, #1da13a);
      background-image: -moz-linear-gradient(top, #0d6b0a, #1da13a);
      background-image: -ms-linear-gradient(top, #0d6b0a, #1da13a);
      background-image: -o-linear-gradient(top, #0d6b0a, #1da13a);
      background-image: linear-gradient(to bottom, #0d6b0a, #1da13a);
      text-decoration: none;
    }
  </style>
</head>

<body>
  <button onclick="topFunction()" id="myButton" title="Go to top"><strong>🡅</strong></button>

  <script>
    // Get the button
    let mybutton = document.getElementById("myButton");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>