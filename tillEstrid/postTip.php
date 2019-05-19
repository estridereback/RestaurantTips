<?php
include('processes/session.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Post Tip</title>
<link href="assets/css/start.css" rel="stylesheet" type="text/css">
<script src = "assets/js/tipValidation.js"></script>
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
      <h1><!-- Blog title -->Post Title</h1>
      <h3><!-- Tagline -->SOME AWESOME HERO TAGLINE</h3>
      <div id="bannerImage"><img src="assets/img/startbild.jpg" alt=""/></div>
		<h3>Write your tip to other users here!</h3>
		<p> Fill in the title of your tip, your email-address, select what restaurant the tip concerns and then write your thoughts down.
			Once you click on the submit-button your tip will be posted at the side of the restaurant you have chosen.</p>
				<form name = "inputForm" action="processes/tipProcess.php" onsubmit = "return validateForm()" method = "post">
					<br><label for="title">Tip title</label>
					<br><input type="text" id="title" name="title" placeholder="ex. Good atmosphere at this restaurant">
					<br><label for="email">Email-address</label>
					<br><input type="text" id="email" name="email" placeholder="ex. lisa@gmail.com">
					<br><label for="restaurant">Restaurant</label>
					<br><select name="restaurant">
							<option value="Basilico">Basilico</option>
							<option value="Frenchi">Frenchi</option>
							<option value="Iberico">Iberico</option>
							<option value="Aaltos">Aaltos</option>
						</select>
					<br><label for="comment">Tip</label>
					<br><textarea id="tip" name="tip" placeholder="Write your tip here.. (max 500 characters)" style="height:150px"></textarea>
					<br><input type="submit" value="Submit">
				</form>
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
          <li><a href="#" title="Link">Contact us here</a></li>
        </ul>
      </nav>
    </section>
  </div>
  <div id="footerbar"><!-- Small footerbar at the bottom --> copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>