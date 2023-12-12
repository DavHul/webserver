<!DOCTYPE html>
<html>
<head>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./src/styles.css">

</head>
<body>
<div class="grid-container">
    <div class="header">
        <h2>I am David Hulsebosch</h2>
        <p>Welcome to my site</p>
    </div>
  
    <div class="topnav">
        <a href="./index.php">Home</a>
        <a href="./projects.php">Projects</a>
        <a href="./about.php">About</a>
        <a href="./website.php">Websites</a>
    </div>

    <div class="content">
        <h1>Websites</h1>
        <p>Here are the reference links to other websites that I built. I do remove these links when I do not expect them to be used but feel free to ask me to put one back!</p>
    </div>
  
    <div class="footer">
        <p>David Hulsebosch<br>
        Email: david@trexco.nl<br>
        Telephone: +31 06 38465888
        </p>
        <!-- Add font awesome icons -->
        <a href="https://www.linkedin.com/in/david-hulsebosch/" class="fa fa-linkedin-square"></a>
        <a href="https://github.com/DavHul" class="fa fa-github"></a>
        <a href="https://instagram.com/d.h.s_photography?igshid=OGQ5ZDc2ODk2ZA==" class="fa fa-instagram"></a>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
  // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</div>
</body>
</html>


