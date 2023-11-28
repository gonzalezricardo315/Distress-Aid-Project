<?php
    // $search = $_POST['findme'];
    //$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM
    $homeContent = file_get_contents('home.html');

    $searchTerm = isset($_POST['findMe']) ? $_POST['findMe'] : '';

    //IF WORD FOUND IN HOME PAGE
    if (stripos($homeContent, $searchTerm) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
        echo '<a href="home.html">Home Page</a><br>';
        echo 'Search term found in Home Page!';
    } else {
        echo 'Search term not found.';
    }
?>