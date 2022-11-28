<?= $this->extend('layouts/user') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section("content") ?>

    
<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<a href="<?= site_url("/") ?>"><img src="/assets/images/logo.svg" alt="logo icon" style="width:30px;"></a>
		 	</div>
            <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <?= form_open("/login/create") ?>
                    <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Email</label>
                    <div class="position-relative has-icon-right">
                        <input type="text"  class="form-control input-shadow" placeholder="Enter Email" name="email" id="email" value="<?= old('email') ?>">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password"  class="form-control input-shadow" placeholder="Enter Password" name="password">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-6">
                    <div class="icheck-material-white">
                        <input type="checkbox" id="remember_me" name="remember_me" <?php if(old('remember_me')): ?> checked <?php endif; ?>>
                        <label for="user-checkbox">Remember me</label>
                    </div>
                    </div>
                    <div class="form-group col-6 text-right">
                    <a href="<?= site_url("/password/forgot") ?>" >Forgot Password</a>
                    </div>
                    </div>
                    <button class="btn btn-light btn-block">Sign In</button>
                    <!-- <div class="text-center mt-3">Sign In With</div>
                    
                    <div class="form-row mt-4">
                    <div class="form-group mb-0 col-6">
                    <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                    </div>
                    <div class="form-group mb-0 col-6 text-right">
                    <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                    </div>
                    </div> -->
                
                </form>
            </div>
            </div>
            <div class="card-footer text-center py-3">
                <p class="text-warning mb-0">Do not have an account? <a href="<?= site_url("/signup") ?>"> Sign Up here</a></p>
            </div>
            </div>
        
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        
        
	
	</div><!--wrapper-->

    <!-- <h1>Login</h1>

    <?= form_open("/login/create") ?>
        
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="remember_me">
                <input type="checkbox" id="remember_me" name="remember_me" <?php if(old('remember_me')): ?> checked <?php endif; ?>> remember me
            </label>
        </div>

        <button>Log in</button>
        <a href="<?= site_url("/password/forgot") ?>">Forgot password?</a>
    </form> -->

<?= $this->endSection(); ?>