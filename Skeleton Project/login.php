<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //datebase 
    $conn = new mysqli('localhost','root','','application');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("select * from registration where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo "<h2>Login Successfully</h2>";
            }
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>