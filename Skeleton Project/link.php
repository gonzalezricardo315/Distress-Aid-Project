<?php 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $assistance_needed = $_POST['assistance_needed'];
    $primary_name = $_POST['primary_name'];
    $primary_number = $_POST['primary_number'];
    $secondary_name = $_POST['secondary_name'];
    $secondary_number = $_POST['secondary_number'];


    // database connection
    $conn = new mysqli('localhost','root','','application');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into apply(first_name, last_name, dob, email, phone_number, address, assistance_needed, primary_name, primary_number, secondary_name, secondary_number) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $first_name, $last_name, $dob, $email, $phone_number, $address, $assistance_needed, $primary_name, $primary_number, $secondary_name, $secondary_number);
        $stmt->execute();
        header('Location: apply.html');
        $stmt->close();
        $conn->close();
    }
?>