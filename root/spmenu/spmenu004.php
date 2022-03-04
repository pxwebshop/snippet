<?php 
$pageid = "spmenu004";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-spmenu4">
	<div class="c-icon1">
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
	</div>
	<div class="c-spmenu4__navi">
		<nav >
			<ul>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Dolor sit amet</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
				<li><a href="" title="">Lorem ipsum</a></li>
			</ul>
		</nav>
		<div class="c-spmenu4__overlay"></div>
	</div>
</div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu4__navi').toggleClass('is-open');
			if($(this).hasClass('is-open')){
				$('.c-spmenu4__navi').show(slow);
			}
			else{
				$('.c-spmenu4__navi').hidden(slow);
			}
		});
	});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>