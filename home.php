<?php
    include './connection.php';
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Logged out successfully!")</script>';
        echo '<script>window.location="home.php"</script>';
        die("Location: home.php");
    }
?>
<style type="text/css">
<?php include 'style.css';?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Green Coffee - Home Page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="slide-detail">
                        <h1>Welcome</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis architecto dolores
                            facilis,</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>

                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider__slider slide2">
                    <div class="slide-detail">
                        <h1>Welcome to my shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis architecto dolores</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>

                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider__slider slide3">
                    <div class="slide-detail">
                        <h1>Welcome</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis architecto dolores</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>

                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider__slider slide4">
                    <div class="slide-detail">
                        <h1>Coffee shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis architecto dolores</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>

                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider__slider slide5">
                    <div class="slide-detail">
                        <h1>Coffee shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis architecto dolores</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>

                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>

        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/thumb2.jpg">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>

                <div class="box">
                    <img src="img/thumb0.jpg">
                    <h3>lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>

                <div class="box">
                    <img src="img/thumb1.jpg">
                    <h3>green coffee</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>

                <div class="box">
                    <img src="img/thumb.jpg">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit amet</p>

                </div>
            </div>
        </section>
        <!--Home slide end-->

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg">
                </div>
                <div class="box">
                    <img src="img/download.png">
                    <span>healthy tea</span>
                    <h1>save upto 50% off</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                </div>
            </div>
        </section>

        <section class="shop">
            <div class="title">
                <img src="img/download.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.jpg">
                <div class="row-detail">
                    <img src="img/basil.jpg">
                    <div class="top-footer">
                        <h1>A cup of green tea makes you healty</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card0.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card1.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/card2.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/10.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/6.webp">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </section>

        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/6.jpg">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/7.jpg">
                    <div class="detail">
                        <span>new in the taste</span>
                        <h1>Coffee house</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>

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

        <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'alert.php'; ?>
</body>

</html>