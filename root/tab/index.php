<?php
$pageid = "tab";
$scss = "dev/scss/3_project/_tab.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<section class="l-gl-box-wrap p-tab1">

	<?php ////////////////////////////////////////////////
	// c-tab1
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab1 / index()版">

		<nav class="c-tab-nav1">
			<div class="c-tab-nav1__list is-active">tab1</div>
			<div class="c-tab-nav1__list">tab2</div>
			<div class="c-tab-nav1__list">tab3</div>
		</nav>
		<div class="c-tab-content1">
			<div class="c-tab-content1__block is-active">Content 1</div>
			<div class="c-tab-content1__block">Content 2</div>
			<div class="c-tab-content1__block">Content 3</div>
		</div>

	</div>
	<script>
		$(function(){

			var $navElm = $('.c-tab-nav1__list');
			var activeClass = "is-active";

			$navElm.on('click', function() {

				var index = $navElm.index(this);
				$navElm.removeClass(activeClass);
				$(this).addClass(activeClass);

				$('.c-tab-content1__block')
				.removeClass(activeClass)
				.eq(index)
				.addClass(activeClass);

			});

		});
	</script>

	<?php ////////////////////////////////////////////////
	// c-tab2
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab2 / data版 （ナビがどこに何個あってもいい版）">

		<div data-tabindex="3" class="c-tab-nav2">tab3</div>
		<div data-tabindex="2" class="c-tab-nav2">tab2</div>
		<div data-tabindex="1" class="c-tab-nav2 is-active">tab1</div>
		<div data-tabindex="3" class="c-tab-nav2">tab3</div>

		<div class="c-tab-content2">
			<div data-tabindex="1" class="c-tab-content2__block is-active">Content 1</div>
			<div data-tabindex="2" class="c-tab-content2__block">Content 2</div>
			<div data-tabindex="3" class="c-tab-content2__block">Content 3</div>
		</div>

		<div data-tabindex="2" class="c-tab-nav2">tab2</div>

	</div>
	<script>
		$(function(){

			var $navElm = $('.c-tab-nav2');
			var activeClass = "is-active";

			$navElm.on('click', function() {

				var tabIndex = $(this).data('tabindex');

				$navElm.removeClass(activeClass);
				$(this).addClass(activeClass);

				$('.c-tab-content2__block').removeClass(activeClass)
				$(".c-tab-content2__block[data-tabindex='"+tabIndex+"']").addClass(activeClass);

			});

		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab3
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab3">

		<div class="c-tab3">
			<nav class="c-tab3__nav">
				<div class="c-tab3__item is-active">評価制度</div>
				<div class="c-tab3__item">評価制度</div>
				<a class="c-tab3__link" href="#">社員データ →</a>
			</nav>
			<div class="c-tab3__content">
				<div class="c-tab3__block is-active">
					<div class="c-tab3__inner">
						<div class="c-tab3__text">
							<ul>
								<li>クリーチャーズでは、一年に二度、一人一人の仕事の質・量・成果や、本人の将来性を確認し、その評価に応じて翌年度の給与額を決める年俸制を採用しています。</li>
							</ul>
						</div>
						<div class="c-tab3__image">
							<img src="http://placehold.jp/365x243.png" alt="">
						</div>
					</div>
				</div>
				<div class="c-tab3__block">
					<div class="c-tab3__inner">
						<div class="c-tab3__text">
							<ul>
								<li><span>オフィス：</span>新しい環境に移り、常に最適な環境で仕事が行えるようになりました。</li>
								<li><span>開発機材：</span>できるだけ希望に沿ったものを貸与します。ラップトップとデスクトップを併用したい、ディスプレイは2台欲しいなど遠慮なくご希望をお聞かせください。</li>
								<li><span>デジタルチーム：</span>1600cmのデスクを提供します。モニターを2台置いても余裕がある広さです。</li>
								<li><span>休日：</span>完全週休二日制（土日）、祝日、夏季・年末年始、有給休暇（2018年度年間休日数：128日）</li>
							</ul>
						</div>
						<div class="c-tab3__image">
							<img src="http://placehold.jp/365x243.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab3__item'),
			$blockElm = $('.c-tab3__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab4
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab4">

		<div class="c-tab4">
			<nav class="c-tab4__nav">
				<div class="c-tab4__item is-active">営業部</div>
				<div class="c-tab4__item">製造部</div>
				<div class="c-tab4__item">研究開発部門</div>
			</nav>
			<div class="c-tab4__content">
				<div class="c-tab4__block is-active">
					<div class="c-tab4__inner">
						<div class="c-tab4__image">
							<img src="http://placehold.jp/1200x250.png" alt="">
						</div>
						<div class="c-tab4__info">
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">どのようなお仕事ですか？</h4>
								<div class="c-tab4__text">
									<p>
										営業部の仕事はお客様に対して商品の提案や販売をすること。<br>
										従来商品は受注を頂くと手配をかけて出荷まで行います。<br>
										新規製品はお客様との打ち合わせを経て、なるべく要望に沿ったモノを作れるように開発・製造と連携していきます。<br>
										私達営業マンはお客様と開発・製造部との架橋役を担っているのです。
									</p>
								</div>

								<h4 class="c-tab4__title">この仕事で一番嬉しかったエピソードは？</h4>
								<div class="c-tab4__text">
									<p>
										定期訪問に伺ったとき、リグナイトの商品良かったよと満面の笑みで言われたことがあります。<br>
										そういったときにはやはりこの仕事をやっててよかったなと喜びを感じますね。<br>
										また、開発・製造部との連携が上手くいった証明にもなるのでさらにプラスで嬉しくなりモチベーションもあがります。
									</p>
								</div>
							</div>
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">この会社を選んだ理由は？</h4>
								<div class="c-tab4__text">
									<p>
										私は化学関係の企業を中心に転職活動をしている中、リグナイトで働くご縁をいただきました。しかし、営業職という仕事は全くの素人だったため、初めは不安でしかありませんでした。<br>
										ですが、実際に入社して会社や職場の雰囲気、上司や諸先輩方の丁寧な指導のお蔭で今ではその不安もすっかり取り除かれました。<br>
										また、現場への研修制度も整っていますので安心して一から学ぶことができます。<br>
										リグナイトではのびのびと仕事できる環境、雰囲気が揃っているので本当に選んで正解でした。
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="c-tab4__block">
					<div class="c-tab4__inner">
						<div class="c-tab4__image">
							<img src="http://placehold.jp/1200x250.png" alt="">
						</div>
						<div class="c-tab4__info">
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">どのようなお仕事ですか？</h4>
								<div class="c-tab4__text">
									<p>フェノール樹脂及び特殊樹脂を主体とした工業用樹脂の製造に携わっています。原料と触媒にて縮合反応により得られる、製品の生産に携わっています。反応熱等を制御するのは難しいですが、やりがいがあります。お客様により良い製品をご提供させていただくため品質にはこだわって製造しています。</p>
								</div>

								<h4 class="c-tab4__title">この仕事で一番嬉しかったエピソードは？</h4>
								<div class="c-tab4__text">
									<p>
										諸先輩方にアドバイスを頂きそれが自分の経験になりまた次の機会にその経験が生かせたこと。<br>
										スキルアップのための講習への参加、資格取得を会社全体で後押しをしてもらえるので自分自身ステップアップしていけるような環境で仕事が出来る喜びを感じています。
									</p>
								</div>
							</div>
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">この会社を選んだ理由は？</h4>
								<div class="c-tab4__text">
									<p>
										母校の先輩方が数多く勤めていて社内の雰囲気が自分に合っていると思ったからです。<br>
										実際仕事をしてみると、モノづくりにやりがいを感じ、休憩中はみんな和気藹々としていてとても働きやすい環境です。
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="c-tab4__block">
					<div class="c-tab4__inner">
						<div class="c-tab4__image">
							<img src="http://placehold.jp/1200x250.png" alt="">
						</div>
						<div class="c-tab4__info">
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">どのようなお仕事ですか？</h4>
								<div class="c-tab4__text">
									<p>
										長い歴史を持つフェノール樹脂に新しい機能を付与すべく研究を行っております。<br>
										すでに数多の研究が行われているフェノール樹脂に今までにない機能を与えることは容易ではありませんが、とてもやりごたえのある仕事だと感じています。
									</p>
								</div>

								<h4 class="c-tab4__title">この仕事で一番嬉しかったエピソードは？</h4>
								<div class="c-tab4__text">
									<p>
										新入社員研修が終了後、大学時代の研究に関するテーマがスタートし、これまでの経験が活かせることに喜びを感じました。わからない部分は周りの方に尋ねたくさんの知識を吸収しております。
									</p>
								</div>
							</div>
							<div class="c-tab4__col">
								<h4 class="c-tab4__title">この会社を選んだ理由は？</h4>
								<div class="c-tab4__text">
									<p>
										大学では炭素材料を扱っておりましたが、現在は炭素材料のもととなる原料を取り扱っております。これまでは炭素材料を分析するに過ぎませんでしたが、どうやってこの材料は作られているのだろうか？興味がわきこの会社の面接を受けました。今では製品が生まれるまでの工程を知ることができ、ものづくりの面白さを実感しております。
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab4__item'),
			$blockElm = $('.c-tab4__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);

				//
				$('html, body').animate({ 
					scrollTop: $(this).offset().top - 10
				}, 500); 
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab5
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab5">

		<div class="c-tab5">
			<div class="c-tab5__inner">
				<h3 class="c-tab5__title">ニュース</h3>
				<nav class="c-tab5__nav">
					<div class="c-tab5__item is-active"><span>すべて</span></div>
					<div class="c-tab5__item c-tab5__item--tag2"><span>ニュースリリース</span></div>
					<div class="c-tab5__item c-tab5__item--tag3"><span>IRニュース</span></div>
					<div class="c-tab5__item c-tab5__item--tag4"><span>メディア</span></div>
					<div class="c-tab5__item c-tab5__item--tag5"><span>お知らせ</span></div>
					<div class="c-tab5__item c-tab5__item--tag6"><span>広報ブログ</span></div>
				</nav>
				<div class="c-tab5__content">
					<div class="c-tab5__block is-active">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2016.10.29</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">11月2日（水）開催「新価値創造展2016」にて講演予定です</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.13</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期第２四半期決算説明会（動画）</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.09</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">会社四季報オンラインに代表鍵本のインタビュー記事が掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.28</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">オーストラリアにて開催されるISCT2019に参加します</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.14</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">2019年12月期 第1四半期決算を発表いたしました</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="c-tab5__block">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2016.10.29</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">11月2日（水）開催「新価値創造展2016」にて講演予定です</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2016.01.29</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">1月29日、神奈川新聞に横浜市立大学との共同研究に関する記事が掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2016.01.27</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">ヘリオスとアサーシス社による共同R&D Day の開催について</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2016.01.08</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">アサーシス社とのライセンス契約締結につきまして（共同プレスリリース）</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2015.08.18</p>
									<p class="c-tab5__tag c-tab5__tag--tag2">ニュースリリース</p>
									<p class="c-tab5__text">大学発ベンチャー表彰2015 受賞のお知らせ</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="c-tab5__block">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.13</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期第２四半期決算説明会（動画）</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.09</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期第2四半期決算説明会(動画)</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.08</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期第2四半期決算説明資料</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.08</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期 第２四半期決算短信〔日本基準〕（非連結）</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.08</p>
									<p class="c-tab5__tag c-tab5__tag--tag3">IRニュース</p>
									<p class="c-tab5__text">2019年12月期 第２四半期 決算説明資料</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="c-tab5__block">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.08.09</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">会社四季報オンラインに代表鍵本のインタビュー記事が掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.07.26</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">日経BP総研によるウェブメディア「Beyond Health」に当社記事が掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.16</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">当社執行役 研究・生産領域管掌 田村のインタビュー記事が掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.16</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">5月16日、日刊工業新聞に当社代表鍵本のインタビューが掲載されました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2018.05.16</p>
									<p class="c-tab5__tag c-tab5__tag--tag4">メディア</p>
									<p class="c-tab5__text">朝日新聞DIGITAL に当社に関する記事が掲載されました</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="c-tab5__block">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.28</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">オーストラリアにて開催されるISCT2019に参加します</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.04.24</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">Cell and Gene Meeting on the Mediterraneanに参加いたします</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2018.10.23</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">第3回再生医療産学官連携シンポジウムに参加いたします。</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2018.10.03</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">Bio Japan 2018に参加いたします</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2018.09.27</p>
									<p class="c-tab5__tag c-tab5__tag--tag5">お知らせ</p>
									<p class="c-tab5__text">Cell and Gene Meeting on the Mesaに参加いたします</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="c-tab5__block">
						<ul class="c-tab5__list">
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.05.14</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">2019年12月期 第1四半期決算を発表いたしました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.04.26</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">3月27日、定時株主総会、事業説明会を開催いたしました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.03.18</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">採用ページが公開となりました！</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.02.18</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">決算説明会動画を公開いたしました</p>
								</a>
							</li>
							<li class="c-tab5__row">
								<a href="#">
									<p class="c-tab5__date">2019.02.13</p>
									<p class="c-tab5__tag c-tab5__tag--tag6">広報ブログ</p>
									<p class="c-tab5__text">2018年12月期決算を発表いたしました</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<script>
		$(".c-tab5").each(function( index ) {
			$(this).find('.c-tab5__block.is-active').show();
		});
		$(".c-tab5__item").on('click', function() {
			var index = $(this).index();
			$(this).siblings().removeClass("is-active");
			$(this).addClass("is-active");
			$(this).parent().next().children().eq(index).stop(false, false).fadeIn(800).addClass("is-active");
			$(this).parent().next().children().eq(index).siblings().stop(false, false).fadeOut(800).removeClass("is-active");
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab6
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab6">

		<div class="c-tab6">
			<div class="c-tab6__nav">
				<div class="c-tab6__item is-active">
					<p class="c-tab6__item--front">Commercial Property</p>
					<p class="c-tab6__item--hover">
						<span class="c-tab6__item--in">Commercial Property</span>
					</p>
				</div>
				<div class="c-tab6__item">
					<p class="c-tab6__item--front">Commercial Property</p>
					<p class="c-tab6__item--hover">
						<span class="c-tab6__item--in">Commercial Property</span>
					</p>
				</div>
				<div class="c-tab6__item">
					<p class="c-tab6__item--front">Residential Property</p>
					<p class="c-tab6__item--hover">
						<span class="c-tab6__item--in">Residential Property</span>
					</p>
				</div>
			</div>
			<div class="c-tab6__content">
				<div class="c-tab6__block is-active">
					<img src="http://placehold.jp/790x450.png" alt="">
				</div>
				<div class="c-tab6__block">
					<img src="http://placehold.jp/790x450.png" alt="">
				</div>
				<div class="c-tab6__block">
					<img src="http://placehold.jp/790x450.png" alt="">
				</div>
			</div>
		</div>	
	</div>

	<script>
		$(".c-tab6").each(function( index ) {
			$(this).find('.c-tab6__block.is-active').show();
		});
		$(".c-tab6__item").on('click', function() {
			var index = $(this).index();
			$(".c-tab6__item").removeClass("is-active");
			$(this).addClass("is-active");
			$(".c-tab6__content").css({
				transition: 'all 0.5s linear',
				transform: 'translate3d(0, 50px, 0)',
				opacity: '0'
			});
			setTimeout(function(){
				$(".c-tab6__content").css({
					transform: 'translate3d(0, 0, 0)',
					opacity: '1'
				});
				$(".c-tab6__block").eq(index).stop(false, false).fadeIn(0).addClass("is-active");
				$(".c-tab6__block").eq(index).siblings().stop(false, false).fadeOut(0).removeClass("is-active");
			}, 500);
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab7
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab7">
		<div class="c-tab7">
			<div class="c-tab7__nav">
				<div class="c-tab7__item is-active"><span>全て</span></div>
				<div class="c-tab7__item"><span>勉強会・フォーラム</span></div>
				<div class="c-tab7__item"><span>メディア</span></div>
				<div class="c-tab7__item"><span>プロジェクト・活動</span></div>
				<div class="c-tab7__item"><span>その他</span></div>
			</div>
			<div class="c-tab7__content">
				<div class="c-tab7__block is-active">
					<ul class="c-tab7__list">
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title"><span>第15回災害時トイレ衛生管理講習会【計画編】</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">Internet of Toilet フォーラム 2019</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">第54回トイレラボ勉強会【5/14（火）開催】</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">プロジェクト・活動</span>
								<p class="c-tab7__title"><span>ニュースリリース「母親と子どもの排便に関する実態調査結果」公開中</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">第14回災害時トイレ衛生管理講習会【基礎編 】申し込み受付中！※定員に達したため申込受付を終了しました</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">その他</span>
								<p class="c-tab7__title"><span>第４回日本トイレひと大賞　応募受付中！</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">プロジェクト・活動</span>
								<p class="c-tab7__title">あなたの「お気に入りトイレ」を教えてください！※募集は終了しました。ご協力ありがとうございました。</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">その他</span>
								<p class="c-tab7__title">第３回「日本トイレひと大賞」発表！</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">メディア</span>
								<p class="c-tab7__title"><span>第15回災害時トイレ衛生管理講習会【計画編】</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">メディア</span>
								<p class="c-tab7__title"><span>第15回災害時トイレ衛生管理講習会【計画編】</span></p>
							</a>
						</li>
					</ul>
				</div>
				<div class="c-tab7__block">
					<ul class="c-tab7__list">
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title"><span>第15回災害時トイレ衛生管理講習会【計画編】</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">Internet of Toilet フォーラム 2019</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">第54回トイレラボ勉強会【5/14（火）開催】</p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">第14回災害時トイレ衛生管理講習会【基礎編 】申し込み受付中！※定員に達したため申込受付を終了しました</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="c-tab7__block">
					<ul class="c-tab7__list">
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">メディア</span>
								<p class="c-tab7__title"><span>第15回災害時トイレ衛生管理講習会【計画編】</span></p>
							</a>
						</li>
					</ul>
				</div>
				<div class="c-tab7__block">
					<ul class="c-tab7__list">
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">プロジェクト・活動</span>
								<p class="c-tab7__title"><span>ニュースリリース「母親と子どもの排便に関する実態調査結果」公開中</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">勉強会・フォーラム</span>
								<p class="c-tab7__title">第14回災害時トイレ衛生管理講習会【基礎編 】申し込み受付中！※定員に達したため申込受付を終了しました</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="c-tab7__block">
					<ul class="c-tab7__list">
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__new">NEW</span>
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">その他</span>
								<p class="c-tab7__title"><span>第４回日本トイレひと大賞　応募受付中！</span></p>
							</a>
						</li>
						<li class="c-tab7__row">
							<a href="#">
								<span class="c-tab7__date">2019/09/17</span>
								<span class="c-tab7__category">その他</span>
								<p class="c-tab7__title">第３回「日本トイレひと大賞」発表！</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab7__item'),
			$blockElm = $('.c-tab7__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab8
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab8">
		<div class="c-tab8">
			<div class="c-tab8__nav">
				<div class="c-tab8__item is-active"><span>商品情報（空間別）</span></div>
				<div class="c-tab8__item"><span>商品情報（カテゴリー別）</span></div>
				<div class="c-tab8__item"><span>おすすめ情報</span></div>
				<div class="c-tab8__item"><span>LIXILの取り組み</span></div>
			</div>
			<div class="c-tab8__content">
				<div class="c-tab8__block is-active">
					<img src="http://placehold.jp/200x180.png" alt="">
				</div>
				<div class="c-tab8__block">
					<img src="http://placehold.jp/300x180.png" alt="">
				</div>
				<div class="c-tab8__block">
					<img src="http://placehold.jp/400x180.png" alt="">
				</div>
				<div class="c-tab8__block">
					<img src="http://placehold.jp/500x180.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab8__item'),
			$blockElm = $('.c-tab8__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab9
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab9">

		<div class="c-tab9">
			<div class="c-tab9__nav">
				<div class="c-tab9__item is-active">新卒採用</div>
				<div class="c-tab9__item">中途採用</div>
			</div>
			<div class="c-tab9__content">
				<div class="c-tab9__block is-active">
					<div class="c-tab9__inner">
						<ul class="c-tab9__list">
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
						</ul>
						<div class="c-tab9__btn">
							<a href="#">+もっと見る</a>
						</div>
					</div>
				</div>
				<div class="c-tab9__block">
					<div class="c-tab9__inner">
						<ul class="c-tab9__list">
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
							<li class="c-tab9__card">
								<a href="#">
									<div class="c-tab9__image">
										<img src="/assets/img/common/tab9_logo.svg" align="marimo" width="35" height="29">
									</div>
									<p class="c-tab9__place">宮崎</p>
									<p class="c-tab9__name">株式会社マリモ </p>
									<dl class="c-tab9__type">
										<dt>職種：</dt>
										<dd>モデルルーム受付事務（フルタイム/パート）</dd>
									</dl>
									<p class="c-tab9__date">2019年8月23日</p>
									<div class="c-tab9__line"><i></i></div>
								</a>
							</li>
						</ul>
						<div class="c-tab9__btn">
							<a href="#">+もっと見る</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab9__item'),
			$blockElm = $('.c-tab9__block'),
			activeClass = "is-active";
			$('.c-tab9__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.stop().fadeOut(0);
				$blockElm.removeClass(activeClass).eq(index).addClass(activeClass).fadeIn(300);
			});
			$('.c-tab9__card').mouseenter(function(){
				$(this).find('.c-tab9__line i').stop().animate({'left': '100%'}, 250, function(){
					$(this).css({'left': '-100%'});
					$(this).stop().animate({'left': '0'}, 350);
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab10
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab10">
		<div class="c-tab10">
			<div class="c-tab10__nav">
				<div class="c-tab10__item">COMP<br>POWDER</div>
				<div class="c-tab10__item">COMP<br>GUMMY</div>
				<div class="c-tab10__item">COMP<br>DRINK</div>
				<div class="c-tab10__item">ご注文・<br>配送について</div>
				<div class="c-tab10__item">定期ご注文の<br>解約について</div>
			</div>
			<div class="c-tab10__content">
				<div class="c-tab10__font">左のタブからカテゴリを選択して下さい。</div>
				<div class="c-tab10__block">
					<img src="http://placehold.jp/150x150.png" alt="">
				</div>
				<div class="c-tab10__block">
					<img src="http://placehold.jp/200x200.png" alt="">
				</div>
				<div class="c-tab10__block">
					<img src="http://placehold.jp/250x250.png" alt="">
				</div>
				<div class="c-tab10__block">
					<img src="http://placehold.jp/300x300.png" alt="">
				</div>
				<div class="c-tab10__block">
					<img src="http://placehold.jp/350x350.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab10__item'),
			$blockElm = $('.c-tab10__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				$(".c-tab10__font").hide();
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab11
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab11">
		<div class="c-tab11">
			<div class="c-tab11__nav">
				<div class="c-tab11__item is-active">ニュースリリース</div>
				<div class="c-tab11__item">ニュースレター</div>
			</div>
			<div class="c-tab11__content">
				<div class="c-tab11__block is-active">
					<img src="http://placehold.jp/200x200.png" alt="">
				</div>
				<div class="c-tab11__block">
					<img src="http://placehold.jp/300x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab11__item'),
			$blockElm = $('.c-tab11__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab12
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab12">
		<div class="c-tab12">
			<div class="c-tab12__nav">
				<div class="c-tab12__item is-active">タンパク質</div>
				<div class="c-tab12__item">脂質</div>
				<div class="c-tab12__item">糖質</div>
				<div class="c-tab12__item">食物繊維</div>
				<div class="c-tab12__item">ビタミン</div>
				<div class="c-tab12__item">ミネラル</div>
			</div>
			<div class="c-tab12__content">
				<div class="c-tab12__block is-active">
					<p>
						タンパク質は筋肉を始めとする、多くの体組織の<br>
						構成成分であり、 毎日欠かさず摂取する必要があります。<br>
						日本人の平均摂取量は、1日あたり約70g*ですが、<br>
						COMPでは1日あたり83gものたんぱく質を<br>
						摂取することが可能です。
					</p>
					<p class="text2">*平成27年度国民健康・栄養調査 20歳以上男女</p>
					<p class="text3">
						―必須アミノ酸<br>
						タンパク質を構成する20種のアミノ酸のうち、<br>
						体内で合成することができない9種類があります。<br>
						それが必須アミノ酸。必ず食物から摂取しなければなりません。<br>
						COMPはこれら必須アミノ酸が過不足なく、十分量含まれています。
					</p>
				</div>
				<div class="c-tab12__block">
					<p>
						脂質には、「細胞膜やホルモンの原料」となり、<br>
						「脂溶性ビタミンの吸収を助ける」という<br>
						極めて重要な役割があります。<br>
						なかでも、現代人に不足しがちな脂質であるオメガ３脂肪酸は、<br>
						皮膚や血管の状態を健全に保つ役割があります。<br>
						COMPにはそれらすべての脂質が必要量含まれています。
					</p>
				</div>
				<div class="c-tab12__block">
					<p>
						日本人の食事摂取基準'2015では、<br>
						摂取エネルギーに占める糖質の割合として<br>
						50~65%程度が目標量となっています。<br>
						これを参考に、COMPは全体のエネルギーの55%を<br>
						糖質から供給する設計となっています。
					</p>
				</div>
				<div class="c-tab12__block">
					<p>
						食物繊維には、「栄養吸収速度の緩和」や、<br>
						「腸内環境のサポート」などの役割があります。<br>
						COMPにはイヌリンとセルロースからなる<br>
						食物繊維ブレンドが含まれており、<br>
						1日分あたり約24gの食物繊維を確保できます。
					</p>
				</div>
				<div class="c-tab12__block">
					<p>
						ビタミン類は、「三大栄養素の代謝」や<br>
						「骨や筋肉の維持」などに関与しています。<br>
						また、例えばビタミンCとビタミンEなどは相補的に働きます。<br>
						総合的にビタミン類を含むCOMPは、<br>
						単一の成分にはない価値があります。
					</p>
				</div>
				<div class="c-tab12__block">
					<p>
						わたしたちが普段必要とするミネラルには13種類あり、<br>
						「骨の形成」や「ホルモンの働きのサポート」など、<br>
						その役割は多岐にわたります。<br>
						これらの中にはカルシウムとマグネシウム、<br>
						亜鉛と銅など特に摂取バランスが重要となるものがありますが、<br>
						COMPはそれらのバランスも考慮して設計されています。
					</p>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab12__item'),
			$blockElm = $('.c-tab12__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.eq(index).stop(false, false).fadeIn(300).addClass("is-active");
				$blockElm.eq(index).siblings().stop(false, false).fadeOut(300).removeClass("is-active");
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab13
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab13">
		<div class="c-tab13">
			<div class="c-tab13__nav">
				<div class="c-tab13__item">
					<img src="/assets/img/common/tab13-1_off.png" alt="About ポカリの特長" width="540" height="80">
				</div>
				<div class="c-tab13__item is-active">
					<img src="/assets/img/common/tab13-2_off.png" alt="Scene こんなときにも" width="540" height="80">
				</div>
			</div>
			<div class="c-tab13__content">
				<div class="c-tab13__block">
					<img src="http://placehold.jp/200x200.png" alt="">
				</div>
				<div class="c-tab13__block is-active">
					<img src="http://placehold.jp/300x300.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var current_image = function(){
				$(".c-tab13__item").find("img").each(function(){
					var now_src = $(this).attr("src");
					$(this).attr("src", now_src.replace("_on.", "_off."));
				});
				$(".c-tab13__item.is-active").find("img").each(function(){
					var now_src = $(this).attr("src");
					$(this).attr("src", now_src.replace("_off.", "_on."));
				});
			}
			current_image();
			$(".c-tab13__block.is-active").show();
			$(".c-tab13__item").on("click", function() {
				var index = $(".c-tab13__item").index(this);
				$(this).siblings().removeClass("is-active");
				$(this).addClass("is-active");
				current_image();
				$(".c-tab13__block.is-active").removeClass("is-active").fadeOut(300, function() {
					$(".c-tab13__block").eq(index).addClass("is-active").fadeIn(300);
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab14
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab14">
		<div class="c-tab14">
			<div class="c-tab14__nav">
				<div class="c-tab14__item is-active"><span>すべて</span></div>
				<div class="c-tab14__item"><span>ブロードメディア</span></div>
				<div class="c-tab14__item"><span>グループ会社</span></div>
				<span class="c-tab14__line"></span>
			</div>
			<div class="c-tab14__content">
				<div class="c-tab14__block is-active">
					<ul class="c-tab14__list">
						<li>テキスト</li>
						<li>テキスト</li>
						<li>テキスト</li>
						<li>テキスト</li>
						<li>テキスト</li>
					</ul>
				</div>
				<div class="c-tab14__block">
					<ul class="c-tab14__list">
						<li>テキスト</li>
						<li>テキスト</li>
					</ul>
				</div>
				<div class="c-tab14__block">
					<ul class="c-tab14__list">
						<li>テキスト</li>
						<li>テキスト</li>
						<li>テキスト</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			$(".c-tab14__line").css({
				width: $(".c-tab14__item.is-active span").innerWidth(),
				left: $(".c-tab14__item.is-active span").position().left
			});
			$(".c-tab14__block.is-active").show();
			$(".c-tab14__item span").on('click', function() {
				var index = $(this).parent().index();
				$(this).parent().siblings().removeClass("is-active");
				$(this).parent().addClass("is-active");
				$(".c-tab14__line").stop().animate({
					width: $(this).outerWidth(),
					left: $(this).position().left
				}, 400);
				$(".c-tab14__content").height($(".c-tab14__block.is-active").height());
				$(".c-tab14__block.is-active").removeClass("is-active").fadeOut(150, function() {
					$(".c-tab14__block").eq(index).addClass("is-active").fadeIn(150);
				});
				$(".c-tab14__content").animate({
					height: $(".c-tab14__block").eq(index).height()
				}, 400, function(){
					$(".c-tab14__content").css({
						height: 'auto'
					});
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab15
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab15">
		<div class="c-tab15">
			<div class="c-tab15__nav">
				<div class="c-tab15__item is-active">CM</div>
				<div class="c-tab15__item">メイキング</div>
				<div class="c-tab15__item">取組み紹介</div>
			</div>
			<div class="c-tab15__content">
				<div class="c-tab15__block is-active">
					<img src="http://placehold.jp/300x150.png" alt="">
				</div>
				<div class="c-tab15__block">
					<img src="http://placehold.jp/400x150.png" alt="">
				</div>
				<div class="c-tab15__block">
					<img src="http://placehold.jp/500x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab15__item'),
			$blockElm = $('.c-tab15__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab16
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab16">
		<div class="c-tab16">
			<div class="c-tab16__nav">
				<div class="c-tab16__item is-active">宿泊</div>
				<div class="c-tab16__item">レストラン</div>
			</div>
			<div class="c-tab16__content">
				<div class="c-tab16__block is-active">
					<img src="http://placehold.jp/280x150.png" alt="">
				</div>
				<div class="c-tab16__block">
					<img src="http://placehold.jp/280x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab16__item'),
			$blockElm = $('.c-tab16__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.stop().fadeOut(0);
				$blockElm.eq(index).fadeIn(300);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab17
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab17">
		<div class="c-tab17">
			<div class="c-tab17__nav">
				<div class="c-tab17__item is-active">
					<img src="/assets/img/common/tab17-1_off.png" alt="戸建">
				</div>
				<div class="c-tab17__item">
					<img src="/assets/img/common/tab17-2_off.png" alt="マンション">
				</div>
			</div>
			<div class="c-tab17__content">
				<div class="c-tab17__block is-active">
					<img src="http://placehold.jp/280x150.png" alt="">
				</div>
				<div class="c-tab17__block">
					<img src="http://placehold.jp/380x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var current_image2 = function(){
				$(".c-tab17__item").find("img").each(function(){
					var now_src = $(this).attr("src");
					$(this).attr("src", now_src.replace("_on.", "_off."));
				});
				$(".c-tab17__item.is-active").find("img").each(function(){
					var now_src = $(this).attr("src");
					$(this).attr("src", now_src.replace("_off.", "_on."));
				});
			}
			current_image2();
			$(".c-tab17__item").on("click", function() {
				var index = $(".c-tab17__item").index(this);
				$(this).siblings().removeClass("is-active");
				$(this).addClass("is-active");
				current_image2();
				$(this).parent()
				.next()
				.find(".c-tab17__block")
				.removeClass("is-active");
				$(".c-tab17__block").eq(index).addClass("is-active");
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab18
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab18">
		<div class="c-tab18">
			<div class="c-tab18__nav">
				<div class="c-tab18__item is-active">SERIES</div>
				<div class="c-tab18__item">ITEM</div>
				<div class="c-tab18__item">SCENE</div>
			</div>
			<div class="c-tab18__content">
				<div class="c-tab18__block is-active">
					<img src="http://placehold.jp/280x150.png" alt="">
				</div>
				<div class="c-tab18__block">
					<img src="http://placehold.jp/380x150.png" alt="">
				</div>
				<div class="c-tab18__block">
					<img src="http://placehold.jp/480x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab18__item'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$('.c-tab18__content').stop().animate({
					"opacity":0,
					"top":15
				},350,function(){
					$(".c-tab18__block").removeClass("is-active");
					$(".c-tab18__content").css({"top":-15});
					$(".c-tab18__block").eq(index).addClass("is-active");
					$(".c-tab18__content").delay(250).animate({
						"opacity":1,
						"top":0
					},350);
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab19
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab19">
		<div class="c-tab19">
			<div class="c-tab19__nav">
				<div class="c-tab19__item c-tab19__item--color2 is-active"><span>最新記事</span></div>
				<div class="c-tab19__item"><span>教育</span></div>
				<div class="c-tab19__item"><span>就労支援</span></div>
				<div class="c-tab19__item c-tab19__item--no_active"><span>家族支援</span></div>
			</div>
			<div class="c-tab19__content">
				<div class="c-tab19__block is-active">
					<img src="http://placehold.jp/280x150.png" alt="">
				</div>
				<div class="c-tab19__block">
					<img src="http://placehold.jp/380x150.png" alt="">
				</div>
				<div class="c-tab19__block">
					<img src="http://placehold.jp/480x150.png" alt="">
				</div>
				<div class="c-tab19__block">
					<img src="http://placehold.jp/580x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab19__item'),
			$blockElm = $('.c-tab19__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab20
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab20">
		<div class="c-tab20">
			<div class="c-tab20__nav">
				<div class="c-tab20__item is-active">東 京</div>
				<div class="c-tab20__item">新 潟</div>
				<div class="c-tab20__item">北海道</div>
			</div>
			<div class="c-tab20__content">
				<div class="c-tab20__block is-active">
					<img src="http://placehold.jp/200x150.png" alt="">
				</div>
				<div class="c-tab20__block">
					<img src="http://placehold.jp/300x150.png" alt="">
				</div>
				<div class="c-tab20__block">
					<img src="http://placehold.jp/400x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab20__item'),
			$blockElm = $('.c-tab20__block'),
			activeClass = "is-active";
			$('.c-tab20__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.stop().fadeOut(0);
				$blockElm.removeClass(activeClass).eq(index).addClass(activeClass).fadeIn(400);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab21
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab21">
		<div class="c-tab21">
			<div class="c-tab21__nav">
				<div class="c-tab21__item is-active">Gallery</div>
				<div class="c-tab21__item">Book Space</div>
				<div class="c-tab21__item">Event</div>
			</div>
			<div class="c-tab21__content">
				<div class="c-tab21__block is-active">
					<img src="http://placehold.jp/200x150.png" alt="">
				</div>
				<div class="c-tab21__block">
					<img src="http://placehold.jp/300x150.png" alt="">
				</div>
				<div class="c-tab21__block">
					<img src="http://placehold.jp/400x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab21__item'),
			$blockElm = $('.c-tab21__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab22
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab22">
		<div class="c-tab22">
			<div class="c-tab22__nav">
				<div class="c-tab22__item is-active">プレスリリース</div>
				<div class="c-tab22__item">イベント</div>
				<div class="c-tab22__item">メディア</div>
				<div class="c-tab22__item">IRニュース</div>
			</div>
			<div class="c-tab22__content">
				<div class="c-tab22__block is-active">
					<img src="http://placehold.jp/200x150.png" alt="">
				</div>
				<div class="c-tab22__block">
					<img src="http://placehold.jp/300x150.png" alt="">
				</div>
				<div class="c-tab22__block">
					<img src="http://placehold.jp/400x150.png" alt="">
				</div>
				<div class="c-tab22__block">
					<img src="http://placehold.jp/500x150.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab22__item'),
			$blockElm = $('.c-tab22__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab23
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab23">
		<div class="c-tab23">
			<div class="c-tab23__nav">
				<div class="c-tab23__item is-active">Tab1</div>
				<div class="c-tab23__item">Tab2</div>
				<div class="c-tab23__item">Tab3</div>
			</div>

			<div class="c-tab23__content">
				<div class="c-tab23__block is-active">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
				</div>
				<div class="c-tab23__block">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
				</div>
				<div class="c-tab23__block">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
					<img src="http://placehold.jp/290x350.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab23__item'),
			$blockElm = $('.c-tab23__block'),
			activeClass = "is-active";
			$('.c-tab23__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.hide().removeClass(activeClass).eq(index).fadeIn(700).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab24
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab24">
		<div class="c-tab24">
			<div class="c-tab24__nav">
				<div class="c-tab24__item is-active"><img src="/assets/img/common/tab24_item01.png" alt=""></div>
				<div class="c-tab24__item"><img src="/assets/img/common/tab24_item02.png" alt=""></div>
			</div>

			<div class="c-tab24__content">
				<div class="c-tab24__block is-active">
					<img src="http://placehold.jp/230x300.png" alt="">
				</div>
				<div class="c-tab24__block">
					<img src="http://placehold.jp/290x250.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab24__item'),
			$blockElm = $('.c-tab24__block'),
			activeClass = "is-active";
			$('.c-tab24__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.eq(index).fadeIn('fast').addClass(activeClass);
				$blockElm.eq(index).siblings().fadeOut('fast').removeClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab25
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab25">
		<div class="c-tab25">
			<div class="c-tab25__nav">
				<div class="c-tab25__item c-tab25__item--color1 is-active">最新情報</div>
				<div class="c-tab25__item c-tab25__item--color2">開催中イベント</div>
				<div class="c-tab25__item c-tab25__item--color3">今月のプレゼント</div>
			</div>

			<div class="c-tab25__content">
				<div class="c-tab25__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab25__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab25__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab25__item'),
			$blockElm = $('.c-tab25__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab26
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab26">
		<div class="c-tab26">
			<div class="c-tab26__nav">
				<div class="c-tab26__item is-active">最新ニュース</div>
				<div class="c-tab26__item">学科・コース</div>
				<div class="c-tab26__item">地域連携・社会貢献</div>
				<div class="c-tab26__item">課外活動</div>
				<div class="c-tab26__item">国際交流・留学</div>
			</div>

			<div class="c-tab26__content">
				<div class="c-tab26__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab26__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab26__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
				<div class="c-tab26__block">
					<img src="http://placehold.jp/270x200.png" alt="">
				</div>
				<div class="c-tab26__block">
					<img src="http://placehold.jp/210x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab26__item'),
			activeClass = "is-active";
			$('.c-tab26__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(".c-tab26__block.is-active").removeClass("is-active").fadeOut(150, function() {
					$(".c-tab26__block").eq(index).addClass("is-active").fadeIn(150);
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab26
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab27">
		<div class="c-tab27">
			<div class="c-tab27__nav">
				<div class="c-tab27__item is-active">首都圏</div>
				<div class="c-tab27__item">関西</div>
				<div class="c-tab27__item">名古屋</div>
				<div class="c-tab27__item">仙台</div>
				<div class="c-tab27__item">中部</div>
			</div>

			<div class="c-tab27__content">
				<div class="c-tab27__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab27__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab27__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
				<div class="c-tab27__block">
					<img src="http://placehold.jp/270x200.png" alt="">
				</div>
				<div class="c-tab27__block">
					<img src="http://placehold.jp/210x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab27__item'),
			$blockElm = $('.c-tab27__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab28
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab28">
		<div class="c-tab28">
			<div class="c-tab28__nav">
				<div class="c-tab28__item is-active">新着</div>
				<div class="c-tab28__item">広報ニュース</div>
				<div class="c-tab28__item">学科ニュース</div>
			</div>

			<div class="c-tab28__content">
				<div class="c-tab28__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab28__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab28__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab28__item'),
			$blockElm = $('.c-tab28__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab29
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab29">
		<div class="c-tab29">
			<div class="c-tab29__nav">
				<div class="c-tab29__item is-active">広域マップ</div>
				<div class="c-tab29__item">近隣マップ</div>
			</div>

			<div class="c-tab29__content">
				<div class="c-tab29__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab29__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab29__item'),
			$blockElm = $('.c-tab29__block'),
			activeClass = "is-active";
			$('.c-tab29__block.is-active').show();
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$blockElm.stop().fadeOut(0);
				$blockElm.removeClass(activeClass).eq(index).addClass(activeClass).fadeIn(400);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab30
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab30">
		<div class="c-tab30">
			<div class="c-tab30__nav">
				<div class="c-tab30__item is-active">ALL</div>
				<div class="c-tab30__item">RELEASE</div>
				<div class="c-tab30__item">MEDIA</div>
			</div>

			<div class="c-tab30__content">
				<div class="c-tab30__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab30__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab30__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab30__item'),
			$blockElm = $('.c-tab30__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab31
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab31">
		<div class="c-tab31">
			<div class="c-tab31__nav">
				<div class="c-tab31__item is-active">ALL</div>
				<div class="c-tab31__item">NEWS</div>
				<div class="c-tab31__item">PRESS</div>
			</div>

			<div class="c-tab31__content">
				<div class="c-tab31__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab31__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab31__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab31__item'),
			$blockElm = $('.c-tab31__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				if($(this).hasClass(activeClass)) {
					return false;
				}
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$('.c-tab31__content').stop().animate({
					"opacity":0,
					"top":25
				},350,function(){
					$(".c-tab31__block").removeClass("is-active");
					$(".c-tab31__block").eq(index).addClass("is-active");
					$(".c-tab31__content").animate({
						"opacity":1,
						"top":0
					},350);
				});
			});
		});
	</script>
</section>

<section class="l-gl-box-wrap">

	<?php ////////////////////////////////////////////////
	// c-tab32
	////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-tab32">
		<div class="c-tab32">
			<div class="c-tab32__nav">
				<div class="c-tab32__item is-active">ALL</div>
				<div class="c-tab32__item">ニュース</div>
				<div class="c-tab32__item">生きもの情報</div>
				<div class="c-tab32__item">参加者募集</div>
				<div class="c-tab32__item">マーケットプレース</div>
			</div>

			<div class="c-tab32__content">
				<div class="c-tab32__block is-active">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab32__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
				<div class="c-tab32__block">
					<img src="http://placehold.jp/250x200.png" alt="">
				</div>
				<div class="c-tab32__block">
					<img src="http://placehold.jp/230x200.png" alt="">
				</div>
				<div class="c-tab32__block">
					<img src="http://placehold.jp/290x200.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var $navElm = $('.c-tab32__item'),
			$blockElm = $('.c-tab32__block'),
			activeClass = "is-active";
			$navElm.on('click', function() {
				var index = $navElm.index(this);
				$(this).siblings().removeClass(activeClass);
				$(this).addClass(activeClass);
				$(this).parent()
				.next()
				.find($blockElm)
				.removeClass(activeClass);
				$blockElm.eq(index).addClass(activeClass);
			});
		});
	</script>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
