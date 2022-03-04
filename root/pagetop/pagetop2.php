<?php 
$pageid = "pagetop2";
$scss = "dev/scss/3_project/_pagetop.scss";
$myPath = __FILE__;

//$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div style="height:2000px">

    <nav class="c-pagetop2" id="pagetop2">
       <img src="/assets/img/common/com_btn_pagetop.png" width="47" height="83" alt="page top">
    </nav>


</div>

<script>
$(function($) {
    var pagetop = $('#pagetop2')
    pagetop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 350) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    $(pagetop).on('click', function() {
        $("html , body").animate({
            scrollTop: 0
        }, 400);
    });
});
</script>





<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>