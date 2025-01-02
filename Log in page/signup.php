<?php
session_start();

include("../connection.php");
include("functions.php");
if(isset($_SESSION['email'])){
        echo '<script>alert("Log out First")</script>';
        echo '<script>window.location="../home.php"</script>';
        die("Location: ../home.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT *FROM admin WHERE Email = '$email' limit 1";
	$result = mysqli_query($con, $query);

    if($result){
        if(mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
					
			if($user_data['Email'] === $email)
			{
			    echo '<script>alert("This email is already been used!")</script>';
                echo '<script>window.location="signup.php"</script>';
                die("Location: signup.php");
			}
		}
    }


    // Validate input
    if (!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
        // Save to database
        $user_id = random_num(20);

        $query = "INSERT INTO admin (user_id, user_name, Email, Password) VALUES ('$user_id', '$user_name', '$email', '$password')";

        if (mysqli_query($con, $query)) {
            header("Location: login.php");
            exit; // Use exit instead of die for consistency
        } else {
            echo '<script>alert("Please enter valid information!")</script>';
            echo '<script>window.location="signup.php"</script>';
        }
    } else {
        echo '<script>alert("Please enter valid information!")</script>';
        echo '<script>window.location="signup.php"</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form method="post">
            <h2>Sign up</h2>
            <div class="inputbox">
                <input type="text" required="required" name="user_name">
                <span>User Name</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="email">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <input type="submit" value="Signup">
        </form>
    </div>
</body>

</html>