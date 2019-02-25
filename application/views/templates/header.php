<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Michel Dupont">
    <meta name="keyword" content="Michel Dupont, CV">
    <meta name="author" content="Michel Dupont">
    <meta name="robots" content="all|(no)follow|(no)index|none">


    <link rel="stylesheet" href="../../../assets/css/linearicons.css">
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../../assets/css/nice-select.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="../../../assets/css/signUp.css">
    <!---------------------------------------------Css page d'acceuil-------------------------------------------------->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <!----------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------Css template Paul--------------------------------------------------->
<!--    <link rel="stylesheet" href="../../../assets/css/linearicons.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/nice-select.css">-->
<!--    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/main.css">-->
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">-->
<!--    <link rel="stylesheet" href="../../../assets/css/signUp.css">-->
    <!----------------------------------------------------------------------------------------------------------------->
</head>

<body>
    <!---------------------------------------------Début de la navbar-------------------------------------------------->
    <nav class="nav">
        <div class="container">

            <div class="logo">              <!-- Logo -->
                <a href="../../CVTheque">COMPANY</a>
            </div>

            <div id="mainListDiv" class="main_list">

            <?php if(($this->session->userdata('logged_in') != 1 )) {
                echo  '<ul class="navlinks">
                    <li><a href="signUp">Inscription</a></li>
                    <li><a href="signIn">Connexion</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="#form1">Nous contacter</a></li>
                </ul>'; }
                else {
               echo ' 
                    <li><a href="signOut">Deconnexion</a></li>
                    <li><a href="frmResume">Modife CV</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="#form1">Nous contacter</a></li>
                </ul>' ;
            } ?>


            </div>

            <span class="navTrigger">   <!-- Début slicknav -->
                    <i></i>
                    <i></i>
                    <i></i>
            </span>                     <!-- Fin slicknav -->
        </div>
    </nav>
    <!-----------------------------------------------Fin de la navbar-------------------------------------------------->

    <header class="default-header">


