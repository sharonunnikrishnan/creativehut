<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Creative Hut | Web Development | Web Designing | Digital Marketing | Photography</title>
  <!-- loader-->
  <link href="/admin_assets/css/pace.min.css" rel="stylesheet"/>
  <script src="/admin_assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="/admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="/admin_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="/admin_assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="/admin_assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="/admin_assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="/admin_assets/css/app-style.css" rel="stylesheet"/>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    var csrfName = '<?= csrf_token() ?>';
    var csrfHash = '<?= csrf_hash() ?>';  
  </script>

  <script>
    function getpage(page)
    {
      $('li').removeClass('active'); 
      $.ajax({  
						url:"<?php echo base_url() . '/pages/get_page'?>",  
						method:'POST',  
						data:{page : page, [csrfName]: csrfHash},
						success:function(data)  
						{  
              var result = JSON.parse(data);
              csrfName = result.csrfName;
              csrfHash = result.csrfHash;
              current_view = result.view;
              
              $(".display-page").empty();
							$(".display-page").append(current_view);  
              $('#'+page).addClass('active');   
						}  
			});
    }
  </script>
  
</head>

<body class="bg-theme bg-theme3">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="<?= site_url("/") ?>">
       <img src="/assets/images/logo.svg" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Creative Hut</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li onclick="getpage('dashboard')" id="dashboard" class="active">
        <div class="link">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </div>
      </li>

      <li onclick="getpage('webdesigning')" id="webdesigning">
        <div class="link">
          <i class="zmdi zmdi-devices" style="font-size:18px;color:#ffffff"></i> <span>Web Designing</span>
        </div>
      </li>

      <li onclick="getpage('photography')" id="photography">
        <div class="link">
          <i class="zmdi zmdi-camera" style="font-size:18px;color:#ffffff"></i> <span>Photography</span>
        </div>
      </li>

      


      <li class="sidebar-header"><hr></li>
      <li><a href="<?= site_url("/logout") ?>"><i class="zmdi zmdi-power-off" style="font-size:18px;color:#ffffff"></i> Logout</a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile">
            <?php if(current_user()->profile_image):  ?>
                <img  class="img-circle" src="<?= site_url("/profile/image") ?>">
            <?php else: ?>
                <img  class="img-circle" src="<?= site_url("/images/blank-profile-picture.jpg") ?>">
            <?php endif; ?>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar">

              <?php if(current_user()->profile_image):  ?>
                  <img  class="align-self-start mr-3" src="<?= site_url("/profile/image") ?>">
              <?php else: ?>
                  <img  class="align-self-start mr-3" src="<?= site_url("/images/blank-profile-picture.jpg") ?>">
              <?php endif; ?>
              
             </div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?= current_user()->name ?></h6>
            <p class="user-subtitle"><?= current_user()->email ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="<?= site_url("/logout") ?>" >Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <?= $this->renderSection("content") ?>
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2022 creativehut.online
        </div>
      </div>
    </footer>
	<!--End footer-->
	
   
  </div><!--End wrapper-->
  
  <?php if (session()->has('warning')): ?>
         
         <script> swal('<?= session('warning') ?>','','warning')</script>
      
  <?php endif; ?>

  <?php if (session()->has('info')): ?>
        
          <script> swal('<?= session('info') ?>','Thank You','success')</script>
        
  <?php endif; ?>

  <?php if (session()->has('error')): ?>
        
          <script> swal('<?= session('error','','error') ?>')</script>
        
  <?php endif; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="/admin_assets/js/jquery.min.js"></script>
  <script src="/admin_assets/js/popper.min.js"></script>
  <script src="/admin_assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="/admin_assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="/admin_assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="/admin_assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="/admin_assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="/admin_assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="/admin_assets/js/index.js"></script>

  
</body>
</html>
