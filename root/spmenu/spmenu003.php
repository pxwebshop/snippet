<?php 
$pageid = "spmenu003";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu3">
		<div class="c-spmenu3__btn">
			<div class="c-icon1 c-icon1--spmenu">
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
				<span class="c-icon1__line"></span>
			</div>
		</div>
	<div class="c-spmenu3__navi">
		<nav >
			<ul>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsumDolor sit amet</a></li>
			</ul>
		</nav>
	</div>
</div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu3__navi').toggleClass('is-open');
			$('body').toggleClass('is-fixed');
		});
	});
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>