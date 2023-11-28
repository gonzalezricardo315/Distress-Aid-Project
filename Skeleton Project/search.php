<?php
    $homeContent = file_get_contents('home.html');
    $donationContent = file_get_contents('donations.html');
    $searchContent = file_get_contents('searchDatabase.html');
    $servicesContent = file_get_contents('Services.html');
    $externalContent = file_get_contents('external.html');
    $loginContent = file_get_contents('index.html');
    $createContent = file_get_contents('createAccount.html');
    $applyContent = file_get_contents('apply.html');
    $aboutContent = file_get_contents('aboutUs.html');




    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['q'])) {
        $sTerm = $_POST['q'];
    }


    echo $sTerm;

    if (strtolower($sTerm) === 'donation') {
        header('Location: donations.html');
    } elseif (strtolower($sTerm) === 'donations') {
        header('Location: donations.html');
    } elseif (strtolower($sTerm) === 'home') {
        header('Location: home.html');
    } elseif (strtolower($sTerm) === 'search database') {
        header('Location: searchDatabase.html');
    } elseif (strtolower($sTerm) === 'services') {
        header('Location: Services.html');
    } elseif (strtolower($sTerm) === 'external') {
        header('Location: external.html');
    } elseif (strtolower($sTerm) === 'login') {
        header('Location: index.html');
    } elseif (strtolower($sTerm) === 'create account') {
        header('Location: createAccount.html');
    } elseif (strtolower($sTerm) === 'apply') {
        header('Location: apply.html');
    } elseif (strtolower($sTerm) === 'about us') {
        header('Location: aboutUs.html');
    } else{
        header('Location: searchDatabase.html');
    }
    

   
?>