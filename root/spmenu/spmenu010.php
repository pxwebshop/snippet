<?php 
$pageid = "spmenu010";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="page-spmenu010__btn">
	<div class="c-icon1 c-icon1--spmenu">
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
	</div>
</div>
<div class="c-spmenu010">
	<nav class="c-spmenu010__navi">
		<ul>
		    <li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Duis vestibulum</a></li>
			<li><a href="" title="">Donec efficitur</a></li>
			<li><a href="" title="">Nunc viverra</a></li>
		</ul>
	</nav>
</div>
<div class="page-spmenu010__page">
	<div class="page-spmenu010__content"></div>
</div>

<script>
	$(function(){
		function bodyFix() {
			scrollPosi = $(window).scrollTop();
			$('body').css({
				'position': 'fixed',
				'width': '100%',
				'z-index': '1',
				'top': '0',
			});
		}

		function bodyFixReset() {
			$('body').css({
				'position': 'relative',
				'width': 'auto',
				'top': 'auto'
			});
			$('body,html').scrollTop(scrollPosi);
		}

		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.page-spmenu010').toggleClass('open-nav');
			if ($(this).hasClass("is-active")) {
				bodyFix();
			} else {
				bodyFixReset();
			}
		});
	});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>