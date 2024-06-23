<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
</head>
<body>
    <h1>Online News</h1>
    <div class=" w3l-login-form">
<?php
	if(isset($_POST['submit']))
	{
		require("../Db/Connection.class.php");
		$c = new  Connection();
		$email_id = $_POST['email_id'];
		$password = $_POST['password'];
		$query = "SELECT * FROM admin where email_id='$email_id' and password='$password'";
		if(!$c->isUnique($query))
		{
			date_default_timezone_set('Asia/Kolkata');
			$_SESSION['AdminData']['email_id']= $email_id;
			$_SESSION['AdminData']['password']= $password;
			$query="update admin set LastLoginDateTime='".date('d/m/Y H:i:s')."' where email_id='$email_id'";
			mysqli_query($c->con,$query);
			echo "<script>window.location='Content.php'</script>";
			
		}
		else
		{
			echo "<h4 style='color:red'><center>Invalid : Email or Password</center></h4>";
		}
	}
?>
        <h2>Admin - Login Here</h2>
        <form action="" method="POST">
            <div class=" w3l-form-group">
                <label>Email</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email_id" class="form-control" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="ForgotPassword.php">Forgot Password?</a>                
            </div>
            <button name="submit" type="submit">Login</button>
        </form>        
    </div>
</body>

</html>