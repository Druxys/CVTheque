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