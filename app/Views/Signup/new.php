<?= $this->extend('layouts/user') ?>

<?= $this->section('title') ?>Signup<?= $this->endSection() ?>

<?= $this->section("content") ?>

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
                <a href="<?= site_url("/") ?>"><img src="assets/images/logo.svg" alt="logo icon" style="width:30px;"></a>
		 	</div>
            <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                <?= form_open("/signup/create") ?>
                <div class="form-group">
                <label for="exampleInputName" class="sr-only">Name</label>
                <div class="position-relative has-icon-right">
                    <input type="text" name="name" id="name" value="<?= old('name') ?>" class="form-control input-shadow" placeholder="Enter Your Name">
                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                <div class="position-relative has-icon-right">
                    <input type="text" name="email" id="email" value="<?= old('email') ?>" class="form-control input-shadow" placeholder="Enter Your Email ID">
                    <div class="form-control-position">
                        <i class="icon-envelope-open"></i>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                    <input type="password" name="password" class="form-control input-shadow" placeholder="Choose Password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Repeate Password</label>
                <div class="position-relative has-icon-right">
                    <input type="password" name="password_confirmation" class="form-control input-shadow" placeholder="Repeate Password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">I Agree With Terms & Conditions</label>
                </div>
                </div>
                
                <button class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
                <!-- <div class="text-center mt-3">Sign Up With</div>
                
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
                <p class="text-warning mb-0">Already have an account? <a href="<?= site_url("/login") ?>"> Sign In here</a></p>
            </div>
        </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    
<?= $this->endSection() ?>