<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
// A simple Bootstrap theme for GetSimple CMS by Michael Thiesen
// Version: 0.2
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
		<meta name="robots" content="index, follow" />
		
		<!-- Header -->
		<?php get_header(); ?>

		<!-- Styles -->
		<link href="<?php get_theme_url(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<!-- Navigation bar -->
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
				<ul class="nav">
					<?php get_navigation(return_page_slug()); ?>
				</ul>
			</div>
		</div>

		<!-- Content and sidebar -->
		<div class="container-fluid">
			<div class="row-fluid">
				<!-- Content -->
				<div class="span8">
					<h1><?php get_page_title(); ?></h1>
					<hr>
					<?php get_page_content(); ?>
				</div>

				<!-- Sidebar -->
				<div class="span4">
					<?php get_component('sidebar');	?>
					<br>
					<p class="muted credit">
						Bootstrap Theme by <a href="http://www.ugrad.cs.ubc.ca/~k5r8/">Michael</a>
						<br>
						<?php get_site_credits(); ?>
					</p>
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