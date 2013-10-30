<!-- A simple Bootstrap theme for GetSimple CMS by Michael Thiesen -->
<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
		<meta name="robots" content="index, follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="<?php get_site_url(); ?>/favicon.ico">
		
		<!-- Header -->
		<?php get_header(); ?>

		<!-- Styles -->
		<link href="<?php get_theme_url(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php get_theme_url(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>

	<body id="<?php get_page_slug(); ?>">
		<!-- Navigation bar -->
		<div class="navbar navbar-static-top navbar-inverse">
			<div class="navbar-inner">
				<!-- Collapse button -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</a>
				
				<!-- Always shown -->
				<a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
				
				<!-- Hidden when width too small -->
				<div class="nav-collapse collapse">
					<ul class="nav">
					<?php get_navigation(return_page_slug()); ?>
					</ul>
				</div>
			</div>
		</div>

		<!-- Content and sidebar -->
		<div class="container-fluid" style="padding-top: 20px;">
			<div class="row-fluid">
				<!-- Content -->
				<div class="span8">
					<div class="page-header">
						<h1><?php get_page_title(); ?></h1>
					</div>
					<?php get_page_content(); ?>
					<br>
				</div>

				<!-- Sidebar -->
				<div class="span4">
					<div class="sidebar-nav well">
						<?php get_component('sidebar');	?>
						<br>
						<p class="muted credit text-center">
							Bootstrap Theme by <a href="http://www.ugrad.cs.ubc.ca/~k5r8/">Michael</a>
							<br>
							<?php get_site_credits(); ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php get_footer(); ?>

		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
	</body>
</html>