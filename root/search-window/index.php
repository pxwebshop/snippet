<?php
$pageid = "card";
$scss = "dev/scss/3_project/_card.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<section class="l-gl-box-wrap">
    <!-- search 1 -->
    <div class="c-gl-box" data-name="c-search1">
        <div id="c-search1" class="c-search1">
            <form method="get" action="/search/">
                <input type="text" name="q" class="c-search1__keyword" title="テキストテキスト" placeholder="テキストテキスト">
                <input type="image" src="/assets/img/common/btn_search.gif" alt="テキスト" value="テキスト" class="" id="seachBtn"></form>
        </div>
    </div>
    <!-- search 2 -->
    <div class="c-gl-box" data-name="c-search2">
        <div id="c-search2" class="c-search2">
            <form role="search" method="get" action="">
                <label><input type="text" class="c-search2__input" value="" name="s" placeholder="SEARCH : テキストテキスト"></label>
                <input type="submit" class="c-search2__submit" value="検索">
            </form>
        </div>
    </div>
    <!-- search 3 -->
    <div class="c-gl-box" data-name="c-search3">
        <div id="c-search3" class="c-search3">
            <form role="search" method="get" class="search-form" action="">
                <nav class="siteSearchInputArea">
                    <p class="siteSearchInput">
                        <input name="s" id="s" class="searchkeywords" value="" type="text" placeholder="検索">
                        <button type="submit" class="c-search3__btn">検索</button>
                    </p>
                </nav>
            </form>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- search 4 -->
    <div class="c-gl-box" data-name="c-search4">
        <div id="c-search4" class="c-search4">
            <form role="search" method="get" class="search-form" action="">
                <input class="c-search4__input" type="text" name="q" placeholder="店舗名や探したい商品を入力してください">
                <button class="c-search4__submit" type="submit"><span class="c-search4__submit__text">検索する</span></button>
            </form>
        </div>
    </div>
    <!-- search 5 -->
    <div class="c-gl-box" data-name="c-search5">
        <div class="c-search5" id="c-search5">
            <button class="c-search5__btn">
                <span class="icon-DDSearch"></span>
                <span class="nav-text">SEARCH</span>
            </button>
        </div>
    </div>
    <form action="" class="search5" id="search5">
        <div class="search5__close" id="search5__close" aria-label="close"></div>
        <input id="keywords" type="text" name="q" value="" placeholder="type here" class="input-text search5__input" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off" size="18" autocorrect="off" autocapitalize="off" spellcheck="false">
        <button class="search5__submit">Search</button>
    </form>
</section>
<section class="l-gl-box-wrap">
    <!-- search 6 -->
    <div class="c-gl-box" data-name="c-search6">
        <div class="c-search6">
            <div class="c-search6__inner" id="inner">
                <form class="search" action="" method="get" role="search">
                    <input class="suggest" type="text" name="q" placeholder="Search Lookout">
                    <button type="submit"><img class="searchicon" src="/assets/img/common/search-icon.svg" alt="Search"></button>
                </form>
                <a class="c-search6__close" href="#">
                    <img src="/assets/img/common/icon-close.png" alt="Close">
                </a>
            </div>
            <p id="click" class="c-search6__click">
                <img src="/assets/img/common/search-icon.svg" alt="Search">
            </p>
        </div>
    </div>
    <!-- search 7 -->
    <div class="c-gl-box" data-name="c-search7">
        <div class="c-search7">
            <form role="search" method="get" class="search-field" action="">
                <input type="search" class="c-search7__keyword" placeholder="検索" value="" name="s">
                <input type="submit" class="c-search7__submit" value="検索">
            </form>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- search 8 -->
    <div class="c-gl-box" data-name="c-search8" style="background: #9e9e9e14;">
        <div class="c-search8">
            <form class="c-search8__form" action="" method="get">
                <input type="text" name="search" value="">
                <button type="submit"></button>
            </form>
        </div>
    </div>
    <!-- search 9 -->
    <div class="c-gl-box" data-name="c-search9">
        <div class="c-search9">
            <div class="c-search9__inner">
                <svg id="search_icon" viewBox="0 0 20 20">
                    <path class="cls-1" d="M17.77,18l-4.31-5.84A6.51,6.51,0,1,0,12,13.2L16.32,19a.92.92,0,0,0,1.26.19A.91.91,0,0,0,17.77,18ZM3.67,7.4a5.18,5.18,0,1,1,5.18,5.17A5.19,5.19,0,0,1,3.67,7.4Z"></path>
                </svg>
            </div>
            <div class="c-search9__box" id="searchBox">
                <div class="c-search9__area">
                    <form class="c-search9__form" role="search" method="get" id="searchform" action="">
                        <input type="submit" class="c-search9__submit" id="c-search9__submit" value="">
                        <input type="text" class="c-search9__text" value="" name="s" id="s">
                    </form>
                    <span id="js-searchClose" class="c-search9__close"></span>
                </div>
                <div class="c-search9__popularTag">
                    <p class="c-search9__title">人気のタグ</p>
                    <ul class="c-search9__list">
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                        <li class="c-search9__node"><a href="">テキスト</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- search 10 -->
    <div class="c-gl-box" data-name="c-search10">
        <div class="c-search10">
            <form method="get" class="c-search10__form" action="">
                <input type="text" name="q" class="c-search10__input" maxlength="20" placeholder="テキスト">
                <input type="submit" alt="検索" name="" class="c-search10__submit">
            </form>
        </div>
    </div>
    <!-- search 11 -->
    <div class="c-gl-box" data-name="c-search11">
        <div class="c-search11">
            <form class="c-search11__inner" action="" method="get">
                <input class="c-search11__txt" type="text" placeholder="キーワード検索" name="search" value="">
                <button class="c-search11__btn" type="submit" alt="検索"></button>
            </form>
        </div>
    </div>
    <!-- search 12 -->
    <div class="c-gl-box" data-name="c-search12">
        <div class="c-search12">
            <div class="c-search12__inner">
                <input type="text" name="q" autocomplete="off" title="search" class="c-search12__input">
                <button type="submit" class="c-search12__button"></button>
            </div>
        </div>
    </div>
</section>


<section class="l-gl-box-wrap">
    <!-- search 13 -->
    <div class="c-gl-box" data-name="c-search13">
        <div class="c-search13">
            <div class="c-search13__inner">
                <form method="get" class="c-search12__form" action="">
                    <label>検索:</label>
                    <input type="text" name="s" placeholder="テキスト" class="c-search13__input">
                    <input type="submit" value="" class="c-search13__submit">
                </form>
            </div>
        </div>
    </div>
    <div class="c-gl-box" data-name="c-search14" style="background: #9e9e9e14;">
        <!-- search 14 -->
        <div class="c-search14">
            <form method="get" action="http://www.google.co.jp/search" target="_blank" class="c-search14__form">
                <input type="text" class="c-search14__focus" name="q" id="txt" value="Google">
                <input id="serchbtn" class="c-search14__search" type="image" src="/assets/img/common/ico_search.svg" value="SEARCH" name="btnG">
            </form>
        </div>
    </div>
    <div class="c-gl-box" data-name="c-search15">
        <!-- search 15 -->
        <div class="c-search15">
            <form method="get" action="">
                <p class="c-search15__InputBox">
                    <input type="text" id="q" name="q" autocomplete="off" class="">
                </p>
                <p class="c-search15__ButtonBox">
                    <input value="" type="submit" class="searchButton">
                </p>
            </form>
        </div>
    </div>
</section>

<section class="l-gl-box-wrap">
    <!-- search 16 -->
    <div class="c-gl-box" data-name="c-search16">
        <div class="c-search16">
            <p class="c-search16__input" maxlength="20"></p>
            <form method="get" action="" class="c-search16__form">
                <input type="text" name="q" autocomplete="off" placeholder="Search テキスト">
            </form>
        </div>
    </div>

    <!-- search 17 -->
    <div class="c-gl-box" data-name="c-search17">
        <div class="c-search17">
            <form role="search" action="" method="get" name="" class="c-search17__form">
                <button type="submit" class="c-search17__submit" data-ae-blurbtype="button" data-ae-form-field="true"><span></span></button>
                <input type="text" id="q" name="q" value="" placeholder="Search" autocomplete="off" aria-invalid="false" class="valid" data-ae-blurbtype="input" data-ae-form-field="true">
            </form>
        </div>
    </div>

    <!-- search 18 -->
    <div class="c-gl-box" data-name="c-search18">
        <div class="c-search18">
            <form accept-charset="UTF-8" method="GET" action="" name="search_form">
                <input type="text" placeholder="サイト内検索" maxlength="300" value="" name="query">
            </form>
        </div>
    </div>
</section>

<section class="l-gl-box-wrap">
    <!-- search 19 -->
    <div class="c-gl-box" data-name="c-search19">
        <div class="c-search19">
            <div class="c-search19__inner">
                <p class="c-search19__search"><img src="/assets/img/common/serch.png" alt="search"></p>
                <form method="get" action="" class=c-search19__form>
                    <label class="c-search19__txt" for="searchInput"></label>
                    <input type="text" name="s" id="searchInput" class="c-search19__input" value="" placeholder="キーワードを入力">
                    <input type="submit" id="searchsubmit" value="" class="c-search19__submit">
                </form>
            </div>
        </div>
    </div>
    <!-- search 20 -->
    <div class="c-gl-box" data-name="c-search20">
        <div class="c-search20">
            <form method="get" action="">
                <input type="text" name="q" class="" placeholder="検索">
            </form>
        </div>
    </div>
    <!-- search 21 -->
    <div class="c-gl-box" data-name="c-search21">
        <div class="c-search21">
            <form action="" method="get">
                <input type="hidden" name="mode" value="srh">
                <input type="text" name="keyword" placeholder="Search">
                <button type="submit" class=""><img src="/assets/img/common/btn-search.png" alt="SEARCH"></button>
            </form>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- search 22 -->
    <div class="c-gl-box" data-name="c-search22">
        <div class="c-search22">
            <form action="" method="get">
                <input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="検索" id="gsc-i-id1" placeholder="カスタム検索" dir="ltr" spellcheck="false">
                <button></button>
            </form>
        </div>
    </div>
    <!-- search 23 -->
    <div class="c-gl-box" data-name="c-search23">
        <div class="c-search23">
            <form action="" method="get">
                <label>
                    <input type="search" class="c-search23__field" placeholder="Search" name="s">
                </label>
            </form>
        </div>
    </div>
    <!-- search 24 -->
    <div class="c-gl-box" data-name="c-search24">
        <div class="c-search24">
            <form action="" method="get">
                <input id="searchText" name="searchWord" class="input" type="text" placeholder="カテゴリ,ブランドなどで探す" value="" autocomplete="off">
                <button></button>
            </form>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- search 25 -->
    <div class="c-gl-box" data-name="c-search25">
        <div class="c-search25">
            <form class="" method="GET" action="">
                <input class="c-search25__input" type="text" name="keyword" value="" placeholder="SEARCH">
                <button type="submit" class="c-search25__btn"></button>
            </form>
        </div>
    </div>
    <!-- search 26 -->
    <div class="c-gl-box" data-name="c-search26">
        <div class="c-search26">
            <p class="c-search26__icon"><img class="icon" src="/assets/img/common/ico-search26A.svg" alt="search"></p>
            <form role="search" method="get" action="" class="c-search26__form">
                <input type="text" placeholder="何をお探しですか？" value="" name="s" class="c-search26__txt">
                <input type="submit" class="c-search26__submit" value="検索">
            </form>
        </div>
    </div>
    <!-- search 27 -->
    <div class="c-gl-box" data-name="c-search27" style="background: #9e9e9e14;">
        <div class="c-search27">
            <form id="searchform" name="searchform" action="" accept-charset="UTF-8" method="get">
                <input type="text" name="q" id="keywords" placeholder="キーワード">
                <button name="button" type="submit" onclick="document.searchform.submit()"></button>
            </form>
        </div>
    </div>
</section>

<section class="l-gl-box-wrap">
    <!-- search 28 -->
    <div class="c-gl-box" data-name="c-search28">
        <div class="c-search28">
            <form id="c-search28__form" action="" method="get">
                <input type="text" id="" name="query">
                <input type="submit" class="" value="">
                <span class="c-search28__iconSearch">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.8 14.9" width="18" height="18" class="icon">
                        <path class="st0" d="M8.8 8.8c-2 2-5.3 2-7.3 0s-2-5.3 0-7.3 5.3-2 7.3 0 2 5.3 0 7.3zM2.5 2.6C1.1 4 1.1 6.3 2.5 7.8s3.7 1.4 5.2 0 1.4-3.7 0-5.2-3.7-1.4-5.2 0z"></path>
                        <path class="st0" d="M8.18 9.283l.99-.99 5.656 5.657-.99.99z"></path>
                    </svg>
                </span>
            </form>
        </div>
    </div>
    <!-- search 29 -->
    <div class="c-gl-box" data-name="c-search29" style="background-color: #f2157f;">
        <div class="c-search29">
            <form action="" class="c-search29__form">
                <input type="text" placeholder="地名・キーワード" name="keyword">
                <button type="submit"><span>
                        <img src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/vendor/top/img/gnav_search_icon_glass.svg" alt="検索">
                        <img src="https://www.daiso-sangyo.co.jp/wp-content/themes/daiso-co-html/vendor/top/img/gnav_search_icon_glass_w.svg" alt="">
                    </span></button>
            </form>
        </div>
    </div>
    <!-- search 30 -->
    <div class="c-gl-box" data-name="c-search30">
        <div class="c-search30">
            <form class="c-search30__form" id="" action="" method="get">
                <div class="c-search30__inner">
                    <label for="searchinput" class="c-search30__label">キーワードを入力</label>
                    <input type="text" name="q" class="c-search30__input" value="" placeholder="キーワードを入力" role="combobox" aria-expanded="false" autocomplete="off">
                    <button type="submit" class="c-search30__button" aria-label="検索する">
                        <span class="c-search30__icon" aria-hidden="true"><img src="/assets/img/common/serch.png" alt="" width="20" height="20"></span>
                        <span class="c-search30__txt">検索する</span>
                    </button>
                </div>
                <span class="c-search30__icon" aria-live="polite" role="status" data-template="results are available, use up and down arrow keys to navigate."></span>
            </form>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/2.0.5/velocity.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>