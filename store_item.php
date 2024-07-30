<?php

include("connection.php");

// Retrieve item details from POST data
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

// Prepare SQL statement to insert data into your_items_table
$sql = "INSERT INTO itemstable (item_name, item_price) VALUES ('$item_name', '$item_price')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
             alert("Item added successfully");
             window.location.href = "shop.html";
        </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

