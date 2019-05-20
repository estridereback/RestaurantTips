<?php
include('processes/session.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BlogPost template by Adobe Dreamweaver CC</title>
<link href="assets/css/start.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <div id="logo"><!-- <img src="logoImage.png" alt="sample logo"> --><!-- Company Logo text -->Logo</div>
    <nav> <a href="register.php" title="Link">Sign up</a> <a href="login.php" title="Link">Log in</a><a href="#" title="Link">Log out</a> </nav>
  </header>
  <div id="content">
    <div class="notOnDesktop"> 
      <!-- This search box is displayed only in mobile and tablet laouts and not in desktop layouts -->
      <input type="text" placeholder="Search">
    </div>
    <section id="mainContent"> 
      <!--************************************************************************
    Main Blog content starts here
    ****************************************************************************-->
      <h1><!-- Blog title -->Frenchi</h1>
      <h3><!-- Tagline -->SOME AWESOME HERO TAGLINE</h3>
      <div id="bannerImage"><img src="assets/img/startbild.jpg" alt=""/></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <aside id="authorInfo"> 
        <!-- The author information is contained here -->
        <h2>Tips</h2>
 					<?php
				$uname = "dbtrain_1036";
				$pass = "xotlno";
				$host = "dbtrain.im.uu.se";
				$dbname = "dbtrain_1036";
	
				$connection =  new mysqli($host, $uname, $pass, $dbname);
	
				if($connection -> connect_error)
				{
					die("Connection failed: ".$connection.connect_error);
				}
				
				$activeRestaurant = "Frenchi";
				$sql = "SELECT title, content, userid FROM Tips, Restaurants WHERE Tips.restaurantid = Restaurants.id AND Restaurants.name = '$activeRestaurant'";
				$result = $connection->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) { 
						 echo "<p><h3>Title: </h3>". $row["title"]. " <h3> Tip: </h3>". $row["content"]. "<br> </p>";
					 }
				}
				$connection->close();
			?>
	</aside>
    </section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="assets/img/litenbannan.png" alt=""/></div>
      <nav>
        <ul>
          <li><a href="postTip.php" title="Link">Post a tip</a></li>
          <li><a href="basilico.php" title="Link">Basilico</a></li>
          <li><a href="frenchi.php" title="Link">Frenchi</a></li>
          <li><a href="#" title="Link">Iberico</a></li>
          <li><a href="#" title="Link">Aaltos</a></li>
          <li><a href="start.php" title="Link">Home</a></li>
        </ul>
      </nav>
    </section>
  </div>
  <div id="footerbar"><!-- Small footerbar at the bottom --> copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>
