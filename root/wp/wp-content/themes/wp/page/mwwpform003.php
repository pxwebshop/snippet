<?php
$pageid = "wp-mwwpform";
$wphead = "on";
$wpfooter = "on";
$scss = "dev/scss/3_project/_wp-mwwpform.scss";
$myPath = __FILE__;
?>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<article class="p-mwwpform003">
    <?php if(have_posts()):while(have_posts()):the_post(); 
?>
    <?php the_content(); ?> 
    <?php endwhile; endif; ?>
</article>
<script src="/assets/js/jquery-1.12.4.min.min.js"></script>
<script src="/assets/js/jquery.validationEngine.min.js"></script>
<script src="/assets/js/jquery.validationEngine-ja.min.js"></script>
<script>
$(document).ready(function() {
    var input_required = $("input[name=names], input[name=company-name], input[name=tel], input[name=email]");
    input_required.addClass("validate[required]");
    $(".mw_wp_form").validationEngine("attach", {
      promptPosition: "inline",
      custom_error_messages: {
        "#c-name": {
          required: {
            message: "※情報を入力してください"
          }
        },
        "#c-company": {
          required: {
            message: "※情報を入力してください"
          }
        },
        "#c-tel": {
          required: {
            message: "※情報を入力してください"
          }
        },
        "#c-email": {
          required: {
            message: "※情報を入力してください"
          },
        }
      }
    });
    $("form .required").blur(function() {
        _this = $(this);
        var hl = _this.val().length;
        // var class_length = $(this).parent(".c-form__content").find(".formError").length;
        if (hl > 0) {
        if (_this.parents(".c-form__colright").hasClass("error")) {
            _this.parents(".c-form__colright").removeClass("error");
        }
        } else {
        _this.parents(".c-form__colright").addClass("error");
        }
    });
    $(".c-form-btn").on("click", function() {
        $(".required").each(function() {
            var input_le = $(this).val().length;
            if (input_le == 0) {
                $(this)
                .parents(".c-form__colright")
                .addClass("error");
            }
        });
    });
});
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>