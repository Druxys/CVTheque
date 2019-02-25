<div class="container">
    <hr>
<div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Créer </h4>
            <p class="text-center">Get started with your free account</p>
            <p>
                <a href="" class="btn btn-block btn-linkedin"> <i class="fab fa-linkedin"></i> . S'enregistrer via LinkedIn</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OU</span>
            </p>
            <?php echo form_open('accueil/signUp'); ?>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email address" name="mail" value="<?php echo set_value('email'); ?>" size="50" />
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input type="password"   class="form-control" placeholder="Repeat password" name="passconf" value="" size="50" />
                </div> <!-- form-group// -->
                    <div class="form-group">

                        <input type="submit" class="btn btn-primary btn-block" value="Create Account" />
                    </div> <!-- form-group// -->
                    <?php    echo validation_errors(); ?>
                <p class="text-center">Déjà un compte? <a href="signIn">Connection</a> </p>
            </form>
        </article>
    </div>
</div>


<div class="txt2">
    <div class="txt3">
        <div id="form-main">
            <div id="form-div">
                <div class="contacter">
                    <p>Inscription</p>
                </div>
<!--                <p>-->
<!--                    <a href="" class="btn btn-block btn-linkedin"> <i class="fab fa-linkedin"></i>Login via LinkedIn</a>-->
<!--                </p>-->
                <?php echo form_open('accueil/signIn'); ?>  <!-- Début du formulaire d'inscription -->

                <p class="email">
                    <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                </p>

                <p class="password">
                    <input name="password" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Create password" id="name" value="<?php echo set_value('password'); ?>" />
                </p>

                <p class="password">
                    <input name="password2" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Repeat password" id="name" value="<?php echo set_value('password'); ?>" />
                </p>

                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
                <?php    echo validation_errors(); ?>
                <!--                <p class="text-center">Have an account? <a href="">Log In</a> </p>-->
                <p class="text-center">Mot de passe oublié? <a href="forgetPassword">Ici</a> </p>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Connecter" />
                </div> <!-- form-group// -->
                <?php    echo validation_errors(); ?>
                <p class="text-center">Pas de compte? <a href="signUp">Inscrivez-vous</a> </p>
                </form>                         <!-- Fin du formulaire d'inscription -->
            </div>
        </div>
    </div>
</div>
