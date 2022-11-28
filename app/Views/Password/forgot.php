<?= $this->extend('layouts/user') ?>

<?= $this->section('title') ?>Forgot Password<?= $this->endSection() ?>

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
                <div class="card-title text-uppercase text-center py-3">Forgot Password</div>
                    <?= form_open("/password/processforgot") ?>
                        <div class="form-group">
                        <label for="exampleInputUsername" class="sr-only">Email</label>
                        <div class="position-relative has-icon-right">
                            <input type="text"  class="form-control input-shadow" placeholder="Enter Email" name="email" id="email" value="<?= old('email') ?>">
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                        </div>
                        
                        <button class="btn btn-light btn-block">Signd</button>
                        
                    
                    </form>
                </div>
                </div>
                
                </div>
            
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->
    

<?= $this->endSection() ?>