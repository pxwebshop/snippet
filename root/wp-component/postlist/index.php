<?php
$pageid = "c-wp-postlist";
$scss = "dev/scss/3_project/_c-wp-postlist.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/wp/wp-load.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>



<?php ////////////////////////////////////////////////
// c-wp-postlist4
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-wp-postlist4">

	<div class="c-wp-postlist4">
		<?php
		$the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 5
		));
		if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_4();}}
		else{echo '<div class="c-noentry">投稿はありません</div>';}
		?>
	</div>

</div>


<?php ////////////////////////////////////////////////
// c-wp-postlist1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-wp-postlist1">

	<div class="c-wp-postlist1">
		<?php
		$the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 5
		));
		if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_1();}}
		else{echo '<div class="c-noentry">投稿はありません</div>';}
		?>
	</div>

</div>


<?php ////////////////////////////////////////////////
// c-wp-postlist2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-wp-postlist2">

	<div class="c-wp-postlist2">
		<?php
		$the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 5
		));
		if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_2();}}
		else{echo '<div class="c-noentry">投稿はありません</div>';}
		?>
	</div>

</div>


<?php ////////////////////////////////////////////////
// c-wp-postlist3
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-wp-postlist3">

	<div class="c-wp-postlist3">
		<?php
		$the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 5
		));
		if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_3();}}
		else{echo '<div class="c-noentry">投稿はありません</div>';}
		?>
	</div>

</div>




<?php ////////////////////////////////////////////////
// c-wp-postlist5
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-wp-postlist5">

	標準の投稿の「カテゴリ」を表示<br><br>

	<?php
	$the_query = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 1
	));
	if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_5();}}
	?>

	<br>
	<br>
	<br>

	カスタム投稿投稿の「カスタムタクソノミ―」を表示<br><br>

	<?php
	$the_query = new WP_Query(array(
		'post_type' => 'blog',
		'posts_per_page' => 1
	));
	if($the_query->have_posts()){while($the_query->have_posts()){$the_query->the_post();loop_5();}}
	?>

</div>







<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>