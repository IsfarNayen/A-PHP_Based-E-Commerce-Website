<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="img/logo.jpg"></a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="view_products.php">products & Order</a>
            <a href="contact.php">contact</a>
            <a href="blog.php">blog</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>Username : <span><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];} ?></span></p>
            <p>Email : <span><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></span></p>
            <a href="Log in page/login.php" class="btn">login</a>
            <a href="Log in page/signup.php" class="btn">sign up</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">log out</button>
            </form>
        </div>
    </div>
</header>