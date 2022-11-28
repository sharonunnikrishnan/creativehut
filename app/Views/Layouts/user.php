<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title><?= $this->renderSection("title") ?></title>

    <!-- loader-->
    <link href="/admin_assets/css/pace.min.css" rel="stylesheet"/>
    <script src="/admin_assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/png" sizes="32x32"/> 
    <!-- Bootstrap core CSS-->
    <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="/admin_assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="/admin_assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="/admin_assets/css/app-style.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="bg-theme bg-theme3">

    <!-- <a href="<?= site_url("/") ?>">Home</a>

    <?php if (current_user()): ?>
        
        <p>Hello <?= esc(current_user()->name) ?></p>
        
        <a href="<?= site_url("/profile/show") ?>">Profile</a>
        
        <?php if (current_user()->is_admin): ?>
            
            <a href="<?= site_url("/admin/users") ?>">Users</a>
            
        <?php endif; ?>
        
        <a href="<?= site_url("/tasks") ?>">Tasks</a>
        
        <a href="<?= site_url("/logout") ?>">Log out</a>
        
    <?php else: ?>
        
        <a href="<?= site_url("/signup") ?>">Sign up</a>    
        
        <a href="<?= site_url("/login") ?>">Log in</a>
        
    <?php endif; ?> -->

    <?php if (session()->has('error')): ?>

        <?php foreach(session('errors') as $error): ?>
            <script> swal('<?= $error ?>','Sorry','error')</script>
        <?php endforeach; ?>
        
    <?php endif; ?>

    <?php if (session()->has('warning')): ?>
         
            <script> swal('<?= session('warning') ?>','','warning')</script>
         
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
         
            <script> swal('<?= session('info') ?>','','Success')</script>
         
    <?php endif; ?>

    

    <?= $this->renderSection("content") ?>
    
</body>
</html>

<!-- Bootstrap core JavaScript-->
<script src="/admin_assets/js/jquery.min.js"></script>
<script src="/admin_assets/js/popper.min.js"></script>
<script src="/admin_assets/js/bootstrap.min.js"></script>

<!-- sidebar-menu js -->
<script src="/admin_assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="/admin_assets/js/app-script.js"></script>





