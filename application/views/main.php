<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?=$_css_file?>

    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/design/img/favicon.ico">
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Diary PRO v0.1</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <? foreach ($top_menu as $_name => $_url) {?>
                        <li <?= $menu_item == $_name ? 'class="active"' : ''?>><a href="<?=$_url?>"><?=$_name?></a></li>
                    <?}?>
                </ul>
                <ul class="nav pull-right">
                    <li><a href="#">username</a></li>
                    <li><a href="<?=Route::url('default',array('controller' => 'auth', 'action' => 'logout'))?>">logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <?=$content?>
</div> <!-- /container -->

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?=$_js_file?>
</body>
</html>
