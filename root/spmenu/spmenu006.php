<?php 
$pageid = "spmenu006";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="page-spmenu006__btn">
	<div class="c-icon1 c-icon1--spmenu">
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
	</div>
</div>
<nav class="c-spmenu6">
    <ul>
       <li><a href="" title="">Lorem ipsum</a></li>
		<li><a href="" title="">Dolor sit amet</a></li>
		<li><a href="" title="">Lorem ipsum</a></li>
		<li><a href="" title="">Lorem ipsum</a></li>
    </ul>
</nav>
<div class="page-spmenu006__block"></div>
<div class="page-spmenu006__block2"></div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.page-spmenu006').toggleClass('open-nav');
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