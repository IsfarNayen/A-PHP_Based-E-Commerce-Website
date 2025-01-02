<?php
session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    $query = "INSERT INTO products (id, name, price, image) VALUES ('$id', '$name', '$price', '$image')";
    if(mysqli_query($con,$query)){
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="box">
        <form method="post">
            <h2>Inserts</h2>
            <div class="inputbox">
                <input type="text" required="required" name="id">
                <span>id</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="name">
                <span>name</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="price">
                <span>price</span>
                <i></i>
            </div>
            <div class="image">
                <input type="text" required="required" name="image">
                <span>image</span>
                <i></i>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>