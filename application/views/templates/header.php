<!DOCTYPE html>
<?php //echo current_url(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Michel Dupont">
    <meta name="keyword" content="Michel Dupont, CV">
    <meta name="author" content="Michel Dupont">
    <meta name="robots" content="all|(no)follow|(no)index|none">
    <!----------------------------------------------------------------------------------------------------------------->
    <title>Company</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
    <!---------------------------------------------Css page d'acceuil-------------------------------------------------->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <link rel = "stylesheet" type = "text/javascript" href = "<?php echo base_url(); ?>js/mesfonctions.js">
</head>

<body>
    <header id="header">
    <!---------------------------------------------Début de la navbar-------------------------------------------------->
        <nav class="nav">
        <div class="container">

            <div class="logo"></div>    <!-- Logo -->

            <div class="titre">              <!-- Titre -->
                <a href="../../CVTheque">COMPANY</a>
            </div>

            <div id="mainListDiv" class="main_list">

                <ul class="navlinks">

            <?php if(($this->session->userdata('logged_in') != 1 )) {

                if (current_url()== "http://127.0.0.1/CVTheque/"){
                    $lien = "#ancre";
                } else {
                    $lien = "accueil#ancre";
                }

                echo  '<ul class="navlinks">
                    
                    
                    <li><a href="signUp">Inscription</a></li>
                    <li><a href="signIn">Connexion</a></li>
                    <li><a href="'.$lien.'">Nous contacter</a></li>
                </ul>'; }
                else {
                    if (current_url()== "http://127.0.0.1/CVTheque/"){
                        $lien = "#ancre";
                    } else {
                        $lien = "accueil#ancre";
                    }
               echo ' 
                    <li><a href="signOut">Déconnexion</a></li>
                    <li><a href="frmResume">Mon CV</a></li>
                    <li><a href="'. $lien .'">Nous contacter</a></li>
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
    </header>

