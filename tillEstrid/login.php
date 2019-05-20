<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BlogPost template by Adobe Dreamweaver CC</title>
<link href="assets/css/login.css" rel="stylesheet" type="text/css">
<script src = "assets/js/loginValidation.js"></script>
</head>

<body>
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <div id="logo"><!-- <img src="logoImage.png" alt="sample logo"> --><!-- Company Logo text -->Logo</div>
    <nav> <a href="register.php" title="Link">Sign up</a> <a href="login.php" title="Link">Log in</a><a href="loggedOut.php" title="Link">Log out</a> </nav>
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
	  	<h3>Login here!</h3>
		<p> Fill in your email-address and your password to login.</p>
		<form name = "inputForm" class= align action="processes/loginProcess.php" onsubmit = "return validateForm()" method = "post">
			<br><label for="email">Email-address</label>
			<br><input type="text" id="email" name="email" placeholder="ex. lisa@gmail.com">
			<br><label for="fname">Password</label>
			<br><input type="text" id="password" name="password" placeholder="ex. xtlno">
			<br><input type="submit" value="Login!">
		</form><aside id="authorInfo"> 
        <!-- The author information is contained here -->
        <h2>Author Name</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
          <li><a href="#" title="Link">Contact us here</a></li>
        </ul>
      </nav>
    </section>
    <footer> 
      <!--************************************************************************
    Footer starts here
    ****************************************************************************-->
      <article>
        <h3>Footer1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </article>
      <article>
        <h3>Footer2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </article>
    </footer>
  </div>
  <div id="footerbar"><!-- Small footerbar at the bottom --> copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>
