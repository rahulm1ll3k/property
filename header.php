<?php 
session_start();
?>
<?php include "template-part/config.php"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AmarJomy </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

<!-- Header Section -->
<section class="tophead" role="tophead"> 
  <!-- Navigation Section -->
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">AmarJomy</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <?php if (isset($_SESSION["logedin"])){ ?>
            <?php if ($_SESSION["id"] === '1') { ?>
              <?php echo '<li><a href="admin.php" style="color: red;">Admin</a></li>'; ?>
            <?php } ?>
          <?php } ?>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Properties</a></li>
          <?php if (isset($_SESSION["logedin"])){echo '<li><a href="user.php">Proprietor</a></li>';} ?>
          <?php if (isset($_SESSION["logedin"])){$user = $_SESSION["id"]; echo '<li><a href="user-single.php?userid='.$user.'">User Account</a></li>';} ?>
          <?php if (isset($_SESSION["logedin"])){echo '<li><a href="insert.php">Add New</a></li>';} ?>
          <?php if (isset($_SESSION["logedin"])){echo '<li><a href="template-part/logout.php">Log Out</a></li>';} ?>
          <?php if (!isset($_SESSION["logedin"])){echo '<li><a href="login.php">Log In/Sign Up</a></li>';} ?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- Navigation Section --> 
</section>
<!-- Header Section --> 
