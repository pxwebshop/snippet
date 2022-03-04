<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="ja" id="pagetop">
<head>

<?php ////////////////////////////////////////////////////
// Meta
////////////////////////////////////////////////////////// ?>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<?php include('meta.php'); ?>


<?php ////////////////////////////////////////////////////
// CSS
////////////////////////////////////////////////////////// ?>
<link href="/assets/css/style.min.css" rel="stylesheet">
<link href="/assets/css/slick.css" rel="stylesheet">
<link href="/assets/css/slick-theme.css" rel="stylesheet">

<?php ////////////////////////////////////////////////////
// Font
////////////////////////////////////////////////////////// ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v1.0.0/css/unicons.css">

<?php ////////////////////////////////////////////////////
// JS base
////////////////////////////////////////////////////////// ?>
<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>
<?php ////////////////////////////////////////////////////
// wp_head
////////////////////////////////////////////////////////// ?>
<?php if(isset($wphead)){ wp_head();} ?>


</head>
<body class="page-<?php echo $pageid; ?><?php if(isset($menuOff)){ echo " is-menuOFF";} ?>">
<main class="l-gl-main">

<?php ////////////////////////////////////////////////////
// File info
////////////////////////////////////////////////////////// ?>
<?php
if(!isset($menuOff)){

	echo '<div class="l-gl-header1">';
	echo '<div class="l-gl-file">';

	if(isset($scss)||isset($myPath)){
		if(isset($scss)){
			echo '<div class="c-gl-file c-gl-file--scss">'.$scss.'</div>';
		}
		if(isset($myPath)){
			echo '<div class="c-gl-file c-gl-file--php">'.$myPath.'</div>';
		}
	}

	echo '</div>';
	echo '<a class="button is-info" href="/setup">How to setup and use [Snippet.cd]</a>';
	echo '</div>';

}

?>

<article class="l-gl-content">
