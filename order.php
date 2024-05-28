<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $phone = $_POST["fphone"];
    $email = $_POST["femail"];
    $groceryname = $_POST["fsub"];
    $quantity = $_POST["fquantity"];
    $address = $_POST["fmsg"];

    $sql = "INSERT INTO orderlist (name, phone, email, groceryname, quantity, address) VALUES ('$name', '$phone', '$email', '$groceryname', $quantity, '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
        // header("Location: index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href = "order.css">
    <title>Order Page</title>

</head>
<body>
    <div id="order">
        <h1 id="section">Order Grocery</h1>
        <div id="order_col">
            <form action="#" method="POST">
                <!-- <h4>Fill This Form</h4> -->
                <input type ="text" name="fname" placeholder="Name">
                <input type ="number" name="fphone" placeholder="Phone">
                <input type="email" name="femail"
                placeholder="Email">
                <input type="text" name="fsub"placeholder="Grocery Name" >
                <input type="number" name="fquantity"placeholder="Quantity" >
                <textarea rows="6" name="fmsg" placeholder="Address"></textarea>
                <button>Order</button>
            </form>
            </div>
    </div>
<!-- 
    <script type="text/javascript">
alert("Ordered successfully.");
window.location.href="index.php";
</script> -->
    
</body>
</html>