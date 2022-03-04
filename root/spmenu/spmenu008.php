<?php 
$pageid = "spmenu008";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<nav class="c-spmenu8">
	<div class="c-spmenu8__inner">
		<div class="c-spmenu8__btn">
			<div class="c-icon1 c-icon1--spmenu">
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
			</div>
		</div>
		<ul class="c-spmenu8__ul">
		    <li><a href="">SamplexSample</a></li>
		    <li><a href="">SamplexSample</a></li>
		    <li><a href="">SamplexSample</a></li>
		    <li><a href="">SamplexSample</a></li>
		    <li><a href="">SamplexSample</a></li>
		</ul>
	</div>
</nav>
<div style="height: 800px;background-color: #ccc"></div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu8').toggleClass('is-open');
			if ($(this).hasClass("is-active")) {
				$('html,body').css('overflow-y', 'hidden');
			} else {
				$('html').css('overflow-y', 'scroll');
				$('body').css('overflow-y', 'auto');
			}
		});
	});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>