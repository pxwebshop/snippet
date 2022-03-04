<?php
$pageid = "button";
$scss = "dev/scss/3_project/_button.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<!-- 作成中です -->
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button1" style="background-color: #e7e7e7;">
	 	<div class="c-button1">
	 		<a href="">text text</a>
	 	</div>
	</div>
	 <div class="c-gl-box" data-name="c-button2">
	 	<div class="c-button2">
	 		<a href="">text text text</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button3">
	 	<div class="c-button3">
	 		<a href="">text text text text</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button4" style="background-color: #383b40;">
	 	<div class="c-button4">
	 		<a class="c-button4__detail" href="">TEXT</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button5">
	 	<div class="c-button5">
	 		<a href="">Text Text</a>
	 	</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button6">
	 	<div class="c-button6">
	 		<a href="">
	 			<span class="c-button6__icon">
	 				<svg class="icon-list" width="15" height="15">
		                <!-- <use xlink:href="#icon-list"> -->
		                	<svg id="icon-list" viewBox="0 0 15 15">
							    <path d="M0,0h6v6H0V0z M9,0h6v6H9V0z M0,9h6v6H0V9z M9,9h6v6H9V9z"></path>
						    </svg>
		                <!-- </use> -->
	                </svg>
	 			</span>
	 			<span>text text text</span>
	 		</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button7">
	 	<div class="c-button7">
	 		<a href="">
	 			<div class="c-button7__title">
	 				TEXT TEXT TEXT
	 			</div>
	 			<div class="c-button7__sub">
	 				TEXT TEXT
	 			</div>
	 		</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button8" style="background-color:#f5f5f5;">
	 	<div class="c-button8">
	 		<a href="">
	 			<span>TEXT TEXT</span>
	 		</a>
	 	</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button9" style="background-color:#f5f5f5;">
	 	<div class="c-button9">
	 		<a href="">
	 			text text text text<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
	 		</a>
	 	</div>
	</div>
	<div class="c-gl-box" data-name="c-button10">
	 	<button class="c-button10">
	 		<span class="c-button10__txt">text text text text text text text</span>
	 		<span class="c-button10__before"></span>
	 		<span class="c-button10__after"></span>
	 	</button>
	</div>
	<div class="c-gl-box" data-name="c-button11">
	 	<div class="c-button11">
	 		<a href="">
	 			<span class="c-button11__bg"></span>
	 			<span class="c-button11__txt">TEXT</span>
	 		</a>
	 	</div>
	 	<script>
			$(function(){
				$('.c-button11').hover(function(){
					$(this).toggleClass('is-hover');
				});
				$('.c-button11').mouseleave(function() {
					var n =$(this);
	           	 	n.addClass("is-leave"),setTimeout(function(){
	            	n.removeClass("is-leave")}, 400)
				});
			});
		</script>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button12">
		<div class="c-button12">
			<a href="">Text Text Text Text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button13" style="background-color: #f5f5f5">
		<div class="c-button13">
			<a href="">text text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button14">
		<div class="c-button14">
			<a href="">text text text text<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></span></a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button15" style="background-color: #f5f5f5">
		<div class="c-button15">
			<a href="">
				<span class="c-button15__txt">TEXT TEXT</span>
				<span class="c-button15__icon">
					<!-- <svg aria-labelledby="homeScene3-arrowLightRight-title" role="img"><title id="homeScene3-arrowLightRight-title">READ MORE</title><desc>READ MORE</desc><use xlink:href="#arrow-light-right"><svg id="arrow-light-right" viewBox="0 0 16 14"><path d="M9.8.5H8.2l5.6 5.9H.1v1.2h13.7l-5.6 5.9h1.6L15.9 7z"></path></svg></use></svg> -->

					<svg aria-labelledby="homeScene3-arrowLightRight-title" role="img" class="icon"><title id="homeScene3-arrowLightRight-title">READ MORE</title><desc>READ MORE</desc><svg id="arrow-light-right" viewBox="0 0 16 14"><path d="M9.8.5H8.2l5.6 5.9H.1v1.2h13.7l-5.6 5.9h1.6L15.9 7z"></path></svg></svg>
				</span>
			</a>
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button16" style="background-color: #6ea2cc">
		<button class="c-button16">
			<span class="c-button16__circle">
				<span class="c-button16__icon">
					<svg aria-labelledby="homeScene1-iconPlay-title" role="img"><title id="homeScene1-iconPlay-title">play</title><desc>play</desc><svg id="icon-play" viewBox="0 0 16 20"><path d="M1 .9L15 10 1 19.1V.9z"></path></svg></svg>
				</span>
			</span>
			<span class="c-button16__text">
				TEXT TEXT
			</span>
		</button>
	</div>
	<div class="c-gl-box" data-name="c-button17">
		<div class="c-button17">
			<a href="">text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button18">
		<div class="c-button18">
			<a href="">text text text text text text text text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button19">
		<button class="c-button19">TEXT TEXT<span><img src="image/btn19_1.png" alt="" width="14" height="15" ></span></button>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button20">
		<div class="c-button20">
			<a href="#" class="button-link">
	            <div class="c-button20__text">
	                <div class="c-button20__text__front">
	                    <span>T</span>
	                    <span>E</span>
	                    <span>X</span>
	                    <span>T</span>
	                    <span>&nbsp;</span>
	                    <span>T</span>
	                    <span>E</span>
	                    <span>X</span>
	                    <span>T</span>
	                </div>
	                <div class="c-button20__text__back">
	                    <span>T</span>
	                    <span>E</span>
	                    <span>X</span>
	                    <span>T</span>
	                </div>
	            </div>
	            <div>
	                <div class="c-button20__panel">
		                <span class="c-button20__item">
		                     <span></span>
		                     <span></span>
		                     <span></span>
		                     <span></span>
		                </span>
	                </div>
	                <div class="c-button20__panel">
		                <span class="c-button20__item">
		                     <span></span>
		                     <span></span>
		                     <span></span>
		                     <span></span>
		                </span>
	                </div>
	            </div>
	        </a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button21">
		<div class="c-button21">
			<a href="">text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button22">
		<div class="c-button22">
			<a href=""><span>text</span></a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button23">
		<div class="c-button23">
			<a href=""><span>text text</span></a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button24">
		<button class="c-button24"></button>
	</div>
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button25">
		<div class="c-button25">
			<a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M288 48H136c-22.092 0-40 17.908-40 40v336c0 22.092 17.908 40 40 40h240c22.092 0 40-17.908 40-40V176L288 48zm-16 144V80l112 112H272z"/></svg>text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button26">
		<div class="c-button26">
			<a href="">text text text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button27">
		<div class="c-button27">
			<a href="">TEXT TEXT TEXT TEXT</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button28">
		<div class="c-button28">
			<a href="">TEXT</a>
		</div>
	</div>
	
</section>
<section class="l-gl-box-wrap">
	<div class="c-gl-box" data-name="c-button29">
		<div class="c-button29">
			<a href="">text text</a>
		</div>
	</div>
	<div class="c-gl-box" data-name="c-button30">
		<div class="c-button30">
			<a href="">text text<span><svg id="arrow-light-right" viewBox="0 0 16 14"><path d="M9.8.5H8.2l5.6 5.9H.1v1.2h13.7l-5.6 5.9h1.6L15.9 7z"></path></svg></span></a>
		</div>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>