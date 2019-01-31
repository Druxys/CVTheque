<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en"> <!-- Indique la langue du site -->

<head> <!-- Tête HTML de base -->

    <meta charset="utf-8">
    <meta name="description" content="Michel Dupont">
    <meta name="keyword" content="Michel Dupont, CV">
    <meta name="author" content="Michel Dupont">
    <meta name="robots" content="all|(no)follow|(no)index|none">

    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
</head>

<body>

<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#">COMPANY</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#form1">Nous contacter</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Start Header Area -->
<header class="default-header">


