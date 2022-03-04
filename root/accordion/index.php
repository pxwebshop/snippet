<?php
$pageid = "accordion";
$scss = "dev/scss/3_project/_accordion.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-ac1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-ac1 / 基本">

	<div class="c-ac1">
		<div class="c-ac1__title is-head">Title</div>
		<div class="c-ac1__body is-body">Content</div>
		<div class="c-ac1__title is-head is-open">Title</div>
		<div class="c-ac1__body is-body">Content</div>
	</div>

</div>

<script>
	$(function(){
		$('.c-ac1 .is-head').on('click', function(){
			$(this).next('.is-body').stop().slideToggle();
		});
		$('.c-ac1 .is-open').next('.is-body').show();
	});
</script>


<?php ////////////////////////////////////////////////
// c-ac2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-ac2 / 他を閉じる">

	<div class="c-ac2">
		<div class="c-ac2__title is-head">Title</div>
		<div class="c-ac2__body is-body">Content</div>
		<div class="c-ac2__title is-head">Title</div>
		<div class="c-ac2__body is-body">Content</div>
	</div>

</div>

<script>
	$(function(){
		$('.c-ac2 .is-head').on('click', function(){
			$('.c-ac2 .is-body').slideUp();
			$(this).next('.is-body').stop().slideToggle();
		});
	});
</script>


<?php ////////////////////////////////////////////////
// c-ac2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-ac3 / 閉じるボタン">

	<div class="c-ac3">
		<div class="c-ac3__title is-head">Title</div>
		<div class="c-ac3__body is-body">
			Content
			<div class="c-ac3__btn is-close">Close</div>
		</div>
		<div class="c-ac3__title is-head">Title</div>
		<div class="c-ac3__body is-body">
			Content
			<div class="c-ac3__btn is-close">Close</div>
		</div>
	</div>

</div>

<script>
	$(function(){
		$('.c-ac3 .is-head').on('click', function(){
			$(this).next('.is-body').stop().slideToggle();
		});
		$('.c-ac3 .is-close').click(function () {
			$(this).parents('.is-body').stop().slideUp();
		});
	});
</script>

</section>
<section class="l-gl-box-wrap">


<?php ////////////////////////////////////////////////
// c-ac4
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-ac4 / アイコン">

	<div class="c-ac4">
		<div class="c-ac4__title is-head">Title</div>
		<div class="c-ac4__body is-body">Content</div>
		<div class="c-ac4__title is-head is-open">Title</div>
		<div class="c-ac4__body is-body">Content</div>
	</div>

</div>

<script>
	$(function(){
		$('.c-ac4 .is-head').on('click', function(){
			$(this).toggleClass('is-open');
			$(this).next('.is-body').stop().slideToggle();
		});
		$('.c-ac4 .is-open').next('.is-body').show();
	});
</script>


<?php ////////////////////////////////////////////////
// c-ac5
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-ac5 / 多段">

	<div class="c-ac5">
		<div class="c-ac5__title is-head">Title</div>
		<div class="c-ac5__body is-body">
			<div class="c-ac5__title is-head">Title</div>
			<div class="c-ac5__body is-body">Content</div>
		</div>
		<div class="c-ac5__title is-head is-open">Title</div>
		<div class="c-ac5__body is-body">
			<div class="c-ac5__title is-head">Title</div>
			<div class="c-ac5__body is-body">Content</div>
		</div>
		<div class="c-ac5__title is-head is-open">Title</div>
		<div class="c-ac5__body is-body">
			<div class="c-ac5__title is-head is-open">Title</div>
			<div class="c-ac5__body is-body">Content</div>
		</div>
	</div>

</div>

<script>
	// .c-ac1と全く同じ
	$(function(){
		$('.c-ac5 .is-head').on('click', function(){
			$(this).next('.is-body').stop().slideToggle();
		});
		$('.c-ac5 .is-open').next('.is-body').show();
	});
</script>


</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
