<?php
    include './connection.php';
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Logged out successfully!")</script>';
        echo '<script>window.location="about.php"</script>';
        die("Location: about.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Green Coffee - About</title>
</head>

<body>
    <?php include 'header.php'?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ about us</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/about.png">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/1.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/1.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
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
        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="img/3.png">
                </div>

                <div class="detail">
                    <h1>Visit out beautiful showroom!</h1>
                    <p>Our showroom is an expression of what we love doing; being creative with floral and plant
                        arrangements. Wheather you are looking for a florist for your perfect wedding, or just want to
                        uplift any room with someone of a kind living decor, Blossom with love can help</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>

        <div class="testimonial-container">
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>what people say about us</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, accusantium recusandae. Nostrum
                    ullam adipisci qui consequuntur reprehenderit et magni! Cupiditate perspiciatis
                </p>
            </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="img/01.jpg">
                    <h1>sara smith</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere aspernatur illo, magni quod
                        nam magnam reiciendis aperiam dolorum ut vitae nostrum. Saepe impedit ex, eos incidunt
                        corrupti aut eaque fugit?</p>
                </div>

                <div class="testimonial-item active">
                    <img src="img/02.jpg">
                    <h1>John smith</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere aspernatur illo, magni quod
                        nam magnam reiciendis aperiam dolorum ut vitae nostrum. Saepe impedit ex, eos incidunt
                        corrupti aut eaque fugit?</p>
                </div>

                <div class="testimonial-item active">
                    <img src="img/03.jpg">
                    <h1>Lorem smith</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere aspernatur illo, magni quod
                        nam magnam reiciendis aperiam dolorum ut vitae nostrum. Saepe impedit ex, eos incidunt
                        corrupti aut eaque fugit?</p>
                </div>
            </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'alert.php'; ?>
</body>

</html>