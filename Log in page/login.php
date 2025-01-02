<?php 

	session_start();
	include("../connection.php");
	include("functions.php");

	if(isset($_SESSION['email'])){
        echo '<script>alert("Log out First")</script>';
        echo '<script>window.location="../home.php"</script>';
        die("Location: ../home.php");
    }



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "SELECT *FROM admin WHERE user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if(mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['user_name'] = $user_data['user_name'];
						$_SESSION['email'] = $user_data['Email'];
						header("Location:../home.php");
						die;
					}
					echo '<script>alert("Wrong username or password")</script>';
        			echo '<script>window.location="login.php"</script>';
				}
			}
		}else
		{
			echo '<script>alert("Wrong username or password")</script>';
        	echo '<script>window.location="login.php"</script>';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form method="POST">
            <h2>Log In</h2>
            <div class="inputbox">
                <input type="text" required="required" name="user_name">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#"></a>
                <a href="signup.php">Signup</a>
            </div>
            <input type="submit" value="Log In">
        </form>
    </div>
</body>

</html>