
<div class="txt2">
    <div class="txt3">
        <div id="form-main">
            <div id="form-div">
                <div class="contacter">
                    <p>Mot de passe oublié</p>
                </div>
                <?php echo form_open('accueil/forgetPassword'); ?>  <!-- Début du formulaire de mot de passe oublié -->

                <p class="email">
                    <!--                    <input name="mail" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="--><?php //echo set_value('email'); ?><!--" />-->
                    <?= form_input('password1', '', 'class="feedback-input" id="password" placeholder="Password"'); ?>
                </p>
                <?= form_error('password1'); ?>

                <p class="email">
                    <!--                    <input name="mail" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="--><?php //echo set_value('email'); ?><!--" />-->
                    <?= form_input('password2', '', 'class="feedback-input" id="password" placeholder="Répéter le password"'); ?>
                </p>
                <?= form_error('password2'); ?>

                <div class="submit">
                    <?= form_submit('submit', 'ENVOYER', 'id="button-blue"'); ?>
                </div>

                </form>                         <!-- Fin du formulaire de connexion -->
            </div>
        </div>
    </div>
</div>
