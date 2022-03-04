<?php 
$pageid = "spmenu005";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu5">
	<div class="c-spmenu5__btn">
		<div class="c-icon1 c-icon1--spmenu">
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
			<span class="c-icon1__line"></span>
		</div>
	</div>
	<div class="c-spmenu5__navi">
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
			</ul>
		</nav>
	</div>
</div>
<div class="page-spmenu005__block"></div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu5__navi').toggleClass('is-open');
			if($(this).hasClass('is-active')){
				$('html,body').css('overflow-y', 'hidden');
			}else{
				$('html').css('overflow-y', 'scroll');
				$('body').css('overflow-y', 'auto');
			}
		});
	});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>