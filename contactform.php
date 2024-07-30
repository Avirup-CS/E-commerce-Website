<?php

include("connection.php");


$name = $_POST['name'];
$emailid = $_POST['emailid'];
$mobileno = $_POST['mobileno'];
$country = $_POST['country'];
$suggestion = $_POST['suggestion'];


$sql = "INSERT INTO contact (FullName, EmailID, MobileNo, Country, Query) VALUES ('$name','$emailid','$mobileno','$country','$suggestion')";


if ($conn->query($sql) === TRUE) {
    echo '<script>
             alert("Data submitted successfully");
             window.location.href = "contact.html";
        </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>