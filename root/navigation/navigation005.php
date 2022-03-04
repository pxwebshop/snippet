<?php 
$pageid = "navigation005";
$scss = "dev/scss/3_project/_navigation.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-navi5">
		
	<nav class="c-navi5">
	    <ul>
	        <li><a href="">Home</a></li>
	     	<li class="c-navi5__toggle">
	     		<a href="">About</a>
	     		<div class="c-navi5__sub">
	     			<ul class="c-navi5__subinner">
	     			    <li><a href="">About sub 01</a></li>
	     			    <li><a href="">About sub 02</a></li>
	     			    <li><a href="">About sub 03</a></li>
	     			</ul>
	     			<ul class="c-navi5__subinner">
	     			    <li><a href="">About sub 04</a></li>
	     			    <li><a href="">About sub 05</a></li>
	     			    <li><a href="">About sub 06</a></li>
	     			</ul>
	     		</div>
	     	</li>
	     	<li><a href="#">News</a></li>
	     	<li class="c-navi5__toggle">
	     		<a href="#">Company</a>
	     		<div class="c-navi5__sub">
	     			<ul class="c-navi5__subinner">
	     			    <li><a href="">Company sub 01</a></li>
	     			    <li><a href="">Company sub 02</a></li>
	     			    <li><a href="">Company sub 03</a></li>
	     			</ul>
	     		</div>
	     	</li>
	     	<li><a href="#">Blog</a></li>
	    </ul>
	</nav>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>