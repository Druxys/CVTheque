    <!-------------------------------------------Début de la boîte acceuil--------------------------------------------->

    <div class="home">                                         <!-- background-image: url('../assets/img/img1.jpg'); -->
        <div class="shadow">                                                                   <!-- transition ombre -->
            <div class="cache" >
                <p>Bienvenue sur le site de Michel Dupont Company !</p>
                <p>Vous pouvez nous partagez votre CV avec moyen de connexion.</p>
<!--                <a href="#">AVEC CONNEXION</a>-->
<!--                </br> </br>-->
<!--                <a href="#">SANS CONNEXION</a>-->
            </div>
        </div>
    </div>
    <!-------------------------------------------Fin de la boîte acceuil----------------------------------------------->
    <div class="homebis">
        <div class="wrap">
    <!--    <p>Il vous suffit de poster votre CV et votre lettre de motivation</p>  -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
        </div>
    </div>
    <!-------------------------------------------Début de la boîte contact--------------------------------------------->

    <div class="home2">
        <a id="ancre"></a><!-- background-image: url('../assets/img/img2.jpg'); -->
        <div class="shadow2">
        <div class="txt3">
            <div class="form-contact">
            <div id="form-main">
                <div class="form-home2">
                <div id="form-div">
                    <div class="contacter">
                        <p>Nous contacter</p>
                    </div>
                    <?= form_open('', 'class="form" id="form1"'); ?>            <!-- Début du formulaire de contact -->

                        <p class="name">
                            <?= form_input('name', '', 'class="feedback-input" placeholder="Nom" id="name"'); ?>
                        </p>
                        <?= form_error('name'); ?>

                        <p class="email">
                            <?= form_input('email', '', 'class="feedback-input" id="email" placeholder="Email"'); ?>
                        </p>
                        <?= form_error('email'); ?>

                        <p class="text">
                            <?= form_textarea('text', '', 'class="feedback-input" id="comment" placeholder="Commentaire"'); ?>
                        </p>
                        <?= form_error('text'); ?>


                        <div class="submit">
                            <?= form_submit('submit', 'ENVOYER', 'id="button-blue"'); ?>
                            <div class="ease"></div>
                        </div>
                    <?= form_close(); ?><!-- Fin du formulaire de contact -->
                </div>
                </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <!---------------------------------------------Fin de la boîte contact--------------------------------------------->
