<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
</head>


<body>

    <nav class="navbar navbar-inverse" style="width: 100%;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: white; font-size: 30px;" href="#">Srank Portal</a>
            </div>
            <ul class="nav navbar navbar-brand">
                <li class="active"><a href="index.php">Home</a></li>
                <li class=""><a href="#">OFFICIAL WEBSITE</a></li>
                <li class=""><a href="ABOUTUS.HTML">ABOUT US</a></li>
                <li class=""><a href="contact.html">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>


    <div class="main">


        <form class="form-group" action="practise_project.php" onsubmit="myFunction()" method="POST">
            <div class="register">
                <h1>Sign Up</h1>
            </div>
            <hr>
            <!-- <div class="fog container-fluid"> -->
                <div class="inputs">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" aria-label="Name" required>
                </div>
                <div class="inputs">
                    <label for="Name">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="abc@example.com" aria-label="Email" required>
                </div>
                <div class="inputs">
                    <label for="Name">Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                    <p>Password Must be atleast 8 character.</p>
                </div>
                <div class="inputs">
                    <label for="Name">Password:</label>
                    <input type="password" class="form-control" name="Pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                    <p>Password Must be same as Above.</p>
                </div>
                <div class="inputs">
                    <label for="Name">Phone:</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" aria-label="Phone Number" required>
                </div>
                <div class="inputs">
                    <label for="Name">Subject:</label>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" aria-label="Subject" required>
                </div>
                <button type="submit" class="btn-sm btn-primary" onclick="myfunction()">Register</button>

            <!-- </div> -->
            
        </form>
    </div>

    <div class="footer">
        <p>&copy; <em id="date"></em>Attandance</p>
    </div>


    <script>
        function myFunction() {
            alert("Registration Sucessful.....!");
        }
    </script>

    <script>
     function todayDate(){
        var d = new Date();
        var n = d.getFullYear() + "  ";
        return document.getElementById("date").innerHTML = n;
      }
   </script>
</body>

</html>