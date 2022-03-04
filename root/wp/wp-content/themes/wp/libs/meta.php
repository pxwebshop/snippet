<?php if(is_home()){ ?>
<title><?php bloginfo('name'); ?></title>

<?php }else{ ?>
<title><?php echo trim(wp_title('', false)); ?><?php if(!is_home()){ ?> | <?php } ?><?php bloginfo('name'); ?></title>

<?php } ?>

<meta name="description" content="">
<meta name="keywords" content="">

<?php
/*

<?php

$title = "";
$description = "";
$keyword = "";

?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keyword; ?>">

*/ ?>