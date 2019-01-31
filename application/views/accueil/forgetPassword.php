<div class="container">
    <hr>
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Mot de pase oublié </h4>
            <?php echo form_open('accueil/forgetPassword'); ?>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="email" class="form-control" placeholder="Email address" name="mail" value="<?php echo set_value('email'); ?>" size="50" />
            </div> <!-- form-group// -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Valider" />
            </div> <!-- form-group// -->
            <?php    echo validation_errors(); ?>
            </form>
        </article>
    </div>
</div>