
<html>
<head>
    <title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('accueil/signUp'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />
<?php // form_input([$data = ''[, $value = ''[, $extra = '']]]) ?>

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />


<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>

<!--<div class="container">-->
<!--    <hr>-->
<!--<div class="card bg-light">-->
<!--        <article class="card-body mx-auto" style="max-width: 400px;">-->
<!--            <h4 class="card-title mt-3 text-center">Create Account</h4>-->
<!--            <p class="text-center">Get started with your free account</p>-->
<!--            <p>-->
<!--                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>-->
<!--                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>-->
<!--            </p>-->
<!--            <p class="divider-text">-->
<!--                <span class="bg-light">OR</span>-->
<!--            </p>-->
<!--            --><?php //echo validation_errors(); ?>
<!--            --><?php //echo form_open('form'); ?>
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>-->
<!--                    </div>-->
<!--                    <input name="" class="form-control" placeholder="Full name" type="text">-->
<!--                </div> <!-- form-group// -->-->
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>-->
<!--                    </div>-->
<!--                    <input name="" class="form-control" placeholder="Email address" type="email">-->
<!--                </div> <!-- form-group// -->-->
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>-->
<!--                    </div>-->
<!--                    <select class="custom-select" style="max-width: 120px;">-->
<!--                        <option selected="">+971</option>-->
<!--                        <option value="1">+972</option>-->
<!--                        <option value="2">+198</option>-->
<!--                        <option value="3">+701</option>-->
<!--                    </select>-->
<!--                    <input name="" class="form-control" placeholder="Phone number" type="text">-->
<!--                </div> <!-- form-group// -->-->
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>-->
<!--                    </div>-->
<!--                    <select class="form-control">-->
<!--                        <option selected=""> Select job type</option>-->
<!--                        <option>Designer</option>-->
<!--                        <option>Manager</option>-->
<!--                        <option>Accaunting</option>-->
<!--                    </select>-->
<!--                </div> <!-- form-group end.// -->-->
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>-->
<!--                    </div>-->
<!--                    <input class="form-control" placeholder="Create password" type="password">-->
<!--                </div> <!-- form-group// -->-->
<!--                <div class="form-group input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>-->
<!--                    </div>-->
<!--                    <input class="form-control" placeholder="Repeat password" type="password">-->
<!--                </div> <!-- form-group// -->-->
<!--                <div class="form-group">-->
<!--                    <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>-->
<!--                </div> <!-- form-group// -->-->
<!--                <p class="text-center">Have an account? <a href="">Log In</a> </p>-->
<!--            </form>-->
<!--        </article>-->
<!--    </div>-->
<!--</div>-->