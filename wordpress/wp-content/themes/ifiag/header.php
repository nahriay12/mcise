<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="wp-content/themes/ifiag/style.css">
</head>
<body>
 <div class="container">
	  <div class="page-header">
    <h3><?php wp_nav_menu()?></h3>    
      </div>
<div class="jumbotron">
    <div class="container">
	  <h1 style="color: azure;">Ifiag</h1>
	  <p><?php bloginfo('description'); ?></p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
</div>