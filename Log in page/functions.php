<?php

include '../connection.php';

function check_login($con)
{
	if(isset($_SESSION['user_name']))
	{

		$name = $_SESSION['user_name'];
		$query = "SELECT * FROM admin where user_name = '$name' limit 1";
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
