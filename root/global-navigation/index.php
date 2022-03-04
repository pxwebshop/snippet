<?php
$pageid = "page-navigation";
$scss = "dev/scss/3_project/_global-navigation.scss";
$myPath = __FILE__;
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<?php ////////////////////////////////////////////////
// c-title
////////////////////////////////////////////////////// ?>
<div class="c-gl-box c-gl-box--wide" data-name="c-globalnavi1">
    <div class="c-globalnavi1">
        <ul class="c-globalnavi1__list1">
            <li><a href="#"><span>重要なお知らせ</span></a></li>
            <li><a href="#"><span>店舗検索</span></a></li>
            <li><a href="#"><span>話題の新商品</span></a></li>
            <li>
                <a href="#"><span class="arrown">採用情報</span></a>
                <div class="l-wrapper">
                    <div class="l-container">
                        <ul class="c-globalnavi1__list2">
                            <li>
                                <a href="https://www.daiso-sangyo.co.jp/recruit">
                                    <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img1.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img1.jpg" alt="新卒採用情報"></div>
                                    <div class="txt"><p><span>新卒採用情報</span></p></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://daiso-baito.com/" target="_blank">
                                    <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img2.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img2.jpg" alt="スタッフ募集"></div>
                                    <div class="txt"><p><span>スタッフ募集</span></p></div>
                                </a>
                            </li>
                            <li class="-disabled">
                                <div class="textwrap">
                                    <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img3.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_recruit_img3.jpg" alt="キャリア(中途)採用"></div>
                                     <div class="txt"><p><span>キャリア(中途)採用</span></p></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="#"><span class="arrown">企業情報</span></a>
                <div class="l-wrapper">
                    <div class="l-container">
                        <ul class="c-globalnavi1__list2">
                            <li>
                                <a href="https://www.daiso-sangyo.co.jp/company/msg_philos/">
                                <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/vendor/top/img/gnav_corpolate_nav5_img.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/vendor/top/img/gnav_corpolate_nav5_img.jpg" alt="トップからのメッセージ" style="visibility: visible;"></div>
                                <div class="txt"><p><span>トップからのメッセージ</span></p></div>
                                </a>
                            </li>
                            <li><a href="https://www.daiso-sangyo.co.jp/company/prof_hist/">
                            <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_corpolate_nav2_img.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_corpolate_nav2_img.jpg" alt="会社概要" style="visibility: visible;"></div>
                            <div class="txt"><p><span>会社概要</span></p></div>
                            </a></li>
                            <li><a href="https://www.daiso-sangyo.co.jp/company/bm_prods_fc/">
                            <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_corpolate_nav3_img.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_corpolate_nav3_img.jpg" alt="" style="visibility: visible;"></div>
                            <div class="txt"><p><span>ビジネスモデル・店舗物件募集</span></p></div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="#"><span class="arrown">お問い合わせ</span></a>
                <div class="l-wrapper">
                    <div class="l-container">
                        <ul class="c-globalnavi1__list2">
                            <li><a href="https://faq.daiso-sangyo.co.jp/?site_domain=customersupport" target="_blank">
                            <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_contact_nav2_img.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_contact_nav2_img.jpg" alt="FAQ" style="visibility: visible;"></div>
                            <div class="txt"><p><span>よくある質問</span></p></div>
                            </a></li>
                            <li><a href="https://www.daiso-sangyo.co.jp/kouhou">
                            <div class="img"><img class="js-header_imgchange onlyPc" src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_contact_nav1_img.jpg" data-src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/images/common/header/header_contact_nav1_img.jpg" alt="広報に関するお問い合わせ" style="visibility: visible;"></div>
                            <div class="txt"><p><span>メディアの方はこちら</span></p></div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="#"><span>WEB注文</span></a></li>
            <li><a href="#"><span>重要なお知らせ</span></a></li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".c-globalnavi1__list1 li").hover(function () {
                $(".c-globalnavi1__list1").addClass("c-globalnavi1__active");
                $(".c-globalnavi1__list1 a span").css({'color': '#fff'});
                $(this).find("span").addClass("active");
                $(this).find(".l-wrapper").slideDown();
            }, function () {
                $(".c-globalnavi1__list1").removeClass("c-globalnavi1__active");
                $(this).find(".c-globalnavi1__list2").removeClass('isOpen');
                $(".c-globalnavi1__list1 a span").css({'color': '#f2157f'});
                $(this).find("span").removeClass("active");
                $(this).find(".l-wrapper").hide();
            }
        );
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>