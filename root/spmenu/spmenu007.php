<?php 
$pageid = "spmenu007";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<div class="c-spmenu7">
	<div class="c-spmenu7__btn">
		<div class="c-icon1 c-icon1--spmenu">
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
		</div>
	</div>
	<nav class="c-spmenu7__navi">
		<div class="c-spmenu7__navcon">
			<ul>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample3</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample</a></li>
				<li><a href="" title="">SamplexSample-end</a></li>
			</ul>
		</div>
	</nav>
</div>
<div style="height: 800px;background-color: #ccc"></div>
<div style="height: 800px;background-color: #ecdcdc"></div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu7__navi').toggleClass('is-open');
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