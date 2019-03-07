
<?php   $try = $this->Model_resume->view($_SESSION['id']);?>


<div class="txt6">
        <div id="form-main">
            <div id="form-div">
                <div class="loginSuccess">
                    <h1>Votre formulaire à bien été envoyé !</h1>
                    <a href="Resume/showResume/<?php echo $try[0]['idtemplatecvuser']; ?>/index">Voir mon CV</a>
                    <h3><a href="../../CVTheque">Retourner à la page d'accueil</a></h3>
                </div>
            </div>
        </div>
</div>
