<?php 
$pageid = "pagetop2";
$scss = "dev/scss/3_project/_pagetop.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div style="height:2000px;position: relative;">

    <nav class="c-pagetop5" id="pagetop5">
        <a href="#top" class="m-scrollup">
            <span>
                <svg width="1024" height="1024" viewBox="0 0 1024 1024" style="margin-left: calc(50% - 0.5em)">
                    <g transform="scale(0.03125 0.03125)">
                        <path d="M877.254 402.746l-320-320c-24.992-24.994-65.514-24.994-90.508 0l-320 320c-24.994 24.994-24.994 65.516 0 90.51 24.994 24.996 65.516 24.996 90.51 0l210.744-210.746v613.49c0 35.346 28.654 64 64 64s64-28.654 64-64v-613.49l210.746 210.746c12.496 12.496 28.876 18.744 45.254 18.744s32.758-6.248 45.254-18.746c24.994-24.994 24.994-65.514 0-90.508z"></path>
                    </g>
                </svg>
            </span>
        </a>
    </nav>


</div>

<script>
$(function($) {
    var topBtn = $('.c-pagetop5 a');
    topBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    $(topBtn).on('click', function() {
        $("html , body").animate({
            scrollTop: 0
        }, 200);
    });
});
</script>





<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>