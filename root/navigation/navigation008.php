<?php 
$pageid = "navigation008";
$scss = "dev/scss/3_project/_navigation.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-stepbar1">
	<ol class="c-stepbar1">
	    <li class="current">STEP1</li>
	    <li>STEP2</li>
	    <li>STEP3</li>
	</ol>
	<ol class="c-stepbar1">
	    <li>STEP1</li>
	    <li class="current">STEP2</li>
	    <li>STEP3</li>
	    <li>STEP4</li>
	</ol>
	<ol class="c-stepbar1">
	    <li>STEP1</li>
	    <li>STEP2</li>
	    <li>STEP3</li>
	    <li>STEP4</li>
	    <li class="current">STEP5</li>
	</ol>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>