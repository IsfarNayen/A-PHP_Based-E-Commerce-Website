<!doctype html>
<html>

<?php
    include './connection.php';
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Logged out successfully!")</script>';
        echo '<script>window.location="blog.php"</script>';
        die("Location: blog.php");
    }
?>
<style type="text/css">
<?php include 'style.css';
?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--title----------------------->
    <title>Blog Section</title>

    <!--stylesheet------------------>
    <link rel="stylesheet" href="style.css" />

    <!--fav-icon-------------------->
    <link rel="shortcut icon" href="images/fav-icon.svg" />

    <!--poppins------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Blog</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ blog</span>
        </div>

        <!--==Blog-section===================================-->
        <section class="shop-category">
            <!--heading---------------------------------->
            <div class="blog-heading">
                <h3>My Blog</h3>
            </div>


            <!--blog-container------------->
            <div class="blog-container">

                <!--box-1-------->
                <div class="blog-box">

                    <!--img-------->
                    <div class="blog-img">
                        <img src="White-Chocolate-Raspberry-Scones.webp" alt="Blog">
                    </div>

                    <!--text--->
                    <div class="blog-text">
                        <span>JULY 31, 2023</span>
                        <a href="#" class="blog-title">White Chocolate Raspberry Scones</a>
                        <p>Big chunks of creamy white chocolate blend harmoniously with tangy raspberries in these
                            White
                            Chocolate Raspberry Scones recipe</p>
                        <a href="#">Read More</a>
                    </div>

                </div>


                <!--box-2-------->
                <div class="blog-box">

                    <!--img-------->
                    <div class="blog-img">
                        <img src="Tea-Affogato-Recipe_edited.webp" alt="Blog">
                    </div>

                    <!--text--->
                    <div class="blog-text">
                        <span>JULY 20, 2023</span>
                        <a href="#" class="blog-title">How to Make Tea Affogato</a>
                        <p>This tea affogato recipe is a simple yet sophisticated dessert that is a twist on the
                            classic. You can use any type of tea and ice cream!</p>
                        <a href="#">Read More</a>
                    </div>



                    <!--box-3-------->
                    <div class="blog-box">

                        <!--img-------->
                        <div class="blog-img">
                            <img src="Easy-Mint-Iced-Tea-Recipe.webp" alt="Blog">
                        </div>

                        <!--text--->
                        <div class="blog-text">
                            <span>JULY 17, 2023</span>
                            <a href="#" class="blog-title">Mint Iced Tea</a>
                            <p>Fresh mint, mint simple syrup and green tea are used to make this crisp, sweet iced
                                tea.
                                Prepare just 1 glass or make a pitcher.</p>
                            <a href="#">Read More</a>
                        </div>

                    </div>

                </div>
        </section>
    <?php include 'footer.php'; ?>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'alert.php'; ?>
</body>

</html>