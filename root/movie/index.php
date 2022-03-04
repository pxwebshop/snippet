<?php
$pageid = "movie";
$scss = "dev/scss/3_project/_movie.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<article class="p-movie">

	<section class="l-gl-box-wrap">
		<div class="c-gl-box" data-name="Youtube Responsive" data-href="/movie/movie001.php">
			<img src="image/movie-001.gif" alt="" width="300">
		</div>
		<div class="c-gl-box" data-name="Background movie - Youtube" data-href="/movie/movie002.php">
			<img src="image/movie-002.gif" alt="" width="300">
		</div>
		<div class="c-gl-box" data-name="Background movie - HTML5 Video" data-href="/movie/movie003.php">
			<img src="image/movie-003.gif" alt="" width="300">
		</div>
	</section>
</article>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>