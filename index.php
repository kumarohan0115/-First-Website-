<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srank system</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            overflow-x: hidden;
            background-image: url('boy.jpg');
            background-size: cover;
        }
        a{
            color: white;
            font-size: 20px;
        }
        a:hover{
            background-color: black;
        }

        .logo a{
            color: white;
            font-size: 30px;
        }

        .main {
            height: 100vh;
            width: 100%;
            display: flex;
        }

        .text{
            width: 50%;
            height: 50vh;
            background-color: rgba(0, 0, 0, 0.5);
            margin-top: 100px;
        }

        .text p{
            font-size: 6em;
            font-weight: 700;
            text-transform: uppercase;
            color: white;
            text-align: center;
            margin: auto;
            margin-top: 10%;
        }

        .img img{
            margin-top: 10%;
            padding: 100px;
        }

        


        .foot{
            color: black; 
            background-color: darkgray; 
            display:flex;
            justify-content: space-evenly;
        }


        .foot .email input{
            padding: 11px;
            border: none;
            border: 2px solid black;
        }

        .name p{
            font-size: 80px;
        }
        

        @media only screen and (max-width: 360px) {
        
            .nav-item li{
                width: 100%;
            }
        }
        @media only screen and (max-width: 415px) {
        
            .nav-item li{
                width: 100%;
            }
        }
        @media only screen and (max-width: 596px) {
        
        .nav-item li{
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse sticky-top" style="width: 100vw">

        <div class="navbar navbar-brand logo" style="float:left">
            <a href="#">Srank Portal</a>
        </div>
        <div class="nav">
            <ul class="nav nav-item">
                <li class="active"><a href="index.php">HOME</a></li>
                <li class=""><a href="">OFFICIAL WEBSITE</a></li>
                <li class=""><a href="ABOUTUS.HTML">ABOUT US</a></li>
                <li class=""><a href="contact.html">CONTACT US</a></li>
            </ul>
        </div>
        <div class="navbar navbar-brand nav-item-2" style="float:right">
            <ul class="nav navbar navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>


    <div class="main">
    
            <div class="text">
                <p>Srank</p>
                <p>Attendance System</p>
            </div>
        <div class="img">
            <img src="pc.svg" style="right: margin 10%;" alt="">
        </div>
            
        
    </div>
    <footer class="foot">
        <div class="col-sm-4">
            <ul id="about" style="list-style: none;">
                <h5>About</h5>
                <li>Home</li>
                <li>Contact Us</li>
                <li>Feedback</li>
                <li>Help</li>
            </ul>
        </div>
        <div class="col-sm-4">
        <ul style="list-style: none;">
                <h5>Social</h5>
                <li>Instagram</li>
                <li>Twitter</li>
                <li>Facebook</li>
            </ul>
        </div>
        <div class="email col-sm-4" style="align-self:center;">
            <input type="email" name="Email" placeholder="Contact-Us">
            <button type="submit" class="btn btn-lg btn-primary">send</button>
        </div>
    </footer>
</body>

</html>