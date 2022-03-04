<?php
$pageid = "text";
$scss = "dev/scss/3_project/_text.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<section class="l-gl-box-wrap">
	<!-- Text 1 -->
	<div class="c-gl-box" data-name="c-text1">
		<div class="c-text1 is-mask">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure eius fuga quod consectetur amet? Sapiente, atque. Nostrum blanditiis tempora asperiores praesentium harum? Tempora error perspiciatis ipsam autem doloremque dolore neque asperiores optio laudantium deleniti ducimus eaque sit, enim accusamus exercitationem aliquid eum nobis corrupti. Ad, sint? Perferendis delectus veritatis numquam.</p>
        </div>
	</div>
</section>
<script>
    function isIE() {
        var ua = navigator.userAgent;
        var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
        
        return is_ie; 
    }
    if (isIE()){
        $(".c-text1").removeClass("is-mask");
    }
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
