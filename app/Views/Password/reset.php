<?= $this->extends('layout/user') ?>

<?= $this->section('title') ?>Password reset<?= $this->endSection() ?>

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
                <a href="<?= site_url("/") ?>"><img src="/assets/images/logo.svg" alt="logo icon" style="width:30px;"></a>
		 	</div>
            <div class="card-title text-uppercase text-center py-3">Password Reset</div>
                <?= form_open("/password/processreset/$token") ?>
                
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
                 
                
                <button class="btn btn-light btn-block waves-effect waves-light">Reset Password</button>
                
                </form>
            </div>
            </div>
            
        </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->


    <h1>Password Reset</h1>

    <?php if(session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>

    <?= form_open("/password/processreset/$token") ?>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Repeate Password</label>
            <input type="password" name="password_confirmation">
        </div>

        <button>Reset Password</button>
    </form>

<?= $this->endSection() ?>