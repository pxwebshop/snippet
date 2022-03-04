<?php
$pageid = "wp-pagenavi";
$scss = "dev/scss/3_project/_wp-pagenavi.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/wp/wp-load.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>



<article class="message is-info">
	<div class="message-body">
		<p>プラグイン「wp-pagenavi」の設定をこのようにしています。<br>「pagenavi-css.css」は「使わない」にしています。</p>
		<br>
		<?php getImg('../image/001.png'); ?>
	</div>
</article>

<?php ////////////////////////////////////////////////
// wp-pagenavi1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="wp-pagenavi1">

	<?php
	$the_query = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 1,
	    'paged' => get_query_var('paged')
	));
	if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();}}
	if(function_exists('wp_pagenavi')) {
		echo '<div class="c-wp-pagenavi1">';
		wp_pagenavi(array('query' => $the_query));
		echo '</div>';
	}
	wp_reset_postdata();


	?>




</div>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>