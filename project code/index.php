<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="page.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
<nav class="w3-bar w3-black">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="contactpage.php" class="w3-button w3-bar-item">Contact us</a>
</nav>
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Plantopia</b></h1>
  <p>Make our environment more greener</p>
  <div>
  <a class="btn" href="login.php"style="float:right;">Login</a>
  <a href="register.php" class="btn" style="float:right;">Register</a>
  
</div>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/nature.jpg" alt="Nature" style="width:100%">
    
    <div class="w3-container">
      <h3><b>Together We can make this world better</b></h3>
      
    </div>

    
    </div>
  </div>
  <hr>

  

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/img.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Dose of Inspiration</b></h4>
      <p>“When we see land as a community to which we belong, we may begin to use it with love and respect.” -Aldo Leopold</p>

    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Oxygen Rich plants</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="images/peacelilly1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="peacelilly.php">Peace Lilly</a></span><br>
        <span>A flowering house plant, peace lily is known to bring good luck and health other than its air-purifying properties. </span>
      </li>
      <li class="w3-padding-16">
        <img src="images/tulsi2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="tulsi.php">Tulsi</a></span><br>
        <span>Tulsi is also known as Holy Basil. It is native to India and mostly cultivated in south-eastern Asia</span>
      </li>
      <li class="w3-padding-16">
        <img src="images/pothos2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="pothos.php">Pothos</a></span><br>
        <span>A beautiful and lively foliage plant, pothos is very easy to take care of that commonly known as money plant in most households.</span>
      </li>
      <li class="w3-padding-16">
        <img src="images/snakeplant1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="snakeplant.php">Snakeplant</a></span><br>
        <span>snake plants can absorb cancer-causing pollutants, including CO2, benzene, formaldehyde, trichloroethylene, xylene, and toluene.  </span>
      </li> 
      <li class="w3-padding-16">
        <img src="images/aloevera1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="aloevera.php">Aloevera</a></span><br>
        <span>A perennial succulent, aloe vera is known for being good for your skin.</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="images/areca-palm.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="arecapalm.php">Areca Palm</a></span><br>
        <span>Areca palm (Chrysalidocarpus lutescens) is one of the most widely used palms for bright interiors.</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

</body>
</html>
