<?php 
$pageid = "pagetop2";
$scss = "dev/scss/3_project/_pagetop.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div style="height:2000px;position: relative;">

    <nav class="c-pagetop4" id="pagetop4">
        <svg viewBox="0 0 32 32" class="" stroke="#9B9B9B" data-v-712a9e70="" data-v-bac43252="">
            <g fill="none" data-v-712a9e70="">
                <circle cx="16" cy="16" r="15" class="st0" data-v-712a9e70="" id="Oval-3"></circle>
                <polyline points="8,16 15.9,24 24,16" class="st0" data-v-712a9e70="" id="Path-5"></polyline>
                <path d="M16,23.6V7.3" class="st0" data-v-712a9e70="" id="Path-6"></path>
            </g>
        </svg>
    </nav>


</div>

<script>
$(function($) {
    var topBtn = $('.c-pagetop4');
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