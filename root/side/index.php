<?php
$pageid = "side";
$scss = "dev/scss/3_project/_side.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<section class="l-gl-box-wrap">
	<!-- side 1 -->
	<div class="c-gl-box c-side" data-name="c-side1" style="width: 50vw; padding-top: 0">
		<div class="container-side">
			<div class="c-side1">
				<div class="c-side1__control">
					<div class="c-side1__btn">
						<span></span>
					</div>
				</div>
				<div class="c-side1__menu">
					<nav>
						<ul class="c-side1__list1">
							<li class="c-side1__list1-item"><a href="/side" class="c-side1__link">Home</a></li>
							<li class="c-side1__list1-item">
								<a href="/side" class="c-side1__link extended">What we do</a>
								<ul class="c-side1__list2">
									<li class="c-side1__list2-item">
										<a href="#" class="c-side1__link">Example 1</a>
										<a href="#" class="c-side1__link">Example 2</a>
										<a href="#" class="c-side1__link">Example 3</a>
										<a href="#" class="c-side1__link">Example 4</a>
										<a href="#" class="c-side1__link">Example 5</a>
									</li>
								</ul>
							</li>
							<li class="c-side1__list1-item"><a href="/side" class="c-side1__link">Design series</a></li>
							<li class="c-side1__list1-item"><a href="/side" class="c-side1__link">News & opinion</a></li>
							<li class="c-side1__list1-item">
								<a href="/side" class="c-side1__link extended">Resources</a>
								<ul class="c-side1__list2">
									<li class="c-side1__list2-item">
										<a href="#" class="c-side1__link">Example 1</a>
										<a href="#" class="c-side1__link">Example 2</a>
										<a href="#" class="c-side1__link">Example 3</a>
										<a href="#" class="c-side1__link">Example 4</a>
										<a href="#" class="c-side1__link">Example 5</a>
									</li>
								</ul>
							</li>
							<li class="c-side1__list1-item"><a href="/side" class="c-side1__link">About us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(function () {
			$('.c-side1__btn').on('click', function () {
				$(this).toggleClass('is-active');
				$('.c-side1__menu').toggleClass('is-show');
				$('.c-side1__link').removeClass('is-active');
				$('.c-side1__list1-item').first().children().addClass('is-active');
				$('.c-side1__link.extended').next().slideUp();
			})

			$('.c-side1__link.extended').on('click', function (event) {
				event.preventDefault();
				if ($(this).hasClass('is-active'))
					return;
				$('.c-side1__link').removeClass('is-active');
				$('.c-side1__link.extended').next().slideUp();
				$(this).next().slideToggle();
				$(this).addClass('is-active');
			})
		});

	</script>
	<!-- side 2 -->
	<div class="c-gl-box c-side" data-name="c-side2" style="width: 50vw;">
		<div class="container-side"
			style="width: 100%; height: 100%; position: relative; background: #ffe000; overflow: hidden;">
			<div class="c-side2">
				<div class="c-side2__box1">
					<div class="c-side2__overlay"></div>
					<div class="c-side2__menu">
						<div class="c-side2__menu-inner">
							<div class="c-side2__btn">
								<div></div>
								<div></div>
								<div></div>
							</div>
							<nav>
								<ul class="c-side2__list">
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 1</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 2</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 3</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 4</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 5</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 6</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 7</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 8</a></li>
									<li class="c-side2__list1-item"><a href="/side" class="c-side2__link">Link 9</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="c-side2__box2">
					<div class="c-side2__overlay"></div>
					<div class="c-side2__box2-inner">
						<a href="#" class="c-side2__login">
							<span><img src="/assets/img/common/icon-side001.png" alt=""></span>
							Login 1
						</a>
						<a href="#" class="c-side2__login">
							<span><img src="/assets/img/common/icon-side002.png" alt=""></span>
							Login 2
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- side 3 -->
	<div class="c-gl-box" data-name="c-side3" style="width: 50vw; background: #eee">
		<div class="container-side">
			<div class="c-side3 c-side">
				<div class="c-side3__logo">
					<img src="http://placehold.jp/205x39.png" alt="">
				</div>
				<nav class="c-side3__menu">
					<ul class="c-side3__list">
						<li class="c-side3__item">
							<a href="#" class="c-side3__link is-active">Link 1</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 2</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 3</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 4</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 5</a>
						</li>
						<li class="c-side3__item c-side3__item-arrow">
							<a href="#" class="c-side3__link">Link 6</a>
							<ul class="c-side3__sub">
								<li class="c-side3__sub-item">
									<a href="#" class="c-side3__link">Sub link 1</a>
								</li>
								<li class="c-side3__sub-item">
									<a href="#" class="c-side3__link">Sub link 2</a>
								</li>
								<li class="c-side3__sub-item">
									<a href="#" class="c-side3__link">Sub link 3</a>
								</li>
								<li class="c-side3__sub-item">
									<a href="#" class="c-side3__link">Sub link 4</a>
								</li>
							</ul>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 7</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 8</a>
						</li>
						<li class="c-side3__item">
							<a href="#" class="c-side3__link">Link 9</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<script>
		$(function () {
			$(".c-side3__item.c-side3__item-arrow")
				.mouseenter(function () {
					$(this)
						.find(".c-side3__sub")
						.stop()
						.slideDown(300);
				})
				.mouseleave(function () {
					$(this)
						.find(".c-side3__sub")
						.stop()
						.slideUp(300);
				})

			$('.c-side3__link').on('click', function (e) {
				e.preventDefault();
				$('.c-side3__link').removeClass('is-active');
				$(this).addClass('is-active');
			})
		});

	</script>
	<!-- side 4 -->
	<div class="c-gl-box" data-name="c-side4" style="width: 50vw; background: #eee">
		<div class="container-side" style="position: relative; height: 85vh">
			<div class="c-side4 c-side">
				<div class="c-side4__logo">
					<img src="http://placehold.jp/152x152.png" alt="">
				</div>
				<nav class="c-side4__menu">
					<ul class="c-side4__list is-close">
						<li class="c-side4__item">
							<a href="#" class="c-side4__link is-active"><span>Topics</span></a>
						</li>
						<li class="c-side4__item c-side4__item-arrow">
							<a href="#" class="c-side4__link"><span>Project</span></a>
							<div class="c-side4__wrap">
								<ul class="c-side4__sub">
									<li class="c-side4__sub-item">
										<a href="#" class="c-side4__link"><span>Sub link 1</span></a>
									</li>
									<li class="c-side4__sub-item">
										<a href="#" class="c-side4__link"><span>Sub link 2</span></a>
									</li>
									<li class="c-side4__sub-item">
										<a href="#" class="c-side4__link"><span>Sub link 3</span></a>
									</li>
									<li class="c-side4__sub-item">
										<a href="#" class="c-side4__link"><span>Sub link 4</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="c-side4__item">
							<a href="#" class="c-side4__link"><span>Movie</span></a>
						</li>
						<li class="c-side4__item">
							<a href="#" class="c-side4__link"><span>Ambassador</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<script>
			$(function () {
				var item = $('.c-side4__sub-item').length;
				var height = 40 * item;
				var list = $(".c-side4__item");
				$('.c-side4__sub').css({
					height: height
				});

				$('.c-side4__item-arrow').on('click', function (e) {
					e.preventDefault();
					$('.c-side4__list').toggleClass('is-close');
				})

				$('.c-side4__item').on('click', function (e) {
					e.preventDefault();
					$('.c-side4__item').removeClass('is-active');
					$(this).toggleClass('is-active');
				})
			});

		</script>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- side 5 -->
	<div class="c-gl-box" data-name="c-side5" style="width: 50vw; background: #eee">
		<div class="container-side">
			<nav class="c-side5 c-side">
				<h1 class="c-side5__logo">
					<a href="#"><img src="http://placehold.jp/80x356.png" alt=""></a>
				</h1>
				<ul class="c-side5__menu">
					<li class="c-side5__item">
						<a href="#">about us</a>
					</li>
					<li class="c-side5__item explore">
						<a href="#">explore</a>
						<ul class="c-side5__submenu">
							<li class="c-side5__subitem">
								<a href="">link 1</a>
							</li>
							<li class="c-side5__subitem">
								<a href="">link 2</a>
							</li>
							<li class="c-side5__subitem">
								<a href="">link 3</a>
							</li>
							<li class="c-side5__subitem">
								<a href="">link 4</a>
							</li>
							<li class="c-side5__subitem">
								<a href="">link 5</a>
							</li>
						</ul>
					</li>
					<li class="c-side5__item">
						<a href="#">view the map</a>
					</li>
					<li class="c-side5__item">
						<a href="#">topics</a>
					</li>
					<li class="c-side5__item">
						<a href="#">access</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- side 6 -->
	<div class="c-gl-box" data-name="c-side6" style="width: 50vw; background: #eee">
		<div class="container-side" style="position: relative; height: 85vh">
			<nav class="c-side6 c-side">
				<h1 class="c-side6__logo">
					<a href="#"><img src="http://placehold.jp/155x92.png" alt=""></a>
				</h1>
				<ul class="c-side6__menu1">
					<li class="c-side6__item">
						<a href="#">home</a>
					</li>
					<li class="c-side6__item">
						<a href="#">topics</a>
					</li>
					<li class="c-side6__item">
						<a href="#">information</a>
					</li>
				</ul>
				<p class="c-side6__ttl">■ SERVICE</p>
				<ul class="c-side6__menu2">
					<li class="c-side6__item">
						<a href="#">Link 1</a>
					</li>
					<li class="c-side6__item">
						<a href="#">Link 2</a>
					</li>
					<li class="c-side6__item">
						<a href="#">Link 3</a>
					</li>
					<li class="c-side6__item">
						<a href="#">Link 4</a>
					</li>
					<li class="c-side6__item">
						<a href="#">Link 5</a>
					</li>
				</ul>
				<ul class="c-side6__menu1">
					<li class="c-side6__item">
						<a href="#">about</a>
					</li>
					<li class="c-side6__item">
						<a href="#">careers</a>
					</li>
				</ul>
				<div class="c-side6__social">
					<p class="c-side6__ttl">■ SNS ACCOUNT</p>
					<ul>
						<li><a href="#"><img src="/assets/img/common/side006-tw.png" width="16" alt=""></a></li>
						<li><a href="#"><img src="/assets/img/common/side006-fb.png" width="16" alt=""></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</section>
<section class="l-gl-box-wrap">
	<!-- side 7 -->
	<div class="c-gl-box" data-name="c-side7" style="width: 50vw; background: #eee">
		<div class="container-side">
			<div class="c-side7 c-side">
				<div class="c-side7__btn">
					<div></div>
					<div></div>
				</div>
				<div class="c-side7__lang">
					<h3 class="c-side7__lang-ttl">language</h3>
					<button class="c-side7__lang-btn">
						<span><img src="http://www.placehold.jp/24x24.png" alt=""></span>
					</button>
					<ul>
						<li><a href="#"><img src="http://www.placehold.jp/24x24.png" alt=""></a></li>
						<li><a href="#"><img src="http://www.placehold.jp/24x24.png" alt=""></a></li>
						<li><a href="#"><img src="http://www.placehold.jp/24x24.png" alt=""></a></li>
						<li><a href="#"><img src="http://www.placehold.jp/24x24.png" alt=""></a></li>
						<li><a href="#"><img src="http://www.placehold.jp/24x24.png" alt=""></a></li>
					</ul>
				</div>
				<nav class="c-side7__menu">
					<ul>
						<li><a href="#" class="is-current">home</a></li>
						<li>
							<a href="#">shop</a>
							<span class="c-side7__icon"></span>
							<ul class="c-side7__submenu">
								<li><a href="#">Link 1</a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#">Link 4</a></li>
								<li><a href="#">Link 5</a></li>
							</ul>
						</li>
						<li>
							<a href="#">assistance</a>
							<span class="c-side7__icon"></span>
							<ul class="c-side7__submenu">
								<li><a href="#">Link 1</a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#">Link 4</a></li>
								<li><a href="#">Link 5</a></li>
							</ul>
						</li>
						<li>
							<a href="#">coffee</a>
							<span class="c-side7__icon"></span>
							<ul class="c-side7__submenu">
								<li><a href="#">Link 1</a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#">Link 4</a></li>
								<li><a href="#">Link 5</a></li>
							</ul>
						</li>
						<li>
							<a href="#">business</a>
							<span class="c-side7__icon"></span>
							<ul class="c-side7__submenu">
								<li><a href="#">Link 1</a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#">Link 4</a></li>
								<li><a href="#">Link 5</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<script>
				$(function () {
					$('.c-side7__lang-btn').click(function () {
						$(this).next().toggleClass('is-show')
					})
					$('.c-side7__icon').click(function () {
						if ($(this).hasClass('is-active')) {
							$(this).removeClass('is-active');
							$(this).next().slideUp();
						} else {
							$('.c-side7__submenu').slideUp();
							$('.c-side7__icon').removeClass('is-active');
							$(this)
								.addClass('is-active')
								.next()
								.stop()
								.slideToggle();
						}
					})
				});

			</script>
		</div>
	</div>
	<!-- side 8 -->
	<div class="c-gl-box" data-name="c-side8" style="width: 50vw; background: #eee">
		<div class="container-side" style="position: relative; height: 85vh">
			<div class="c-side8 c-side">
				<h1 class="c-side8__logo">
					<a href="#"><img src="http://www.placehold.jp/121x53.png" alt=""></a>
				</h1>
				<div class="c-side8__wrapper">
					<nav class="c-side8__menu">
						<ul>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 1</a></li>
						</ul>
					</nav>
					<div class="c-side8__taglist">
						<ul>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
							<li><a href="">Tag 1</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>
