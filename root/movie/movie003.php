<?php 
$pageid = "movie003";
$scss = "dev/scss/3_project/_movie.scss";
$myPath = __FILE__;

$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<section class="l-gl-box-wrap">
	<!-- Responsive 4 -->
		<div class="header__movie4">
			<a href="https://www.ferrari.com/" target="_blank">Ferrari.com</a>
		</div>
		<div class="c-movie4">
			<div class="c-movie4__vid">
				<video src="/assets/video/video1.mp4" loop autoplay></video>
			</div>
			<div class="c-movie4__txt">
				<p>Welcome to Ferrari's most extreme one-off design ever</p>
			</div>
		</div>
</section>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
