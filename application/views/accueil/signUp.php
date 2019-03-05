
    <div class="txt4">
        <div id="form-main">
            <div id="form-div">
                <div class="contacter">
                    <p>Inscription</p>
                </div>
                <?php echo form_open('accueil/signUp'); ?>  <!-- Début du formulaire d'inscription -->

                <p class="email">
                    <input name="mail" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                </p>

                <p class="password">
                    <input name="password" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Mot de passe" id="name" value="<?php echo set_value('password'); ?>" />
                </p>

                <p class="password">
                    <input name="passconf" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Mot de passe à nouveau" id="name" value="" />
                </p>

                <div class="submit">
                    <input type="submit" value="ENVOYER" id="button-blue"/>
                    <div class="ease"></div>
                </div>
                <?php    echo validation_errors(); ?>
                </form>                         <!-- Fin du formulaire d'inscription -->
            </div>
        </div>
    </div>
