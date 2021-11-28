<!-- <?php
      // $connect=mysqli_connect("localhost","root","","shashank") or die("connection failed ");
      ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>

  <nav class="navbar navbar-inverse" style="width: 100%;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" style="color: white; font-size: 30px;" href="#">Srank Portal</a>
      </div>
      <ul class="nav navbar navbar-brand items" id="items">
        <li class="active"><a href="index.php">HOME</a></li>
        <li class=""><a href="#">OFFICIAL WEBSITE</a></li>
        <li class=""><a href="ABOUTUS.HTML">ABOUT US</a></li>
        <li class=""><a href="contact.html">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right items">
        <li><a href="signup.php" style="color: white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </nav>


  <div class="container b-r">
    <div class="area">
      <form class="form-group" action="savemachnism.php" method="POST">
        <div>
          <h2 class="heading">Login</h2>
        </div>
        <div class="uid">
          <label for="UID">User ID/Email: </label>
          <input class="form-control" type="text,email" name="uid" placeholder="Enter Email ID" required>
        </div>
        <div class="uid">
          <label for="Password">Password: </label>
          <input class="form-control" type="password" name="pass" placeholder="Password" minlength="8" maxlength="20" required>
        </div>
        <div class="links">
          <label for="Forget password"><a href="">Forget Password</a></label>
          <label for="Forget userid"><a href=""> | Forget User-Id</a></label>
        </div>
        <div class="links">
          <label for="Registration"><a href="signup.php">Click Here for Registeration</a></label>
        </div>

        <div class="btnn">
          <button class="btn-primary btn-lg" type="submit" name="submit">Login</button>
        </div>
    </form>
    </div>
  </div>
</body>

</html>

<!-- <?php
      // mysqli_close($connect);
      ?> -->