<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MY SHOW</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
</head>

<body>
    <div class="full-page">
        <div class="navbar">
            <a href="homepage.php"><img src="myshow.jpg" style="height:45px"></a>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='homepage.php'>HOME</a></li>
                    <li><a href='about.php'>ABOUT US</a></li>
                    <li><a href='help.php'>HELP</a></li>
                    <li><a href='loginpage.php'>LOGIN / REGISTER</a></li>
                </ul>
            </nav>
        </div>
        <div class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="config.php" method="post">
                    <input type='text' class='input-field' placeholder=' Enter Email Id' required name="email">
                    <input type='password' class='input-field' placeholder=' Enter Password' required name="pwd">
                    <input type='checkbox' class='check-box'><span style="bottom:65px;">Remember Password</span>
                    <button type='submit' class='submit-btn' name="login">Login</a></button>
                </form>
                <form id='register' class='input-group-register' action="config.php" method="post">
                    <input type='text' class='input-field' placeholder=' Enter First Name' required name="fname">
                    <input type='text' class='input-field' placeholder=' Enter Last Name ' required name="lname">
                    <input type='email' class='input-field' placeholder=' Enter Email Id' required name="email">
                    <input type='password' class='input-field' placeholder=' Enter Password' required name="pwd">
                    <input type='password' class='input-field' placeholder=' Confirm Password' required name="cpwd">
                    <input type='checkbox' class='check-box'><span style="bottom:68px;">I agree to the terms and
                        conditions</span>
                    <button type='submit' class='submit-btn'>Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>