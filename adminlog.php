<!DOCTYPE html>
<html lang="en">
<head>
  <title>OneStop Laptop Solution</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"> 
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">

  <!-- Links -->
   <div class="row">
  <ul class="navbar-nav">
   <div class="col-sm-6 col-md-3 col-lg-3">
	<li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Login</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>
	</div>
	<div class="col-sm-6 col-md-3 col-lg-3">
	<li class="nav-item">
      <a class="nav-link" href="#">Wishlist</a>
    </li>
	</div>
  </ul>
</div>
<div class="form">
 <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </div>
</nav>

<div class="jumbotron">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-4"></div>
<div class="col-sm-6 col-md-4 col-lg-4">
<h1>Welcome</h1>
<p>please log in to continue</p>

<center class="login"><form action="admin.php" method = "post" class="hf">
  <label><b>User Name</b> </label><br>
  <input type = "text" name = "usr" placeholder="User Name" required/><br/>
  <label><b>Password</b></label><br>
  <input type="password" name="pass" placeholder="Password" required/><br><br>
  <input class = "btn-success" type = "submit" name = "login" value = "LOGIN" />
</form></center>

</div>
<div class="col-sm-6 col-md-4 col-lg-4"></div>
</div>
</div>
</div>

	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>
