
    <div class="txt2">
        <div class="txt3">
        <div id="form-main">
            <div id="form-div">
                <div class="contacter">
                    <p>Connexion</p>
                </div>
                <p>
                    <a href="" class="btn btn-block btn-linkedin"> <i class="fab fa-linkedin"></i>Connexion via LinkedIn</a>
                </p>
                <?php echo form_open('accueil/signIn'); ?>  <!-- Début du formulaire de connexion -->

                    <p class="email">
                        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                    </p>

                    <p class="password">
                        <input name="password" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Mot de passe" id="name" value="<?php echo set_value('password'); ?>" />
                    </p>

                    <div class="submit">
                        <input type="submit" value="ENVOYER" id="button-blue"/>
                        <div class="ease"></div>
                    </div>
                    <?php    echo validation_errors(); ?>
<!--                <p class="text-center">Have an account? <a href="">Log In</a> </p>-->
                    <p class="text-center">Mot de passe oublié? <a href="forgetPassword">Ici</a> </p>
                    <?php    echo validation_errors(); ?>
                    <p class="text-center">Pas de compte? <a href="signUp">Inscrivez-vous</a> </p>
                </form>                         <!-- Fin du formulaire de connexion -->
            </div>
        </div>
        </div>
    </div>
