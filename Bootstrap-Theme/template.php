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
		<link href="<?php get_theme_url(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
	</head>

	<body id="<?php get_page_slug(); ?>">
		<!-- Navigation bar -->
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="navbar-header">
				<!-- Collapse button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<p class="navbar-brand" style="padding-bottom: 0px;"><?php get_site_name(); ?></a>
			</div>
			
			<!-- Hidden when width too small -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
				<?php get_navigation(return_page_slug()); ?>
				</ul>
			</div>
		</nav>

		<!-- Content and sidebar -->
		<div class="container">
			<div class="row">
				<!-- Content -->
				<div class="col-md-8">
					<div class="page-header">
						<h1><?php get_page_title(); ?></h1>
					</div>
					<?php get_page_content(); ?>
					<br>
				</div>

				<!-- Sidebar -->
				<div class="col-md-4">
					<div class="sidebar-nav">
						<?php get_component('sidebar');	?>
						<br>
						<p class="credit text-muted text-center">
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
