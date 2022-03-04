<?php
$pageid = "wp-mwwpform";
$wphead = "on";
$wpfooter = "on";
$scss = "dev/scss/3_project/_wp-mwwpform.scss";
$myPath = __FILE__;
?>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<article class="p-mwwpform002">
    <!-- <form action="" class="c-form">
        <fieldset>
            <div class="c-form__row">
                <div class="c-form__colleft">
                    <label for="">Name</label>
                </div>
                <div class="c-form__colright">
                    <input type="text" name="names" id="" class="c-form__name">
                </div>
            </div>
            <div class="c-form__row">
                <div class="c-form__colleft">
                    <label for="">Company Name</label>
                </div>
                <div class="c-form__colright">
                    <input type="text" name="company-name" id="" class="c-form__name">  
                </div>
            </div>
            <div class="c-form__row">
                <div class="c-form__colleft">
                    <label for="">TEL</label>
                </div>
                <div class="c-form__colright">
                    <input type="number" name="tel" id="" class="c-form__name" >  
                </div>
            </div>
            <div class="c-form__row">
                <div class="c-form__colleft">
                    <label for="">Mail</label>
                </div>
                <div class="c-form__colright">
                    <input type="email" name="email-confirm" id="" class="c-form__name" required>  
                </div>
            </div>
            <div class="c-form__row">
                <div class="c-form__colleft">
                    <label for="">Comment</label>
                </div>
                <div class="c-form__colright">
                    <textarea name="" id="" class="c-form__biggest"></textarea>
                </div>
            </div>        
        </fieldset>
        <div class="c-form-btn__box">
            <button type="submit" class="c-form-btn">Confirm</button>
        </div>
    </form> -->
    <?php if(have_posts()):while(have_posts()):the_post(); 
?>
    <?php the_content(); ?> 
    <?php endwhile; endif; ?>
</article>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
