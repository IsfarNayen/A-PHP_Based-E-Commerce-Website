<?php
    include './connection.php';
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Logged out successfully!")</script>';
        echo '<script>window.location="contact.php"</script>';
        die("Location: contact.php");
    }

    if(isset($_SESSION['email'])){
        
    }
    else{
        echo '<script>alert("Log in First")</script>';
        echo '<script>window.location="./Log in page/login.php"</script>';
        die("Location: ./Log in page/login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];


        if($email == $_SESSION['email']){
            $query = "INSERT INTO message (name, email, number, message) VALUES ('$user_name', '$email', '$number', '$message')";

            if(mysqli_query($con, $query)){
                echo '<script>alert("Message has been sent succesfully!")</script>';
        		echo '<script>window.location="contact.php"</script>';
            }
        }
        else{
            echo '<script>alert("Wrong email!")</script>';
        	echo '<script>window.location="contact.php"</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Green Coffee - Contact</title>
</head>

<body>
    <?php include 'header.php'?>
    <div class="main">
        <div class="banner">
            <h1>contact us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ contact us</span>
        </div>

        <section class="services">
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png">
                    <div class="detail">
                        <h3>great saving</h3>
                        <p>save big every order</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/icon1.png">
                    <div class="detail">
                        <h3>24/7 support</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/icon0.png">
                    <div class="detail">
                        <h3>gift vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div>
                </div>

                <div class="box">
                    <img src="img/icon.png">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                        <p>dropship worldwide</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="inputbox">
                <input type="text" required="required" name="user_name">
                <span>Username</span>
                <i></i>
            </div> -->

        <div class="form-container">
            <form method="POST">
                <div class="title">
                    <img src="img/download.png" class="logo">
                    <h1>leave a message</h1>
                </div>

                <div class="input-field">
                    <p>your name</p>
                    <input type="text" name="user_name">
                </div>

                <div class="input-field">
                    <p>your email</p>
                    <input type="text" name="email">
                </div>

                <div class="input-field">
                    <p>your number</p>
                    <input type="text" name="number">
                </div>

                <div class="input-field">
                    <p>your message</p>
                    <textarea type="text" name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
            <div class="address">
                <div class="title">
                    <h1>contact details</h1>
                </div>
                <div class="box-container">
                    <div class="box">
                        <div>
                            <h4>address</h4>
                            <p>68, O.R Nizam road, GEC circle</p>
                        </div>
                    </div>

                    <div class="box">
                        <div>
                            <h4>phone number</h4>
                            <p>017********</p>
                        </div>
                    </div>

                    <div class="box">
                        <div>
                            <h4>email</h4>
                            <p>u1908023@student.cuet.ac.bd</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'alert.php'; ?>
</body>

</html>