<?php

include("connection.php");

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$mobileno = $_POST['mobileno'];
$country = $_POST['country'];
$address = $_POST['address'];
$payamount = $_POST['payamount'];
$sspayment = $_POST['sspayment'];


$sql = "INSERT INTO payment (FullName, EmailID, MobileNo, Country, ClientAddress, PayAmount, PaymentScreenshot) VALUES ('$name','$emailid','$mobileno','$country','$address','$payamount','$sspayment')";


if ($conn->query($sql) === TRUE) {
    echo '<script>
             alert("Data submitted successfully");
             window.location.href = "payment.html";
        </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>