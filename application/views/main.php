<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Diary PRO</title>
	<meta name="description" content="">
	<meta name="author" content="Evgeny Lsh">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<?=$_css_file?>

	<!-- js files -->
	<?=$_js_file?>

	<style type="text/css">
		body {
			padding-top: 60px;
		}
	</style>

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<div class="topbar">
	<div class="fill">
		<div class="container">
			<a class="brand" href="#">Diary PRO</a>

			<ul class="nav">
				<? foreach ($top_menu as $_name => $_url) {?>
					<li <?= $menu_item == $_name ? 'class="active"' : ''?>><a href="<?=$_url?>"><?=$_name?></a></li>
				<?}?>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<?=$content?>
	<footer>
		<p>&copy; Evgeny Leshchenko 2011</p>
	</footer>

</div>
<!-- /container -->

</body>
</html>
