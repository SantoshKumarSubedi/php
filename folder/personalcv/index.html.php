<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta charset="utf-8">
<!--importing css files -->
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<!--downloading font from google api -->
<link href="https://fonts.googleapis.com/css?family=Pacifico%7Courgette%7CLato" rel="stylesheet">
<!--importing java script -->
<script src="js/script.js"></script>
<!--this is to make page responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <!--header division -->
<header class="header">
  <!--This is division for logo-->
  <div class="header-first-div">
    <!-- logo at top left corner-->
    <img class="logo" src="images/logo.png" alt="logo">
  </div>
<!--Navigation item lists -->
  <div class="header-second-div" id="header-second-div">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="links" href="index.html">Home</a>
    <a class="links" href="html/contact.html">Contact</a>
<a class="links" href="html/Social.html">Social</a>
    <a class="links" href="html/aboutme.html">About me</a>
    <a class="links" href="html/CV.html">CV</a>
    <a class="href"  target="_blank" href="html/module_gp.html">Report</a>

  </div>
  <!--Hamburger at top right corner -->
  <div class="humberger" style="font-size:50px;cursor:pointer" onclick="openNav()">
    <div class="first-line"></div>
    <div class="second-line"></div>
    <div class="third-line"></div>
  </div>

</header>
<!--text image beetween two items below header -->
<div class="text-image"><img src="images/txt.png" alt="name-image">
</div>
<?=$output?>

<!--email division at the buttom of the page -->
<div class="social">
  <div class="social-email">
    <p class="email">subedisantos9@gmail.com</p>
  </div>

</div>

<footer class="footer">
  <!--navigation list at the buttom of the page -->
  <div class="footer-list">
    <a class="link" href="index.html">Home</a>
    <a class="link" href="html/contact.html">Contact</a>
    <a class="link" href="html/aboutme.html">About me</a>
    <a class="link" href="html/CV.html">CV</a>
    <a class="link" href="html/Social.html">Social</a>
    <a class="link" href="html/module_gp.html">Report</a>
  </div>
<div class="footer-copyright">
<p>Copyright &copy; 2018</p>
</div>
</footer>
</body>
</html>
