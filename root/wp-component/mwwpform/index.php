<?php
$pageid = "wp-mwwpform";
$scss = "dev/scss/3_project/_wp-mwwpform.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/wp/wp-load.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>


<article class="p-mwwpform">

	<ul>
		<li><a href="/wp/mwwpform001">001 - 自動住所</a></li>
		<li><a href="/wp/mwwpform002">002 - Basic form</a></li>
		<li><a href="/wp/mwwpform003">003 - jQuery Validate</a></li>

	</ul>

</article>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>