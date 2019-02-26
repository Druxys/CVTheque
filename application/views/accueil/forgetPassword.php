
<div class="txt2">
    <div class="txt3">
        <div id="form-main">
            <div id="form-div">
                <div class="contacter">
                    <p>Mot de passe oublié</p>
                </div>
                <?php echo form_open('accueil/forgetPassword'); ?>  <!-- Début du formulaire de mot de passe oublié -->

                <p class="email">
                    <input name="mail" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                </p>

                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
                <?php    echo validation_errors(); ?>
                </form>                         <!-- Fin du formulaire de connexion -->
            </div>
        </div>
    </div>
</div>
