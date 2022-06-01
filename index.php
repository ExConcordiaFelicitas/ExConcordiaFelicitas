<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--link rel="stylesheet" href="font-awesome.min.css"-->
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Austria</a>
      <a href="#">Belgio</a>
      <a href="#">Finlandia</a>
      <a href="#">Francia</a>
      <a href="#">Germania</a>
      <a href="#">Irlanda</a>
      <a href="#">Italia</a>
      <a href="#">Lussemburgo</a>
      <a href="#">Paesi Bassi</a>
      <a href="#">Portogallo</a>
      <a href="#">Spagna</a>
      <a href="#">Grecia</a>
      <a href="#">Slovenia</a>
      <a href="#">Cipro</a>
      <a href="#">Malta</a>
      <a href="#">Slovacchia</a>
      <a href="#">Estonia</a>
      <a href="#">Lettonia</a>
      <a href="#">Lituania</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  <h1>Bank Ranking</h1>
  <h2>Actually inside the bank.</h2>
  <p>Analisi e confronto dei principali indicatori andamentali delle banche europee.</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
