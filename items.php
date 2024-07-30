<?php

include("connection.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | ElectronicGadgets</title>
    <link rel="icon" href="image/logo.jpg">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        body {
            background-size: cover;
            background: url("image/background.jpg");
        }
    </style>
    <header>
        <nav class="navbar">
            <ul>
                <p align="left" class="head"><img src="image/logohead.jpg" alt="Image"><b> ElectronicGadgets</b>
                </p>
                <li><a href="index.html"><b>HOME</b></a></li>
                <li><a href="about.html"><b>ABOUT</b></a></li>
                <li><a href="shop.html"><b>SHOP</b></a></li>
                <li><a href="contact.html"><b>CONTACT US</b></a></li>
                <li><a href="items.php"><b>MY CART</b></a></li>
            </ul>

        </nav>
    </header>
    <h1>MY CART</h1>
    <br><br><br>
    <table border="6" width="70%" height="70%" align="center"cellSpacing="10px" cell padding="5px">
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Item Price</th>
            </tr>
            <?php
            $totalPrice = 0; // Initialize total price variable
            $totalitem = 0; // Initialize total item variable
            $sql = "SELECT * FROM itemstable";
            $qry = mysqli_query($conn, $sql);
            while ($res = mysqli_fetch_array($qry)) {
                $itemTotalPrice = $res['item_price'] * $res['quantity']; // Calculate total price for the item
                $totalitem += 1; // Calculate total price for the item
                $totalPrice += $itemTotalPrice; // Add item total price to total price
            ?>
            <tr>
                <td><?php echo $res['item_name'];?></td>
                <td><?php echo $res['quantity']; ?></td>
                <td><?php echo $res['item_price'];?></td>
            </tr>
            <?php }; ?>
            <tr>
            <td><strong>Total</strong></td>
            <td><strong><?php echo number_format($totalitem); ?></strong></td> <!-- Display total price -->
            <td><strong><?php echo number_format($totalPrice, 2); ?></strong></td> <!-- Display total price -->
            </tr>
        </table>
    
        <form action="payment.html" method="POST">
            <center><button style="width: 20%; padding: 10px; margin-top: 5px; background-color:darkslategray; font-size: 20px; font-weight: bolder; color: goldenrod;" type="submit" value="submit">Make Payment</button></center>
        </form>


        <br><br><br><br><br><br><br><br><br><br><br>
        <hr>
        <footer>
            <p align="center" class="copyright">Copyright &copy; ElectronicGadgets</p>
        </footer>
</body>
</html>
