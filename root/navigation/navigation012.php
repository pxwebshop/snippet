<?php 
$pageid = "navigation012";
$scss = "dev/scss/3_project/_navigation.scss";
$myPath = __FILE__;

// $menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-navi12">
	<nav class="c-navi12">
		<span>Chapter</span>
	    <ul>
	        <li id="section00" class=" active">Top</li>
	        <li id="section01">01</li>
	        <li id="section02">02</li>
	        <li id="section03">03</li>
	        <li id="section04">04</li>
	        <li id="section05">05</li>
	    </ul>
	</nav>
	<div class="page-navigation012">
		<section class="c-section-navi12" data-section-name="section00">
			<h2>top</h2>
		</section>
		<section class="c-section-navi12" data-section-name="section01">
			<h2>section01</h2>
		</section>
		<section class="c-section-navi12" data-section-name="section02">
			<h2>section02</h2>
		</section>
		<section class="c-section-navi12" data-section-name="section03">
			<h2>section03</h2>
		</section>
		<section class="c-section-navi12" data-section-name="section04">
			<h2>section04</h2>
		</section>
		<section class="c-section-navi12" data-section-name="section05">
			<h2>section05</h2>
		</section>
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
<script>
	$(function(){
		$.scrollify({
			section:".c-section-navi12",
			sectionName : "section-name",
			interstitialSection: "",
			easing: "easeOutExpo",
			scrollSpeed: 600,
			offset : 0,
		    setHeights: true,
		    updateHash: false,
		    touchScroll:true,
		    before:function() {
		    	var currentSection=$.scrollify.current().data('section-name');
		      	$('.c-navi12').find('li').removeClass('active');
		      	$('#' + currentSection).addClass('active');
		    },
			after:function() {}
		});
		$(".c-navi12 > ul > li").click(function(){
			 $.scrollify.move('#' + $(this).attr('id'));
		});
	});
</script>