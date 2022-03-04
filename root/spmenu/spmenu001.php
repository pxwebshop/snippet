<?php 
$pageid = "spmenu001";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu1">
	<div class="c-spmenu1__btn">
		<div class="c-icon1">
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
		</div>
	</div>
	<div class="c-spmenu1__navi">
		<nav>
			<ul>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample-end</a></li>
			</ul>
		</nav>
	</div>
</div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu1__navi').toggleClass('is-active');
			$('body').toggleClass('is-fixed');
		});
	});
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
