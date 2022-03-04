<?php 
$pageid = "spmenu011";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu011">
	<div class="c-icon1 c-icon1--spmenu">
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
	</div>
	<div class="c-spmenu011__block">
		<nav class="c-spmenu011__navi">
		<ul>
		    <li><a href="#" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Duis vestibulum</a></li>
			<li><a href="" title="">Donec efficitur</a></li>
			<li><a href="" title="">Nunc viverra</a></li>
			<li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Duis vestibulum</a></li>
			<li><a href="" title="">Donec efficitur</a></li>
			<li><a href="" title="">Nunc viverra</a></li>
		</ul>
	</nav>
	</div>
</div>
<div style="height: 800px;background-color: #fbebeb"></div>
<div style="height: 800px;background-color: #aaa"></div>

<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu011').toggleClass('is-open');
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