<?php 
$pageid = "pagetop2";
$scss = "dev/scss/3_project/_pagetop.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div style="height:2000px;position: relative;">

    <nav class="c-pagetop6" id="pagetop6">
        <a href="">PAGETOP</a>
    </nav>


</div>

<script>
$(function($) {
    var topBtn = $('.c-pagetop6 a');
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