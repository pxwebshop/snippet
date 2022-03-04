<?php 
$pageid = "pagetop1";
$scss = "dev/scss/3_project/_pagetop.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div style="height:2000px">

<nav class="c-pagetop1">go to<br>top</nav>

</div>

<script>
$(function($){
	var elm = $('.c-pagetop1')
	$(window).on('load scroll', function(){
		if ($(window).scrollTop() > 300) {
			$(elm).fadeIn(400);
		} else {
			$(elm).fadeOut(400);
		}
	});
	$(elm).on('click', function() {
		$("html , body").animate({ scrollTop: 0 }, 400);
	});
});	
</script>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>