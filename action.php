<?php
if(isset($_POST['fname1']) && isset( $_POST['lname1']) && isset( $_POST['email1']) && isset( $_POST['phone1']) && isset( $_POST['address1']) && isset( $_POST['zip1']) && isset( $_POST['country1']) && isset( $_POST['password1']) && isset( $_POST['conpassword1']))
{
    $conn = new mysqli("localhost", "root", "17726100S@n", "abc");
    $sql = "INSERT INTO user (firstname,lastname,email,phone,address,zipcode,country,password,confirmpassword) VALUES('" .
    $_POST["fname1"] . "','" . $_POST["lname1"] . "', '" . $_POST["email1"] . "', '" . $_POST["phone1"] . "', '" . $_POST["address1"] . "', '" . $_POST["zip1"] . "', '" . $_POST["country1"] . "', '" . $_POST["password1"] . "', '" . $_POST["conpassword1"] . "')";
    $conn->query($sql);
    $conn->close();
}
?>