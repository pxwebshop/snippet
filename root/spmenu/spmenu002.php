<?php 
$pageid = "spmenu002";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu2">
	<div class="c-spmenu2__top">
		<div class="c-spmenu2__btn">
			<div class="c-icon1 c-icon1--spmenu">
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
			</div>
		</div>
	</div>
	<nav class="c-spmenu2__navi">
		<ul>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Dolor sit amet</a></li>
			<li><a href="" title="">Lorem ipsumhahah</a></li>
		</ul>
	</nav>
</div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('body').toggleClass('is-fixed');
			$('.c-spmenu2__navi').stop().slideToggle(300);
		});
	});
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>