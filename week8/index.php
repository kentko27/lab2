<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Clart's Profile</title>
	<link rel="icon" href="assets/images/logotitle.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=RetroPix:wght@400&display=swap" />
    <link rel="stylesheet" href="indexnew.css" />
  </head>
  <body>
  
    <div class="main-container">
	<div class="navbar">

  <div class="menu-icon" onclick="toggleMenu()">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <ul class="nav-links">
    <li><a href="#" class="retro-btn">Home</a></li>
    <li><a href="#" class="retro-btn">About</a></li>
    <li><a href="#" class="retro-btn">Services</a></li>
    <li><a href="#" class="retro-btn">Contact</a></li>
  </ul>
</div>
	  <div class="img-3"></div>
      <div class="img-2">
      </div>
      <div class="img-4"></div>
	  <div class="pic"></div>
      <div class="section">
        <span class="text">UI / UX Designer</span>
      </div>
      <span class="text-3">Clart Kent<br />Nailgas</span>
      <div class="pic-2"></div>
      <span class="text-4"
        >I’m a UI/UX Student based in the Philippines and loves to play around
        different themes and colors. I also like singing and song writing.</span
      >
      <div class="wrapper">
        <div class="box">
          <div class="pic-3"></div>
          <div class="pic-4"></div>
        </div>
        <div class="section-2">
          <span class="text-5">Born in:</span
          ><span class="text-6">Experience:</span
          ><span class="text-7">Date of Birth:</span>
        </div>
        <div class="box-2">
          <span id="text-8">Philippines</span>
		  <span class="text-9">2+ Years</span>
		  <span id="text-a">27 November 2003</span>
      <p id="titlename"></p>

      <span id="phptut1">

      <?php $myfavthings = array(
      "food" => "Caesar Salad",
      "hobby" => "Cooking",
      "game" => "Valorant, ML, Genshin",
      );

      echo "<br>My Favorite Things! <br>";
      foreach ($myfavthings as $key => $value) {
      echo ucfirst($key) . ": " . $value . "<br>"; 
      }
      ?>
      </span>
        </div>
      </div>
    </div>
  </body>
</html>
