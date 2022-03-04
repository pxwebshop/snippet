<?php
$pageid = "wp-side";
$scss = "dev/scss/3_project/_wp-side.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/wp/wp-load.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// 投稿 カテゴリ
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">投稿 カテゴリ</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php wp_list_categories('hide_empty=1&title_li='); ?>
			</ul>
		</div>
	</div>

</div>


<?php ////////////////////////////////////////////////
// 投稿 カテゴリ
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">投稿 カテゴリ 投稿数あり</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					$archives = wp_list_categories('show_count=1&hide_empty=1&title_li=&echo=0');
					$archives = str_replace("</a>", "", $archives);
					echo $archives = str_replace("</li>", "</a></li>", $archives);
				?>
			</ul>
		</div>
	</div>

</div>


<?php ////////////////////////////////////////////////
// 投稿 月別
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">投稿 月別</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					wp_get_archives('type=monthly');
				?>
			</ul>
		</div>
	</div>

</div>

<?php ////////////////////////////////////////////////
// 投稿 月別
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">投稿 月別 投稿数あり</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					$archives = wp_get_archives('type=monthly&show_post_count=1&echo=0');
					$archives = str_replace("</a>", "", $archives);
					echo $archives = str_replace("</li>", "</a></li>", $archives);
				?>
			</ul>
		</div>
	</div>

</div>


</section>




<section class="l-gl-box-wrap">


<?php ////////////////////////////////////////////////
// ブログ カテゴリ
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">ブログカテゴリ</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php wp_list_categories('hide_empty=1&title_li=&taxonomy=blog_tax'); ?>
			</ul>
		</div>
	</div>

</div>

<?php ////////////////////////////////////////////////
// ブログ カテゴリ 投稿数あり
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">ブログ カテゴリ 投稿数あり</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					$archives = wp_list_categories('hide_empty=1&title_li=&show_count=1&echo=0&taxonomy=blog_tax');
					$archives = str_replace("</a>", "", $archives);
					echo $archives = str_replace("</li>", "</a></li>", $archives);
				?>
			</ul>
		</div>
	</div>

</div>

<?php ////////////////////////////////////////////////
// ブログ 月別
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">ブログ 月別</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					wp_get_archives('type=monthly&post_type=blog');
				?>
			</ul>
		</div>
	</div>

</div>

<?php ////////////////////////////////////////////////
// ブログ 月別 投稿数あり
////////////////////////////////////////////////////// ?>
<div class="c-gl-box">

	<div class="c-wp-side1">
		<div class="c-wp-side1__head">ブログ 月別 投稿数あり</div>
		<div class="c-wp-side1__body">
			<ul>
				<?php
					$archives = wp_get_archives('type=monthly&show_post_count=1&echo=0&post_type=blog');
					$archives = str_replace("</a>", "", $archives);
					echo $archives = str_replace("</li>", "</a></li>", $archives);
				?>
			</ul>
		</div>
	</div>

</div>


</section>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>