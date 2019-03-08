
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="txt4">
    <div id="form-main">
        <div id="form-div">
            <form class="success">                                          <!-- Début du formulaire registerSuccess -->
                <h1>Bravo ! Vous vous êtes correctement inscrit !</h1>
                <p>Redirection vers la page d'accueil dans <div id="countdown"></div> </p>
            </form>                                                           <!-- Fin du formulaire registerSuccess -->
        </div>
    </div>
</div>

<script>
    var timeleft = 3;
    var downloadTimer = setInterval(function(){
        document.getElementById("countdown").innerHTML = timeleft + " secondes restantes";
        timeleft -= 1;
        if(timeleft <= 0){
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = "Terminé"
        }
    }, 1000);
</script>