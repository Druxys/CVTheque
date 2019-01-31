<!--        <article class="card-body mx-auto" style="max-width: 400px;">-->
<!--            <h4 class="card-title mt-3 text-center">Connexion</h4>-->
<!--            <p class="text-center">Connectez-vous avec votre compte.</p>-->
<!--            <p>-->
<!--                <a href="" class="btn btn-block btn-linkedin"> <i class="fab fa-linkedin"></i> . Login via LinkedIn</a>-->
<!--            </p>-->
<!--            <p class="divider-text">-->
<!--                <span class="bg-light">OR</span>-->
<!--            </p>-->
<!--            --><?php //echo form_open('accueil/signIn'); ?>
<!--            <div class="form-group input-group">-->
<!--                <div class="input-group-prepend">-->
<!--                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>-->
<!--                </div>-->
<!--                <input type="email" class="form-control" placeholder="Email address" name="mail" value="--><?php //echo set_value('email'); ?><!--" size="50" />-->
<!--            </div> <!-- form-group// -->
<!--            <div class="form-group input-group">-->
<!--                <div class="input-group-prepend">-->
<!--                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>-->
<!--                </div>-->
<!--                <input class="form-control" placeholder="Create password" type="password" name="password" value="--><?php //echo set_value('password'); ?><!--" size="50" />-->
<!--            </div> <!-- form-group// -->
<!--            <div class="form-group">-->
<!--                <input type="submit" class="btn btn-primary btn-block" value="Create Account" />-->
<!--            </div> <!-- form-group// -->
<!--            --><?php //   echo validation_errors(); ?>
<!--            <p class="text-center">Have an account? <a href="">Log In</a> </p>-->
<!--            </form>-->
<!--        </article>-->


<div class="txt2">
    <div id="form-main">
        <div id="form-div">
            <div class="contacter">
                <p>Connexion</p>
            </div>
            <p>
                <a href="" class="btn btn-block btn-linkedin"> <i class="fab fa-linkedin"></i> . Login via LinkedIn</a>
            </p>
            <?php echo form_open('accueil/signIn'); ?>  <!-- Début du formulaire de contact -->

                <p class="email">
                    <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                </p>

                <p class="password">
                    <input name="password" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Password" id="name" value="<?php echo set_value('password'); ?>" />

                </p>

                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>

                <input class="form-control" placeholder="Create password" type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

            </div> <!-- form-group// -->
            <p class="text-center">Mot de passe oublié? <a href="forgetPassword">Ici</a> </p>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Connecter" />
            </div> <!-- form-group// -->
            <?php    echo validation_errors(); ?>
            <p class="text-center">Pas de compte? <a href="signUp">Inscrivez-vous</a> </p>
            </form>
    </div>
</div>