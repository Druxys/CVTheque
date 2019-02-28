    <!-------------------------------------------Début de la boîte acceuil--------------------------------------------->

    <div class="home">  <!-- background-image: url('../assets/img/img1.jpg'); -->
        <div class="shadow">
            <div class="txt">
                <p>Bienvenue sur le site de Michel Dupont Company !</p>
                <p>Vous pouvez nous partagez votre CV avec ou sans moyen de connexion.</p> </br>
                <a href="#">AVEC CONNEXION</a>
                <a href="#">SANS CONNEXION</a>
            </div>
        </div>
    </div>
    <!-------------------------------------------Fin de la boîte acceuil----------------------------------------------->

    <!-------------------------------------------Début de la boîte contact--------------------------------------------->

    <div class="home2"> <!-- background-image: url('../assets/img/img2.jpg'); -->
        <div class="txt3">
            <div id="form-main">
                <div id="form-div">
                    <div class="contacter">
                        <p>Nous contacter</p>
                    </div>
                    <form class="form" id="form1">  <!-- Début du formulaire de contact -->

                        <p class="name">
                            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                        </p>

                        <p class="email">
                            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                        </p>

                        <p class="text">
                            <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
                        </p>


                        <div class="submit">
                            <input type="submit" value="SEND" id="button-blue"/>
                            <div class="ease"></div>
                        </div>
                    </form>                         <!-- Fin du formulaire de contact -->
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------Fin de la boîte contact--------------------------------------------->
