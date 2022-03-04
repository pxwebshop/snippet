</article>
<!--/.l-gl-content-->
</main>
<!--/.l-gl-main-->

<?php ////////////////////////////////////////////////////
// Side
////////////////////////////////////////////////////////// ?>
<?php if(!isset($menuOff)){ include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/side.php'); } ?>

<?php ////////////////////////////////////////////////////
// google-code-prettify
////////////////////////////////////////////////////////// ?>
<link rel="stylesheet" href="/assets/js/google-code-prettify/prettify.css" />
<script src="/assets/js/google-code-prettify/prettify.js"></script>
<script src="/assets/js/google-code-prettify/lang-css.js"></script>
<script>
$(function() {
    prettyPrint();
});
</script>

<?php ////////////////////////////////////////////////////
// my js function
////////////////////////////////////////////////////////// ?>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.scrollify.js"></script>
<script src="/assets/js/functions.min.js"></script>
<script src="/assets/js/TweenMax.min.js"></script>

<?php ////////////////////////////////////////////////////
// wp_footer
////////////////////////////////////////////////////////// ?>
<?php if(isset($wpfooter)){ wp_footer();} ?>

</body>

</html>