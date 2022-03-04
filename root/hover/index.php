<?php
$pageid = "hover";
$scss = "dev/scss/3_project/_hover.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<section class="l-gl-box-wrap">
	<!-- Hover 1 -->
	<div class="c-gl-box" data-name="c-hover1">
		<div class="c-hover1">
			<img src="/assets/img/common/slide2.jpg" alt="">
		</div>
	</div>
	<!-- Hover 2 -->
	<div class="c-gl-box" data-name="c-hover2">
		<div class="c-hover2">
			<img src="/assets/img/common/slide1.jpg" alt="">
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- Hover 3 -->
	<div class="c-gl-box" data-name="c-hover3">
		<div class="c-hover3">
			<div class="c-hover3__btn">
				<a href=""><span>Read More</span></a>
			</div>
		</div>
	</div>
	<!-- Hover 4 -->
	<div class="c-gl-box" data-name="c-hover4">
		<div class="c-hover4">
			<div class="c-hover4__btn">
				<a href=""><span>Read More</span></a>
			</div>
		</div>
	</div>
	<!-- Hover 5 -->
	<div class="c-gl-box" data-name="c-hover5">
		<div class="c-hover5">
			<div class="c-hover5__btn">
				<a href=""><span>Read More</span></a>
			</div>
		</div>
	</div>
	<!-- Hover 6 -->
	<div class="c-gl-box" data-name="c-hover6">
		<div class="c-hover6">
			<div class="c-hover6__btn">
				<a href=""><span>Read More</span></a>
			</div>
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- Hover 7 -->
	<div class="c-gl-box" data-name="c-hover7">
		<div class="c-hover7">
			<div class="c-hover7__img"><img src="/assets/img/common/slide5.jpg" alt=""></div>
			<div class="c-hover7__ttl">Hover</div>
		</div>
	</div>
	<!-- Hover 8 -->
	<div class="c-gl-box" data-name="c-hover8">
		<div class="c-hover8">
			<div class="c-hover8__img"><img src="/assets/img/common/slide4.jpg" alt=""></div>
			<div class="c-hover8__ttl">Hover</div>
		</div>
	</div>
	<!-- Hover 9 -->
	<div class="c-gl-box" data-name="c-hover9">
		<div class="c-hover9">
			<div class="c-hover9__img"><img src="/assets/img/common/slide6.jpg" alt=""></div>
			<div class="c-hover9__ttl">Hover</div>
		</div>
	</div>
	<!-- Hover 10 -->
	<div class="c-gl-box" data-name="c-hover10">
		<div class="c-hover10">
			<div class="c-hover10__img"><img src="/assets/img/common/slide1.jpg" alt=""></div>
			<div class="c-hover10__ttl">Hover</div>
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- Hover 11 -->
	<div class="c-gl-box" data-name="c-hover11">
        <div class="c-hover11">
            <a href="">SWIPE</a>
        </div>
    </div>
	<!-- Hover 12 -->
	<div class="c-gl-box" data-name="c-hover12">
        <div class="c-hover12">
            <a href=""><span></span>POSITION AWARE</a>
        </div>
    </div>
    <script>
        $(function() {  
            $('.c-hover12 a')
                .on('mouseenter', function(e) {
                        var Offset = $(this).offset(),
                        posX = e.pageX - Offset.left,
                        posY = e.pageY - Offset.top;
                        $(this).find('span').css({top:posY, left:posX})
                })
                .on('mouseout', function(e) {
                        var Offset = $(this).offset(),
                        posX = e.pageX - Offset.left,
                        posY = e.pageY - Offset.top;
                    $(this).find('span').css({top:posY, left:posX})
                });
        });
    </script>
	<!-- Hover 13 -->
	<div class="c-gl-box" data-name="c-hover13">
        <div class="c-hover13">
            <a href="">SMOOSH</a>
        </div>
    </div>
	<!-- Hover 14 -->
	<div class="c-gl-box" data-name="c-hover14">
        <div class="c-hover14">
            <a href="">CENTER -> OUT</a>
        </div>
    </div>
	<!-- Hover 15 -->
	<div class="c-gl-box" data-name="c-hover15">
        <div class="c-hover15">
            <a href="">LEFT -> RIGHT -> LEFT</a>
        </div>
    </div>
	<!-- Hover 16 -->
	<div class="c-gl-box" data-name="c-hover16">
        <div class="c-hover16">
            <a href="">LEFT -> RIGHT -> RIGHT</a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 17 -->
	<div class="c-gl-box" data-name="c-hover17">
        <div class="c-hover17">
            <a href="">BORDER(INNER SHADOW)</a>
        </div>
    </div>
    <!-- Hover 18 -->
	<div class="c-gl-box" data-name="c-hover18">
        <div class="c-hover18">
            <a href="">BORDER(OUTER SHADOW)</a>
        </div>
    </div>
    <!-- Hover 19 -->
	<div class="c-gl-box" data-name="c-hover19">
        <div class="c-hover19">
            <a href="">Link Hover Effect 1</a>
        </div>
    </div>
    <!-- Hover 20 -->
	<div class="c-gl-box" data-name="c-hover20">
        <div class="c-hover20">
            <a href="">Link Hover Effect 2</a>
        </div>
    </div>
    <!-- Hover 21 -->
	<div class="c-gl-box" data-name="c-hover21">
        <div class="c-hover21">
            <a href="">
                <span>Link Hover Effect 3</span>
            </a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 22 -->
	<div class="c-gl-box" data-name="c-hover22">
        <div class="c-hover22">
            <a href=""><span>Hover Me<span></a>
        </div>
    </div>
    <!-- Hover 23 -->
	<div class="c-gl-box" data-name="c-hover23">
        <div class="c-hover23">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
    <!-- Hover 24 -->
	<div class="c-gl-box" data-name="c-hover24">
        <div class="c-hover24">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
    <!-- Hover 25 -->
	<div class="c-gl-box" data-name="c-hover25">
        <div class="c-hover25">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
    <!-- Hover 26 -->
	<div class="c-gl-box" data-name="c-hover26">
        <div class="c-hover26">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 27 -->
	<div class="c-gl-box" data-name="c-hover27">
        <div class="c-hover27">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
    <!-- Hover 28 -->
	<div class="c-gl-box" data-name="c-hover28">
        <div class="c-hover28">
            <a href=""><span>Hover Me</span></a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 29 -->
    <div class="c-gl-box" data-name="c-hover29">
        <div class="c-hover29">
            <span class="c-hover29__txt">偽のデータ 偽のデータ 偽のデータ<br>偽のデータ 偽のデータ 偽のデータ 偽のデータ 偽のデータ</span>
        </div>
    </div>
    <!-- Hover 30 -->
    <div class="c-gl-box" data-name="c-hover30">
        <a class="c-hover30">
            <span>偽のデータ</span><i></i>
        </a>
    </div>
    <!-- Hover 31 -->
    <div class="c-gl-box" data-name="c-hover31">
        <a class="c-hover31">
            <span>Readmore</span><i></i>
        </a>
    </div>

    <!-- Hover 32 -->
    <div class="c-gl-box" data-name="c-hover32">
        <div class="c-hover32">
            <span class="default"><img src="https://www.asairyo.com/wp2017/wp-content/uploads/Inkedasai109_LI-540x270.jpg" alt=""></span>
            <span class="hover"><img src="https://www.asairyo.com/wp2017/wp-content/uploads/asai083-540x270.jpg" alt=""></span>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 33 -->
    <div class="c-gl-box" data-name="c-hover33">
        <div class="c-hover33">
            <a href="#" class="c-hover33__cont"><span>Readmore<i></i></span></a>
        </div>
    </div>
    <!-- Hover 34 -->
    <div class="c-gl-box" data-name="c-hover34">
        <div class="c-hover34">
            <img src="/assets/img/common/slide2.jpg" alt="">
        </div>
    </div>
    <!-- Hover 35 -->
    <div class="c-gl-box" data-name="c-hover35">
        <div class="c-hover35">
            <img src="/assets/img/common/slide2.jpg" alt="">
        </div>
    </div>
    <!-- Hover 36 -->
    <div class="c-gl-box" data-name="c-hover36">
        <div class="c-hover36">
            <img src="/assets/img/common/slide2.jpg" alt="">
        </div>
    </div>
</section>

<section class="l-gl-box-wrap">
    <!-- Hover 37 -->
    <div class="c-gl-box" data-name="c-hover37">
        <div class="c-hover37">
            <a href="">Read More</a>
        </div>
    </div>
    <!-- Hover 38 -->
    <div class="c-gl-box" data-name="c-hover38">
        <div class="c-hover38">
            <img src="/assets/img/common/slide2.jpg" alt="">
        </div>
    </div>
    <!-- Hover 39 -->
    <div class="c-gl-box" data-name="c-hover39">
        <div class="c-hover39">
            <img src="/assets/img/common/slide2.jpg" alt="">
            <div class="c-hover39__icon"></div>
        </div>
    </div>
    <!-- Hover 40 -->
    <div class="c-gl-box" data-name="c-hover40">
        <div class="c-hover40">
            <a href="">ニュース一覧</a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 41 -->
    <div class="c-gl-box" data-name="c-hover41">
        <div class="c-hover41">
            <a href="#" class="c-hover41__cont">
                <span class="c-hover41__date">2019.06.12</span>
                <span class="c-hover41__label">NEWS</span>
                <span class="c-hover41__txt">「バラいろダンディ」に出演しました</span>
            </a>
            <a href="#" class="c-hover41__cont">
                <span class="c-hover41__date">2019.06.12</span>
                <span class="c-hover41__label">NEWS</span>
                <span class="c-hover41__txt">「バラいろダンディ」に出演しました</span>
            </a>
        </div>
    </div>
    <!-- Hover 42 -->
    <div class="c-gl-box" data-name="c-hover42">
        <div class="c-hover42">
            <a href="">
                <img src="/assets/img/common/st-icon01.png" alt="">
                <p>兵庫県高砂市・加古川市に特化した<br>地域密着型の塗装店</p>
            </a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 43 -->
    <div class="c-gl-box" data-name="c-hover43">
        <div class="c-hover43">
            <a href="#" class="c-hover43__cont">
                <p class="c-hover43__date">2019.06.21</p>
                <p class="c-hover43__txt">
                    東京MXテレビ「北野誠、DAISのこれから…」にサカモトが紹介されます！
                    <span class="c-hover43__icon"></span>
                </p>
            </a>
        </div>
    </div>
    <!-- Hover 44 -->
    <div class="c-gl-box" data-name="c-hover44">
        <div class="c-hover44" id="myDiv">
            <a href="#" class="c-hover44__cont">ビジョンを知る</a>
        </div>
        <script>
            $(function() {
              $(".c-hover44__cont").on('mousemove', function(e) {
                var div = document.getElementById("myDiv");
                var bounds = div.getBoundingClientRect();
                var x = bounds.left;
                var y = bounds.top;
                var posX = e.pageX;
                var posY = e.pageY;
                var w = this.clientWidth;
                var h = this.clientHeight;
                var tx = ((posX - x) / w - 0.5) * 1;
                var ty = ((posY - y) / h - 0.5) * 1;
                var dx = tx * 180 * Math.PI / 360;
                var dy = ty * 180 * Math.PI / 360;
                TweenMax.to($(this), 0.2, {
                    x: dx * 8 + "px",
                    y: dy * 8 + "px"
                });
            }).mouseout(function(e) {
                TweenMax.to($(this), 0.6, {
                  x: "0px",
                  y: "0px",
                  ease: Elastic.easeOut.config(1.1, 0.6)
              });
            });
        });
</script>
    </div>

     <!-- Hover 45 -->
    <div class="c-gl-box" data-name="c-hover45">
        <div class="c-hover45">
            <a data-tilt href="#" class="c-hover45__cont" style=""><span>アイテムを<br>探す</span></a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 46 -->
    <div class="c-gl-box" data-name="c-hover46">
        <div class="c-hover46">
            <p class="c-hover46__txt1">Case Study</p>
            <h4 class="c-hover46__ttl">Fredensborg Municipality</h4>
            <p class="c-hover46__txt2">Creating a flow-based work culture to improve dialogues on complex business cases.</p>
        </div>
    </div>
    <!-- Hover 47 -->
    <div class="c-gl-box" data-name="c-hover47">
        <div class="c-hover47">
            <div class="c-hover47__cont"></div>
        </div>
    </div>
    <!-- Hover 48 -->
    <div class="c-gl-box" data-name="c-hover48">
        <div class="c-hover48">
            <a href="#" class="c-hover48__cont">
                <img src="/assets/img/common/slide2.jpg" alt="">
            </a>
        </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 49 -->
    <div class="c-gl-box" data-name="c-hover49">
        <div class="c-hover49">
            <a href="#"><span>MORE<i></i></span></a>
        </div>
    </div>
    <!-- Hover 50 -->
    <div class="c-gl-box" data-name="c-hover50">
        <div class="c-hover50">
            <a href="#">
               <img src="/assets/img/common/slide2.jpg" alt="">
           </a>
       </div>
    </div>
    <!-- Hover 51 -->
    <div class="c-gl-box" data-name="c-hover51">
        <div class="c-hover51">
            <a href="#">VIEW ALL</a>
       </div>
    </div>
    <!-- Hover 52 -->
    <div class="c-gl-box" data-name="c-hover52">
        <div class="c-hover52">
            <a href="#"><span></span></a>
       </div>
    </div>
</section>
<section class="l-gl-box-wrap">
    <!-- Hover 53 -->
    <div class="c-gl-box" data-name="c-hover53">
        <div class="c-hover53">
            <div class="c-hover53__wrap">
                <div class="c-hover53__cont1"><img src="/assets/img/common/slide2.jpg" alt=""></div>
                <div class="c-hover53__cont2"><img src="/assets/img/common/slide1.jpg" alt=""></div>
            </div>
       </div>
       <script>
         $('.c-hover53')
         .on( "mouseenter", function() {
            $('.c-hover53__cont1').addClass('off1');
            $('.c-hover53__cont1').removeClass('on1');
            $('.c-hover53__cont2').addClass('on2');
            $('.c-hover53__cont2').removeClass('off2');
             
        })
         .on( "mouseleave", function() {
            $('.c-hover53__cont1').removeClass('off1');
            $('.c-hover53__cont1').addClass('on1');
            $('.c-hover53__cont2').removeClass('on2');
            $('.c-hover53__cont2').addClass('off2');
            
        }); 
       </script>
    </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
