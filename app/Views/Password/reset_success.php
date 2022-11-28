<?= $this->extend('layouts/user') ?>

<?= $this->section('title') ?>Password Reset<?= $this->endSection() ?>

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
            <div class="card-title  text-center py-3">Password reset successfull.</div>
         </div>
        </div>
    </div>

</div>


<?= $this->endSection() ?>