<?php
    session_start();
    include './connection.php';

    if(isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Logged out successfully!")</script>';
        echo '<script>window.location="view_products.php"</script>';
        die("Location: view_products.php");
    }



    if (isset($_POST["add"])){
        if(isset($_SESSION['email'])){
        
        }
        else{
            echo '<script>alert("Log in First")</script>';
            echo '<script>window.location="./Log in page/login.php"</script>';
            die("Location: ./Log in page/login.php");
        }

        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="view_products.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="view_products.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="view_products.php"</script>';
                }
            }
        }
    }

    if (isset($_GET["action"])){
        if($_GET["action"] == "delete1"){
            unset($_SESSION["cart"]);
            echo '<script>alert("Product has been placed succesfully!")</script>';
            echo '<script>window.location="view_products.php"</script>';
        }
    }
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Green Coffee - Products</title>

</head>

<body>
    <?php include 'header.php'?>

    <div class="main">

        <div class="banner">
            <h1>Products & Cart</h1>
        </div>

        <div class="title2">
            <a href="home.php">home</a><span>/ products</span>
        </div>
        <div class="about-category">
            <?php
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
        ?>

            <form method="post" action="view_products.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="box-container">
                    <div class="container">
                        <div class="box">
                            <img src="<?php echo $row["image"]; ?>">
                            <h5 class="text-info"><?php echo $row["name"]; ?></h5>
                            <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <button type="submit" name="add" class="btn">Add to cart</button>
                        </div>
                    </div>
                </div>
            </form>

            <?php
                }
            }
        ?>
        </div>
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="title2">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value["item_name"]; ?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td>$ <?php echo $value["product_price"]; ?></td>
                    <td>
                        $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                    <td><a href="view_products.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                class="text-danger">Remove Item</span></a></td>
                </tr>
                <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <th align="right">$ <?php echo number_format($total, 2); ?></th>
                    <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <button class="btn" action="delete1"><a
                    href="view_products.php?action=delete1&id=<?php $value["product_id"]; ?>">Buy now</a>
            </button>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'alert.php'; ?>
</body>

</html>