<?php
$pageid = "form";
$scss = "dev/scss/3_project/_form.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-input1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input1">

	<div class="c-input1">
		<input type="radio" name="aaa1" checked>
		<label>Radio</label>
	</div>

	<div class="c-input1">
		<input type="radio" name="aaa1">
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input1">
		<input type="checkbox" checked>
		<label>Checkbox</label>
	</div>

	<div class="c-input1">
		<input type="checkbox">
		<label>Checkbox</label>
	</div>

	<br><br>
	size
	<br><br>

	<div class="c-input1 c-input1--fill">
		<input type="checkbox" checked>
		<label>Fill</label>
	</div>

	<div class="c-input1 c-input1--thick">
		<input type="checkbox" checked>
		<label>Thick</label>
	</div>

</div>


<?php ////////////////////////////////////////////////
// c-input2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input2">

	<div class="c-input2">
		<input type="radio" name="aaa2" checked>
		<label>Radio</label>
	</div>

	<div class="c-input2">
		<input type="radio" name="aaa2">
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input2">
		<input type="checkbox" checked>
		<label>Checkbox</label>
	</div>

	<div class="c-input2">
		<input type="checkbox">
		<label>Checkbox</label>
	</div>

	<br><br>
	size
	<br><br>

	<div class="c-input2 c-input2--fill">
		<input type="checkbox" checked>
		<label>Fill</label>
	</div>

	<div class="c-input2 c-input2--thick">
		<input type="checkbox" checked>
		<label>Thick</label>
	</div>

</div>

</section>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-input3
////////////////////////////////////////////////////// ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

<div class="c-gl-box" data-name="c-input3">

	fontawesomeを使ってアイコンを表示

	<br><br>

	<div class="c-input3">
		<input type="Radio" name="aaa3" checked>
		<i class="fas fa-check"></i>
		<label>Radio</label>
	</div>

	<div class="c-input3">
		<input type="radio" name="aaa3">
		<i class="fas fa-check"></i>
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input3">
		<input type="checkbox" checked>
		<i class="fas fa-check"></i>
		<label>Checkbox</label>
	</div>

	<div class="c-input3">
		<input type="checkbox">
		<i class="fas fa-check"></i>
		<label>Checkbox</label>
	</div>

</div>


<?php ////////////////////////////////////////////////
// c-input4
////////////////////////////////////////////////////// ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

<div class="c-gl-box" data-name="c-input4">

	fontawesomeを使ってアイコンを表示

	<br><br>

	<div class="c-input4">
		<input type="Radio" name="aaa4" checked>
		<i class="fas fa-check"></i>
		<label>Radio</label>
	</div>

	<div class="c-input4">
		<input type="radio" name="aaa4">
		<i class="fas fa-check"></i>
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input4">
		<input type="checkbox" checked>
		<i class="fas fa-check"></i>
		<label>Checkbox</label>
	</div>

	<div class="c-input4">
		<input type="checkbox">
		<i class="fas fa-check"></i>
		<label>Checkbox</label>
	</div>

</div>

</section>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-input5
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input5">

	SVGの「コード」を使ってアイコン表示

	<br><br>

	<div class="c-input5">
		<input type="radio" name="aaa5" checked>
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Radio</label>
	</div>

	<div class="c-input5">
		<input type="radio" name="aaa5">
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input5">
		<input type="checkbox" checked>
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Checkbox</label>
	</div>

	<div class="c-input5">
		<input type="checkbox">
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Checkbox</label>
	</div>

</div>

<?php ////////////////////////////////////////////////
// c-input6
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input6">

	SVGの「コード」を使ってアイコン表示

	<br><br>

	<div class="c-input6">
		<input type="radio" name="aaa6" checked>
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Radio</label>
	</div>

	<div class="c-input6">
		<input type="radio" name="aaa6">
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input6">
		<input type="checkbox" checked>
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Checkbox</label>
	</div>

	<div class="c-input6">
		<input type="checkbox">
		<svg viewBox="0 0 20 20">
			<path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
		</svg>
		<label>Checkbox</label>
	</div>

</div>

</section>

<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-input7
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input7">

	SVGやPNGの「ファイル」を使ってアイコン表示

	<br><br>

	<div class="c-input7">
		<input type="radio" name="aaa7" checked>
		<img src="image/002.svg">
		<label>Radio</label>
	</div>

	<div class="c-input7">
		<input type="radio" name="aaa7">
		<img src="image/002.svg">
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input7">
		<input type="checkbox" checked>
		<img src="image/002.svg">
		<label>Checkbox</label>
	</div>

	<div class="c-input7">
		<input type="checkbox">
		<img src="image/002.svg">
		<label>Checkbox</label>
	</div>

	<div class="c-input7">
		<input type="checkbox" checked>
		<img src="image/001.png">
		<label>Checkbox</label>
	</div>

</div>

<?php ////////////////////////////////////////////////
// c-input8
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-input8">

	SVGやPNGの「ファイル」を使ってアイコン表示

	<br><br>

	<div class="c-input8">
		<input type="radio" name="aaa8" checked>
		<img class="svg" src="image/002.svg">
		<label>Radio</label>
	</div>

	<div class="c-input8">
		<input type="radio" name="aaa8">
		<img class="svg" src="image/002.svg">
		<label>Radio</label>
	</div>

	<br><br>

	<div class="c-input8">
		<input type="checkbox" checked>
		<img class="svg" src="image/002.svg">
		<label>Checkbox</label>
	</div>

	<div class="c-input8">
		<input type="checkbox">
		<img class="svg" src="image/002.svg">
		<label>Checkbox</label>
	</div>

	<div class="c-input8">
		<input type="checkbox" checked>
		<img src="image/001.png">
		<label>Checkbox</label>
	</div>

</div>

</section>



<section class="l-gl-box-wrap">

<?php ////////////////////////////////////////////////
// c-select1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-select1">

	背景画像でアイコンを表示した
	<br><br>

	<div class="c-select1">
		<select>
			<option value="">Select</option>
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
		</select>
	</div>

	<br>

	<div class="c-select1 c-select1--color1">
		<select>
			<option value="">Select</option>
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
		</select>
	</div>

</div>

<?php ////////////////////////////////////////////////
// c-select2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-select2">

	:before、:afterでアイコンを表示した
	<br><br>

	<div class="c-select2">
		<select>
			<option value="">Select</option>
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
		</select>
	</div>

	<br>

	<div class="c-select2 c-select2--color1">
		<select>
			<option value="">Select</option>
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
		</select>
	</div>

</div>
</section>
<!-- c-form1 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form1
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form1">
	<form action="" method="post" class="c-form1">
		<h2 class="c-form1__ttl1">CONTACT</h2>
		<p class="c-form1__text1"><span>※</span>は必須入力項目です。</p>
		<div class="c-form1__cont">
			<dl>
				<dt class="c-form1__required">お問い合わせ種別</dt>
				<dd>
					<ul class="c-form1__list">
						<li>
							<label>
								<input type="radio" name="about" value="" checked="checked">
								<span class="">商品に関して</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="about" value="">
								<span class="">お取引について</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="c-form1__required">お名前</dt>
				<dd>
					<div class="c-form1__input">
						<input type="text" name="" value="" size="40">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>会社名</dt>
				<dd>
					<div class="c-form1__input">
						<input class="fwidth" type="text" name="" value="" size="40">
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="c-form1__required">連絡先電話番号</dt>
				<dd>
					<div class="c-form1__input">
						<input type="text" name="" value="" size="40">
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="c-form1__required">E-MAIL</dt>
				<dd>
					<div class="c-form1__input">
						<input type="email" name="" value="" size="40">
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="c-form1__required">お問い合わせ内容</dt>
				<dd>
					<div class="c-form1__input">
						<textarea name="content" cols="40" rows="1"></textarea>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form1__btn">
			<button name="__submit__" type="submit">入力内容を確認する</button>
		</div>
	</form>
</div>
<script>
	$(function(){
		$('.c-form1__input input, .c-form1__input textarea').focus(function(){
			$(this).css('background-color','#FFF');
		});
		$('.c-form1__input input, .c-form1__input textarea').blur(function(){
			if($(this).val()!=''){
				$(this).css('background-color','#FFF');
			}else{
				$(this).css('background-color','#EFEFEF');
			}
		});
	});
</script>
</section>
<!-- c-form2 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form2
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form2">
	<form action="" method="post" class="c-form2">
		<p class="c-form2__text1">お問い合わせ内容を選択してください</p>
		<ul class="c-form2__list">
            <li>
            	<label>
            		<input type="checkbox" name="" value="" checked="">
            		<span>オフィスのご入居について</span>
            	</label>
            </li>
            <li>
            	<label>
            		<input type="checkbox" name="" value="">
            		<span>オフィスの見学について</span>
            	</label>
            </li>
            <li>
            	<label>
            		<input type="checkbox" name="" value="">
            		<span>お仕事のご依頼について</span>
            	</label>
            </li>
            <li>
            	<label>
            		<input type="checkbox" name="" value="">
            		<span>協業・共創について</span>
            	</label>
            </li>
          </ul>
          <ul class="c-form2__input">
          	<li>
          		<label>
          			<span>姓</span>
          			<input type="text" name="" required="">
          		</label>
          	</li>
          	<li>
          		<label>
          			<span>名</span>
          			<input type="text" name="" required="">
          		</label>
          	</li>
          	<li>
          		<label>
          			<span>電話番号</span>
          			<input type="text" name="" required="">
          		</label>
          	</li>
          	<li>
          		<label>
          			<span>メールアドレス</span>
          			<input type="email" name="" required="">
          		</label>
          	</li>
          	<li>
          		<label>
          			<span>お問い合わせ内容</span>
          			<textarea name=""></textarea>
          		</label>
          	</li>
          </ul>
          <div class="c-form2__btn">
          	<button name="__submit__" type="submit">SEND</button>
          </div>
	</form>
</div>
</section>
<!-- c-form3 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form3
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form3">
	<form action="" method="post" class="c-form3">
		<div class="c-form3__table">
			<dl>
				<dt class="c-form3__required">お名前</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt class="c-form3__required">フリガナ</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt class="c-form3__required">メールアドレス</dt>
				<dd>
					<input type="email" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>電話番号</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>ご住所</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl class="text-top">
				<dt class="c-form3__required">お問い合わせ内容</dt>
				<dd>
					<textarea name="" cols="40" rows="10"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form3__btn">
			<button name="__submit__" type="submit">送　信</button>
		</div>
	</form>
</div>
</section>
<!-- c-form4 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form4
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form4">
	<form action="" method="post" class="c-form4">
		<div class="c-form4__table">
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">お名前</p>
						<span class="F4-label">必須</span>
					</div>
				</dt>
				<dd>
					<div class="c-form4__w1">
						<input type="text" name="" placeholder="例）坂本 太郎">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">フリガナ</p>
						<span class="F4-label">必須</span>
					</div>
				</dt>
				<dd>
					<div class="c-form4__w1">
						<input type="text" name="" placeholder="例）サカモト タロウ">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">メールアドレス</p>
						<span class="F4-label">必須</span>
					</div>
				</dt>
				<dd>
					<div class="c-form4__fullw">
						<ul class="c-form4__list1">
							<li>
								<input type="email" name="" placeholder="例）sakamoto@example.co.jp">
							</li>
							<li>
								<input type="text" name="" placeholder="例）確認のため再度入力してください">
							</li>
						</ul>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">電話番号</p>
						<span class="F4-label">必須</span>
					</div>
				</dt>
				<dd>
					<div class="c-form4__w1">
						<input type="tel" name="" placeholder="例）0312345678">
						<p class="c-form4__text2">※ハイフン無しで市外局番から入力ください</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">住所</p>
						<span class="F4-label">必須</span>
					</div>
				</dt>
				<dd>
					<ul class="c-form4__list2">
						<li>
							<p class="c-form4__text3">郵便番号</p>
							<input type="email" name="" placeholder="例）1230012">
							<p class="c-form4__text2">※ハイフンなし</p>
						</li>
						<li>
							<p class="c-form4__text3">都道府県</p>
							<div class="c-form4__select">
								<select>
									<option value="">選択してください</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
								</select>
							</div>
						</li>
					</ul>
					<ul class="c-form4__list1 c-form4__w2">
						<li>
							<p class="c-form4__text3">市区町村番地</p>
							<input type="email" name="">
						</li>
						<li>
							<p class="c-form4__text3">建物名・部屋番号</p>
							<input type="text" name="">
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">生年月日</p>
						<span class="F4-label F4-label--color">任意</span>
					</div>
				</dt>
				<dd>
					<ul class="c-form4__list3">
						<li class="c-form4__w3">
							<input type="text" name="">
							<span>年</span>
						</li>
						<li class="c-form4__w4">
							<input type="text" name="">
							<span>月</span>
						</li>
						<li class="c-form4__w4">
							<input type="text" name="">
							<span>日</span>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">性別</p>
						<span class="F4-label F4-label--color">任意</span>
					</div>
				</dt>
				<dd>
					<ul class="c-form4__list4">
						<li>
							<label>
								<input type="radio" name="group1">
								<span>男性</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="group1">
								<span>女性</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form4__ttl">
						<p class="c-form4__text1">お問い合わせ内容 </p>
						<span class="F4-label">任意</span>
					</div>
				</dt>
				<dd>
					<textarea name="" cols="40" rows="10"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form4__confirm">
			<p class="c-form4__text4">「<a href="#">個人情報の取り扱いについて</a>」をお読みいただき、<br>同意いただける方は下記にチェックを入れ「入力内容を確認する」ボタンを押してください。</p>
			<div class="c-form4__check">
				<label>
            		<input type="checkbox" name="" value="" id="checkf4">
            		<span>個人情報の取り扱いについて同意する</span>
            	</label>
			</div>
		</div>
		<div class="c-form4__btn">
			<button name="__submit__" type="submit" disabled="disabled" id="submitf4"><span>入力内容を確認する</span></button>
		</div>
		<script>
			$(document).ready(function(){
				$("#checkf4").click(function(){
					if($(this). prop("checked") == true){
						$('#submitf4').removeAttr("disabled", '');
					} else{
						$('#submitf4').attr("disabled", 'disabled');
					}
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form5 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form5
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form5">
	<form action="" method="post" class="c-form5">
		<div class="c-form5__table">
			<dl>
				<dt>お名前</dt>
				<dd>
					<input type="text" name="" placeholder="例）不破 太郎">
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス</dt>
				<dd>
					<input type="email" name="" placeholder="例）sample@fuwa.jp">
				</dd>
			</dl>
			<dl>
				<dt>お問い合わせ内容</dt>
				<dd>
					<textarea name="" cols="40" rows="10" placeholder="お問い合わせ内容を入力してください"></textarea>
				</dd>
			</dl>
		</div>
		<p class="c-form5__txt1">
			<span>個人情報の取扱いについて</span>
			お客さまの個人情報はお問い合わせに対する返信の目的でのみ利用し、当社にて適切に管理します。法令などにより開示を求められた場合を除き、お客さまの同意無しに第三者に開示・提供することはありません。
		</p>
		<div class="c-form5__check">
			<label>
				<input type="checkbox" name="">
				<span>確認ページはございません。ご入力頂いた内容に誤りが無いかご確認いただき、チェックを入れてください。</span>
			</label>
		</div>
		<div class="c-form5__btn">
			<button name="__submit__" type="submit">送信する</button>
		</div>
		<script>
			$(function(){
				$('.c-form5__table dd input, .c-form5__table dd textarea').focus(function(){
					$(this).css('border','1px solid #A9E2F3');
				});
				$('.c-form5__table dd input, .c-form5__table dd textarea').blur(function(){
					if($(this).val()!=''){
						$(this).css('border','1px solid #A9E2F3');
					}else{
						$(this).css('border','1px solid #f5f5f5');
					}
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form6 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form6
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form6">
	<form action="" method="post" class="c-form6">
		<div class="c-form6__cont1">
			<div class="c-form6__left">
				<h2 class="c-form6__ttl">CONTACT</h2>
				<div class="c-form6__table">
					<dl>
						<dt><label for="name">お名前</label></dt>
						<dd>
							<input type="text" name="" value="" id="name" placeholder="Name">
						</dd>
					</dl>
					<dl>
						<dt><label for="mail">メールアドレス</label></dt>
						<dd>
							<input type="text" name="" value="" id="mail" placeholder="sample@rinn.co.jp">
						</dd>
					</dl>
					<dl>
						<dt><label for="subject">件名</label></dt>
						<dd>
							<input type="text" name="" value="" id="subject" placeholder="Subject">
						</dd>
					</dl>
				</div>
			</div>
			<div class="c-form6__right">
				<textarea name="" cols="50" rows="5" placeholder="Message here"></textarea>
			</div>
		</div>
		<div class="c-form6__cont2">
			<label>
				<input type="checkbox" name="">
				<div class="c-form6__cont2__text"><a href="#">プライバシーポリシー</a>に同意します</div>
			</label>
			<div class="c-form6__btn">
				<button name="__submit__" type="submit">
					<span class="c-form6__btn__bg"></span>
					<span class="c-form6__btn__txt">Submit</span>
				</button>
			</div>
		</div>
		<script>
			$(function(){
				$('.c-form6__btn').hover(function(){
					$(this).toggleClass('is-hover');
				});
				$('.c-form6__btn').mouseleave(function() {
					var n =$(this);
	           	 	n.addClass("is-leave"),setTimeout(function(){
	            	n.removeClass("is-leave")}, 400)
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form7 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form7
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form7">
	<form action="" method="post" class="c-form7">
		<ul class="c-form7__list">
			<li>
				<div class="c-form7__select">
					<select>
						<option value="">Topic</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
					</select>
				</div>
			</li>
			<li>
				<label for="input1">
					<span>Company</span>
				</label>
				<input type="text" name="" value="" id="input1">
			</li>
			<li>
				<label for="input2">
					<span><i>*</i>Name</span>
				</label>
				<input type="text" name="" value="" id="input2">
			</li>
			<li>
				<label for="input3">
					<span><i>*</i>E-mail</span>
				</label>
				<input type="text" name="" value="" id="input3">
			</li>
			<li>
				<label for="input4">
					<span>Tel</span>
				</label>
				<input type="text" name="" value="" id="input4">
			</li>
			<li>
				<label for="input5">
					<span>URL</span>
				</label>
				<input type="text" name="" value="" id="input5">
			</li>
			<li>
				<label for="textarea1">
					<span>DescriptionL</span>
				</label>
				<textarea name="" cols="50" rows="5" id="textarea1"></textarea>
			</li>
		</ul>
		 <div class="c-form7__btn">
            <button name="__submit__" type="submit">Confirm</button>
        </div>
	</form>
	<script>
		$(function(){
			$('.c-form7__list li input, .c-form7__list li textarea').focus(function(){
				$(this).css('border','1px solid #2E64FE');
				$(this).prev('.c-form7__list li label').addClass('is-hidden');
			});
			$('.c-form7__list li input, .c-form7__list li textarea').blur(function(){
				if($(this).val()!=''){
					$(this).css('border','1px solid #2E64FE');
					$(this).prev('.c-form7__list li label').addClass('is-hidden');
				}else{
					$(this).css('border','1px solid #c8cbcc');
					$(this).prev('.c-form7__list li label').removeClass('is-hidden');
				}
			});
		});
	</script>
</div>
</section>
<!-- c-form8 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form8
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form8">
	<form action="" method="post" class="c-form8">
		<div class="c-form8__table">
			<dl>
				<dt>お 名 前（※）</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>フリガナ（※）</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>ご 住 所</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>電話番号</dt>
				<dd>
					<ul class="c-form8__list">
						<li><input type="text" name="" value="" maxlength="5"><span>-</span></li>
						<li><input type="text" name="" value="" maxlength="4"><span>-</span></li>
						<li><input type="text" name="" value="" maxlength="4"></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス（※）</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス確認（※）</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>お問い合わせ内容</dt>
				<dd>
					<textarea name="" cols="50" rows="10" id="textarea1"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form8__btn">
			<button name="__submit__" type="submit">入力内容を確認する</button>
		</div>
	</form>
</div>
</section>
<!-- c-form9 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form9
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form9">
	<form action="" method="post" class="c-form9">
		<div class="c-form9__table">
			<dl>
				<dt>
					<label for="f9-1">お名前<span>（必須）</span></label>
				</dt>
				<dd>
					<input type="text" id="f9-1" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<label for="f9-2">電話番号</label>
				</dt>
				<dd>
					<input type="text" id="f9-2" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<label for="f9-3">Eメール<span>（必須）</span></label>
				</dt>
				<dd>
					<input type="text" id="f9-3" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt><label for="f9-4">お問い合わせ内容<span>（必須）</span></label></dt>
				<dd>
					<textarea name="" id="f9-4" required=""></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form9__btn">
			<button name="__submit__" type="submit"><span>送信する</span></button>
		</div>
		<script>
			$(function(){
				$('.c-form9__table dd input, .c-form9__table dd textarea').focus(function(){
					$(this).css('border','1px solid #A9E2F3');
				});
				$('.c-form9__table dd input, .c-form9__table dd textarea').blur(function(){
					if($(this).val()!=''){
						$(this).css('border','1px solid #A9E2F3');
					}else{
						$(this).css('border','1px solid #f5f5f5');
					}
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form10 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form9
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form10">
	<form action="" method="post" class="c-form10">
		<div class="c-form10__cont">
			<p class="c-form10__ttl1">Enquiry</p>
			<div class="c-form10__input">
				<input type="text" name="" placeholder="Full Name *">
			</div>
			<div class="c-form10__input">
				<input type="text" name="" placeholder="Email Address *">
			</div>
			<div class="c-form10__input">
				<input type="text" name="" placeholder="Telephone">
			</div>
			<div class="c-form10__input">
				<textarea name="" placeholder="What can we help you with? *"></textarea>
			</div>
			<div class="c-form10__check">
				<label>
					<input type="checkbox" name="" value="">
					<span>I consent to you storing and using my <br>information to get back in touch with me</span>
				</label>
			</div>
			<div class="c-form10__btn">
				<button name="__submit__" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>
</section>
<!-- c-form11 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form11
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form11">
	<form action="" method="post" class="c-form11">
		<ul class="c-form11__input">
			<li class="is-error">
				<label for="f11-1"><span>Name</span></label>
				<input type="text" id="f11-" name="">
			</li>
			<li>
				<label for="f11-2"><span>Email address</span></label>
				<input type="text" id="f11-2" name="">
			</li>
			<li>
				<label for="f11-3"><span>Company</span></label>
				<input type="text" id="f11-3" name="">
			</li>
			<li>
				<label for="f11-4"><span>Phone</span></label>
				<input type="text" id="f11-4" name="">
			</li>
			<li class="c-form11__last is-error">
				<select class="c-form11__select">
					<option value="hide">State</option>
					<option value="">ACT</option>
					<option value="">NSW</option>
					<option value="">NT</option>
				</select>
			</li>
		</ul>
		<div class="c-form11__txt">
			<textarea name="" placeholder="I'd like to enquire about"></textarea>
			<div class="c-form11__btn">
				<button name="__submit__" type="submit">SEND</button>
			</div>
		</div>
	</form>
	<script>
		$('.c-form11__select').each(function(){
			var $this = $(this), numberOfOptions = $(this).children('option').length;
			$this.addClass('select-hidden'); 
			$this.wrap('<div class="select"></div>');
			$this.after('<div class="select-styled"></div>');
			var $styledSelect = $this.next('div.select-styled');
			$styledSelect.text($this.children('option').eq(0).text());
			var $list = $('<ul />', {
				'class': 'select-options'
			}).insertAfter($styledSelect);
			for (var i = 0; i < numberOfOptions; i++) {
				$('<li />', {
					text: $this.children('option').eq(i).text(),
					rel: $this.children('option').eq(i).val()
				}).appendTo($list);
			}
			var $listItems = $list.children('li');
			$styledSelect.click(function(e) {
				e.stopPropagation();
				$('div.select-styled.active').not(this).each(function(){
					$(this).removeClass('active').next('ul.select-options').hide();
				});
				$(this).toggleClass('active').next('ul.select-options').toggle();
			});
			$listItems.click(function(e) {
				e.stopPropagation();
				$styledSelect.text($(this).text()).removeClass('active');
				$this.val($(this).attr('rel'));
				$list.hide();
			});
			$(document).click(function() {
				$styledSelect.removeClass('active');
				$list.hide();
			});
		});
		$(function(){
			$('.c-form11__input li input').focus(function(){
				$(this).prev('.c-form11__input li label').addClass('is-change');
			});
			$('.c-form11__input li input').blur(function(){
				if($(this).val()!=''){
					$(this).prev('.c-form11__input li label').addClass('is-change');
				}else{
					$(this).prev('.c-form11__input li label').removeClass('is-change');
				}
			});
		});
	</script>
</div>
</section>
<!-- c-form12 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form12
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form12">
	<form action="" method="post" class="c-form12">
		<p class="c-form12__ttl">Contact Form</p>
		<div class="c-form12__tb">
			<dl>
				<dt>Name<span>*</span></dt>
				<dd>
					<input type="text" name="" placeholder="Enter your name">
				</dd>
			</dl>
			<dl>
				<dt>Email<span>*</span></dt>
				<dd>
					<input type="text" name="" placeholder="Enter your email">
				</dd>
			</dl>
			<dl>
				<dt>Subject</dt>
				<dd>
					<input type="text" name="" placeholder="Enter subject">
				</dd>
			</dl>
			<dl>
				<dt>Message<span>*</span></dt>
				<dd>
					<textarea name="" placeholder="Please send us a message"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form12__btn">
			<button name="__submit__" type="submit"><span>Send</span></button>
		</div>
	</form>
</div>
</section>
<!-- c-form13 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form13
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form13">
	<form action="" method="post" class="c-form13">
		<table class="c-form13__table">
			<tr>
				<th>
					<p class="c-form13__ttl">お名前</p>
					<p class="c-form13__sub">※</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="35" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">フリガナ</p>
					<p class="c-form13__sub">※</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="35" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">郵便番号</p>
					<p class="c-form13__sub">【半角数字 ハイフンなし】</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="25" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">ご住所</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="50" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">メールアドレス</p>
					<p class="c-form13__sub">※</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="35" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">電話番号</p>
					<p class="c-form13__sub">【半角数字 ハイフンなし】</p>
				</th>
				<td>
					<div class="c-form13__input">
						<input type="text" name="" size="30" value="">
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">お問い合わせ項目</p>
					<p class="c-form13__sub">※</p>
				</th>
				<td>
					<div class="c-form13__check">
						<label><input type="checkbox" name="" value="">オンラインショップについて</label>
						<label><input type="checkbox" name="" value="">商品について</label>
						<label><input type="checkbox" name="" value="">ショップ情報について</label>
						<label><input type="checkbox" name="" value="">イベントについて</label>
						<label><input type="checkbox" name="" value="">その他</label>
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<p class="c-form13__ttl">お問い合わせ内容</p>
					<p class="c-form13__sub">※</p>
				</th>
				<td>
					<textarea rows="10" cols="50"></textarea>
				</td>
			</tr>
		</table>
		<div class="c-form13__btn">
			<button name="__submit__" type="submit">確認する</button>
		</div>
	</form>
</div>
</section>

<!-- c-form14 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form14
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form14">
	<form action="" method="post" class="c-form14">
		<div class="c-form14__table">
			<dl>
				<dt>
					<div class="c-form14__ttl">
						お名前<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">
						フリガナ<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">企業名</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">ご住所</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">お電話番号</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">
						メールアドレス<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">
						メールアドレス（確認）<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<input type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">
						項目<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__radio">
						<label>
							<input type="radio" name="radio">
							<span>商品について</span>
						</label>
						<label>
							<input type="radio" name="radio">
							<span>仕入れについて</span>
						</label>
						<label>
							<input type="radio" name="radio">
							<span>その他</span>
						</label>
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="top">
					<div class="c-form14__ttl">
						内容<span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__input">
						<textarea name="" value=""></textarea>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form14__ttl">
						<a href="#" class="c-form14__link">プライバシーポリシー</a><span>※</span>
					</div>
				</dt>
				<dd>
					<div class="c-form14__txt">
						<p>プライバシーポリシーにご同意の上、送信してください。</p>
						<div class="c-form14__radio">
							<label>
								<input type="radio" name="radio">
								<span>同意する</span>
							</label>
						</div>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form14__btn">
			<p>※必須項目</p>
			<button name="__submit__" type="submit"><span>送信</span></button>
		</div>
	</form>
</div>
</section>

<!-- c-form15 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form15
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form15">
	<form action="" method="post" class="c-form15">
		<div class="c-form15__table">
			<dl>
				<dt>お名前<span>※</span></dt>
				<dd>
					<div class="c-form15__input">
						<input type="text" name="" value="" placeholder="(例)山田太郎">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>ふりがな<span>※</span></dt>
				<dd>
					<div class="c-form15__input">
						<input type="text" name="" value="" placeholder="(例)やまだたろう">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス<span>※</span></dt>
				<dd>
					<div class="c-form15__input">
						<input type="text" name="" value="" placeholder="例）email@akitaya.com">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス<span>※</span></dt>
				<dd>
					<div class="c-form15__input">
						<input type="text" name="" value="" placeholder="例）email@akitaya.com">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>電話番号</dt>
				<dd>
					<div class="c-form15__input">
						<input type="text" name="" value="" placeholder="(例)0354318850">
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="top">ご住所<span>※</span></dt>
				<dd>
					<ul class="c-form15__list">
						<li>
							<p>郵便番号</p>
							<input class="input1" type="text" name="" value="" placeholder="(例)1770033">
							<button>住所検索</button>
							<a href="#">郵便番号検索</a>
						</li>
						<li>
							<p>郵便番号</p>
							<div class="c-form15__select">
								<select>
									<option value="">都道府県</option>
									<option value="">北海道</option>
									<option value="">岩手県</option>
									<option value="">宮城県</option>
								</select>
							</div>
						</li>
						<li>
							<p>市区町村</p>
							<input class="input2" type="text" name="" value="" placeholder="(例)練馬区高野台">
						</li>
						<li>
							<p>町番地</p>
							<input class="input2" type="text" name="" value="" placeholder="(例)3-15-35">
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>お問い合わせ内容<span>※</span></dt>
				<dd>
					<div class="c-form15__radio">
						<label>
							<input type="radio" name="radio">
							<span>会社について</span>
						</label>
						<label>
							<input type="radio" name="radio">
							<span>商品について</span>
						</label>
						<label>
							<input type="radio" name="radio">
							<span>The 蔵について</span>
						</label>
						<label>
							<input type="radio" name="radio">
							<span>採用について</span>
						</label>
					</div>
				</dd>
			</dl>
			<dl>
				<dt class="top">お問い合わせ・ご要望<span>※</span></dt>
				<dd>
					<div class="c-form15__input">
						<textarea name="" placeholder="お問い合わせ・ご要望" value=""></textarea>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form15__btn">
			<button class="c-form15__btn1">リセット</button>
			<button class="c-form15__btn2">入力内容を確認する</button>
		</div>
	</form>
</div>
</section>

<!-- c-form16 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form16
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form16">
	<form action="" method="post" class="c-form16">
		<div class="c-form16__table">
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">必須</span>
						<p>お名前</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<input type="text" name="" value="" placeholder="姓名">
						<p>（全角）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">必須</span>
						<p>フリガナ</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<input type="text" name="" value="" placeholder="セイメイ">
						<p>（全角カナ）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color2">任意</span>
						<p>会社名</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<input type="text" name="" value="" placeholder="会社名">
						<p>（全角カナ）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">必須</span>
						<p>メールアドレス</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<div class="c-form16__input">
							<input type="text" name="" value="" placeholder="xxx@xxx.jp">
							<input type="text" name="" value="" placeholder="確認用">
						</div>
						<p>（半角英数字）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">任意</span>
						<p>電話番号</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<input type="text" name="" value="" placeholder="00-0000-0000">
						<p>（半角英数字）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">任意</span>
						<p>電話番号</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<input type="text" name="" value="" placeholder="00-0000-0000">
						<p>（半角英数字）</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">任意</span>
						<p>お問い合わせ項目</p>
					</div>
				</dt>
				<dd>
					<ul class="c-form16__check">
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>ご意見・ご感想</span>
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>物件紹介について</span>
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>資料のご請求</span>
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>メディア取材依頼について</span>
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>フランチャイズ店舗出店について</span>
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="" value="" >
								<span>その他</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form16__ttl">
						<span class="color1">任意</span>
						<p>お問い合わせ内容</p>
					</div>
				</dt>
				<dd>
					<div class="c-form16__cont1">
						<textarea name=""  value=""></textarea>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form16__txt">
			<p class="c-form16__ttl1">個人情報保護方針</p>
			<div class="c-form16__txtscroll">
				<p>ここに記すプライバシーポリシーは、弊社が個人情報の重要性を認識して、<br>
				個人情報保護法に基づき適切にこれを取り扱うことを明らかにするものです。</p>
				<p>
					<span>◯ 個人情報の定義</span>
					「個人情報」とは、生存する個人に関する情報であって、お名前・ご住所・電話番号・ＦＡＸ番号・電子メールアドレス等、個人を特定できるような各個人特有の情報を言います。
				</p>
				<p>
					<span>◯ 利用目的</span>
					当方は、お問い合わせをいただき、契約へと至った際にお客様の個人情報を収集することがございます。<br>
					収集するにあたっては利用目的を明記の上、適法かつ公正な手段によります。またお客様からのお問い合わせへの対応、当方からお客様へのお問い合わせ、その他お取引遂行にあたって必要な範囲で、また、ご案内状配布などのために、お客様の個人データを利用することがございます。
				</p>
				<p>
					<span>◯ 第三者への提供</span>
					当方ではお客様の個人情報を収集目的の範囲内で利用するとともに、適切な方法で管理し、特段の事情がない限り、お客様の承諾無く第三者に開示・提供を行うことはございません。ただし、保護法その他法令に別異の定めがある場合を除きます。なお、お客様との取引遂行にあたり、必要な外部委託を行う場合は第三者提供にはあたりません。
				</p>
				<p>
					<span>◯ プライバシーポリシーの変更</span>
					当方では、収集する個人情報の変更、利用目的の変更、またはその他プライバシーポリシーの変更を行う際は、当ページへの変更をもって公表とさせていただきます。
				</p>
				<p>
					<span>◯ 著作権</span>
					当サイト上で公開している情報・画像は著作権の保護の範囲内にあり、特別に許可されている場合を除き、事前に書面による許可を受けずに、このWebサイトの一部または全部を頒布または複製することは、その手段または形態に関係なく一切禁じられています。
				</p>
				<p>
					<span>◯ 個人情報・著作権に関するお問い合わせ</span>
					個人情報保護についてのお問い合わせは、下記までお願い致します。
				</p>
				<p>株式会社　ジラフホールディングス<br>
					〒790-0842　愛媛県松山市道後湯之町12-8<br>
				TEL : 089-945-1133</p>
			</div>
			<div class="c-form16__checkerror">
				<label>
					<input type="checkbox" name="" value="" >
					<span>株式会社ジラフホールディングスの個人情報保護方針に同意する</span>
				</label>
			</div>
		</div>
		<div class="c-form16__btn">
			<button>入力内容を確認する</button>
		</div>
	</form>
</div>
</section>

<!-- c-form17 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form17
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form17">
	<form action="" method="post" class="c-form17">
		<div class="c-form17__table">
			<dl>
				<dt>
					<div class="c-form17__ttl">
						御社名<span>必須</span>
					</div>
				</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form17__ttl">
						名前(漢字)<span>必須</span>
					</div>
				</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form17__ttl">
						名前(ひらがな)<span>必須</span>
					</div>
				</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form17__ttl">電話番号</div>
				</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form17__ttl">
						メールアドレス<span>必須</span>
					</div>
				</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form17__ttl">
						カテゴリ<span>必須</span>
					</div>
				</dt>
				<dd>
					<ul>
						<li>
							<label>
								<input type="radio" name="" value="">
								<span>マッチングエージェントへの取材依頼、プレス関連</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="" value="">
								<span>採用関連</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="" value="">
								<span>プロモーション・スポンサー関連</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="" value="">
								<span>その他のお問い合わせ・ご意見・ご要望</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="top">
					<div class="c-form17__ttl">
						記入欄<span>必須</span>
					</div>
				</dt>
				<dd>
					<textarea name=""  value=""></textarea>
				</dd>
			</dl>
		</div>
		<div id="recaptcha" class="g-recaptcha" data-sitekey="6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-" data-callback="vcc"></div>
		<div class="c-form17__btn">
			<button id="sbt" type="submit" value="">送信</button>
		</div>
	</form>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		var vcc = function(g_recaptcha_response) {
			var $captcha = $( '#recaptcha' );
		};
	</script>
</div>
</section>

<!-- c-form18 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form18
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form18">
	<form action="" method="post" class="c-form18">
		<div class="c-form18__table">
			<dl>
				<dt>お名前</dt>
				<dd>
					<input class="required" type="text" name="" value="" placeholder="（例）山田太郎">
				</dd>
			</dl>
			<dl>
				<dt>お電話番号</dt>
				<dd>
					<input type="text" name="" value="" placeholder="半角英数">
				</dd>
			</dl>
			<dl>
				<dt>ご住所</dt>
				<dd>
					<ul class="c-form18__list">
						<li>
							<span>市区町村</span>
							<div class="c-form18__select">
								<select>
									<option value="" selected="selected">- 選択して下さい -</option>
									<optgroup label="北海道・東北地方">
										<option value="">北海道</option>
										<option value="">青森県</option>
										<option value="">岩手県</option>
										<option value="">秋田県</option>
										<option value="">宮城県</option>
										<option value="">山形県</option>
										<option value="">福島県</option>
									</optgroup>
								</select>
							</div>
						</li>
						<li>
							<span>市区町村</span>
							<input type="text" name="" value="">
						</li>
						<li>
							<span>丁目番地</span>
							<input type="text" name="" value="">
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス</dt>
				<dd>
					<input class="required" type="text" name="" value="" placeholder="半角英数">
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス<br>（確認）</dt>
				<dd>
					<input class="required" type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>お問い合わせ内容</dt>
				<dd>
					<textarea name=""  value="" placeholder="お問い合わせ内容をお書きください"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form18__btn">
			<button>入力内容を確認する</button>
		</div>
	</form>
</div>
</section>
<!-- c-form19 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form19
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form19">
	<form action="" method="post" class="c-form19">
		<p class="c-form19__txt">メディアへの掲載歓迎いたします。下記のメールフォームよりお問い合わせください。<br>
			また、営業のメールはお断りしております。<br><span>●</span>は必須項目です。
		</p>
		<ul class="c-form19__input">
			<li>
				<p class="c-form19__ttl"><span>●</span>氏名（漢字</p>
				<input class="required" type="text" name="" value="" placeholder="例）田中 花子">
			</li>
			<li>
				<p class="c-form19__ttl"><span>●</span>氏名(フリガナ)</p>
				<input type="text" name="" value="" placeholder="例）タナカ ハナコ">
			</li>
			<li>
				<p class="c-form19__ttl"><span>●</span>会社名</p>
				<input type="text" name="" value="" placeholder="例）株式会社〇〇">
			</li>
			<li>
				<p class="c-form19__ttl"><span>●</span>部署名</p>
				<input type="text" name="" value="" placeholder="例）広報部">
			</li>
			<li>
				<p class="c-form19__ttl">電話番号</p>
				<input type="text" name="" value="" placeholder="例）000-0000-0000">
			</li>
			<li>
				<p class="c-form19__ttl"><span>●</span>メールアドレス</p>
				<input type="text" name="" value="" placeholder="例）sample@mail.com">
			</li>
		</ul>
		<div class="c-form19__cont">
			<p class="c-form19__ttl"><span>●</span>メディアの種類<small>※複数選択可</small></p>
			<div class="c-form19__check">
				<label>
					<input type="checkbox" name="" value="">
					<span>テレビ・ラジオ</span>
				</label>
				<label>
					<input type="checkbox" name="" value="">
					<span>雑誌</span>
				</label>
				<label>
					<input type="checkbox" name="" value="">
					<span>Web</span>
				</label>
				<label>
					<input type="checkbox" name="" value="">
					<span>その他</span>
				</label>
				<p>（下記フォームに記入お願いします）</p>
			</div>
			<input type="text" name="" value="">
		</div>
		<div class="c-form19__cont">
			<p class="c-form19__ttl"><span>●</span>お問い合わせ内容</p>
			<textarea name=""  value=""></textarea>
		</div>
		<div class="c-form19__capcha">
			<img src="/form/image/006.jpg" alt="">
			<p>表示された5文字の英数字を入力してください。</p>
			<input type="text" name="" value="">
		</div>
		<div class="c-form19__btn">
			<button><span>確認する</span></button>
		</div>
	</form>
</div>
</section>
<!-- c-form20 -->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form20
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form20">
	<form action="" method="post" class="c-form20">
		<div class="c-form20__table">
			<dl>
				<dt>ご連絡内容<span>必須</span></dt>
				<dd>
					<div class="c-form20__select">
						<select>
							<option value="">クレジット情報のご提供</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
						</select>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>ご返信先のメールアドレス<span>必須</span></dt>
				<dd>
					<label class="c-form20__check">
						 <input type="checkbox" name="" value="">
						 <span>BAUSに登録したメールアドレスを使用する</span>
					</label>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>お名前<span>必須</span></dt>
				<dd>
					<label class="c-form20__check">
						 <input type="checkbox" name="" value="">
						 <span>BAUSに登録したお名前（日本語表記）を使用する</span>
					</label>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>所属企業・団体</dt>
				<dd>
					<input type="text" name="" value="">
				</dd>
			</dl>
			<dl>
				<dt>クレジット情報<span>必須</span></dt>
				<dd>
					<textarea name=""  value="" placeholder="作品URLやクレジットリストをお知らせください。"></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form20__btn">
			<label class="c-form20__check center">
				<input type="checkbox" name="" value="" id="checkf20">
				<a href="#">利用規約</a>
				<span>と</span>
				<a href="#">プライバシーポリシー</a>
				<span>に同意する</span>
			</label>
			<button name="__submit__" type="submit" disabled="disabled" id="submitf20"><span>入力内容を確認する</span></button>
		</div>
		<script>
			$(document).ready(function(){
				$("#checkf20").click(function(){
					if($(this). prop("checked") == true){
						$('#submitf20').removeAttr("disabled", '');
					} else{
						$('#submitf20').attr("disabled", 'disabled');
					}
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form21-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form21
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form21">
	<form action="" method="post" class="c-form21">
		<div class="c-form21__table">
			<dl>
				<dt>お名前*</dt>
				<dd>
					<input type="text" name="" value="" placeholder="例）お名前">
				</dd>
			</dl>
			<dl>
				<dt>お電話</dt>
				<dd>
					<input type="text" name="" value="" placeholder="例）0954-45-2220">
				</dd>
			</dl>
			<dl>
				<dt>ご住所</dt>
				<dd>
					<input type="text" name="" value="" placeholder="例）佐賀県武雄市山内町大字犬走2271-4">
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス*</dt>
				<dd>
					<input type="text" name="" value="" placeholder="例）egg@ito-eggfarm.com">
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス*<span>（確認用）</span></dt>
				<dd>
					<input type="text" name="" value="" placeholder="例）egg@ito-eggfarm.com">
				</dd>
			</dl>
			<dl>
				<dt>メッセージ*</dt>
				<dd>
					<textarea name="" value=""></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form21__btn">
			<button name="__submit__" type="submit">お問い合わせを送信</button>
		</div>
	</form>
</div>
</section>
<!-- c-form22-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form22
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form22">
	<form action="" method="post" class="c-form22">
		<div class="c-form22__table">
			<dl>
				<dt>
					<div class="c-form22__ttl1">お名前<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<input class="w200" type="text" name="" value="" placeholder="姓">
						<input class="w200" type="text" name="" value="" placeholder="名">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">ふりがな<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<input class="w200" type="text" name="" value="" placeholder="せい">
						<input class="w200" type="text" name="" value="" placeholder="めい">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">性別</div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<label>
							<input type="radio" name="f22" value="" checked="checked">
							<span>女性</span>
						</label>
						<label>
							<input type="radio" name="f22" value="">
							<span>男性</span>
						</label>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">郵便番号<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<p class="c-form22__text">〒</p>
						<input class="w200" type="text" name="" value="">
					</div>
					<p class="c-form22__required">※半角数字の-(ハイフン)無しで入力してください。</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">住所1<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont2">
						<input class="w510" type="text" name="" value="" placeholder="都道府県">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">住所2<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont2">
						<input class="w510" type="text" name="" value="" placeholder="市区町村">
						<input class="w510" type="text" name="" value="" placeholder="番地">
						<input class="w510" type="text" name="" value="" placeholder="ビル名">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">電話番号<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<label>
							<input type="radio" name="f22" value="" checked="checked">
							<span>ご自宅</span>
						</label>
						<label>
							<input type="radio" name="f22" value="">
							<span>勤務先</span>
						</label>
						<label>
							<input type="radio" name="f22" value="">
							<span>携帯など</span>
						</label>
					</div>
					<div class="c-form22__cont1">
						<input class="w200" type="text" name="" value=""><span>-</span>
						<input class="w200" type="text" name="" value=""><span>-</span>
						<input class="w200" type="text" name="" value="">
					</div>
					<p class="c-form22__required">※半角数字で入力してください。</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">E-mailアドレス<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<input class="wfull" type="text" name="" value="">
						<p class="c-form22__text">確認のためもう一度入力してください。</p>
						<input class="wfull" type="text" name="" value="">
						<p class="c-form22__required">※「@mikihousetrade.co.jp」からのメールが受信できるようにお願いします</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">ご連絡方法<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<label>
							<input type="checkbox" name="" value="" checked="checked">
							<span>メール</span>
						</label>
						<label>
							<input type="checkbox" name="" value="">
							<span>お電話</span>
						</label>
						<label>
							<input type="checkbox" name="" value="">
							<span>連絡不要</span>
						</label>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">お問い合わせ件名<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<input class="wfull" type="text" name="" value="">
					</div>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form22__ttl1">お問い合わせ内容<span>＊</span></div>
				</dt>
				<dd>
					<div class="c-form22__cont1">
						<textarea name="" value=""></textarea>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form22__btn">
			<button>確認</button>
		</div>
	</form>
</div>
</section>
<!-- c-form23-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form23
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form23">
	<form action="" method="post" class="c-form23">
		<div class="c-form23__radio">
			<p>[ ご希望のご連絡方法 ]</p>
			<label>
				<input type="radio" name="f23" value="">
				<span>お電話でご連絡をご希望</span>
			</label>
			<label>
				<input type="radio" name="f23" value="">
				<span>メールでご連絡をご希望</span>
			</label>
		</div>
		<div class="c-form23__cont">
			<div class="c-form23__input">
				<input type="text" name="" value="" placeholder="お名前">
				<input type="text" name="" value="" placeholder="お電話番号">
				<input type="text" name="" value="" placeholder="ご住所（任意）">
				<input type="text" name="" value="" placeholder="メールアドレス">
				<input type="text" name="" value="" placeholder="メールアドレス（確認用）">
			</div>
			<textarea name="" value="" placeholder="お問い合わせ内容"></textarea>
		</div>
		<div class="c-form23__btn">
			<button>メッセージを送信</button>
		</div>
	</form>
</div>
</section>
<!-- c-form24-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form24
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form24">
	<form action="" method="post" class="c-form24">
		<h2>MAIL FORM</h2>
		<p>お問い合せ内容により回答までにお時間をいただく場合がございます。ご了承ください。</p>
		<dl>
			<dt>NAME*</dt>
			<dd>
				<input type="text" name="" value="">
			</dd>
		</dl>
		<dl>
			<dt>E-MAIL*</dt>
			<dd>
				<input type="text" name="" value="">
			</dd>
		</dl>
		<dl>
			<dt>TEL</dt>
			<dd>
				<input type="text" name="" value="">
			</dd>
		</dl>
		<dl>
			<dt>MESSAGE*</dt>
			<dd>
				<textarea name="" value=""></textarea>
			</dd>
		</dl>
		<div class="c-form24__btn">
			<button>Confirm</button>
		</div>
		<script>
			$(function(){
				$('.c-form24 dd input, .c-form24 dd textarea').focus(function(){
					$(this).css('border','1px solid #A9E2F3');
				});
				$('.c-form24 dd input, .c-form24 dd textarea').blur(function(){
					if($(this).val()!=''){
						$(this).css('border','1px solid #A9E2F3');
					}else{
						$(this).css({
							"border-top": "0",
							"border-left": "0",
							"border-right": "0",
							"border-bottom": "1px solid rgba(255,255,255,0.2)"
						});
					}
				});
			});
		</script>
	</form>
</div>
</section>
<!-- c-form25-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form25
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form25">
	<form action="" method="post" class="c-form25">
		<div class="c-form25__ttl">ご用件<span>必須</span></div>
		<div class="c-form25__radio">
			<label>
				<input type="radio" name="f25" value="">
				<span>案件のご相談</span>
			</label>
			<label>
				<input type="radio" name="f25" value="">
				<span>採用について</span>
			</label>
			<label>
				<input type="radio" name="f25" value="">
				<span>その他</span>
			</label>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">会社名</div>
			<div class="c-form25__input">
				<input class="fullw" type="text" name="" value="">
			</div>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">お名前<span>必須</span></div>
			<div class="c-form25__input">
				<input class="w360" type="text" name="" value="">
				<input class="w360" type="text" name="" value="">
			</div>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">フリガナ<span>必須</span></div>
			<div class="c-form25__input">
				<input class="w360" type="text" name="" value="">
				<input class="w360" type="text" name="" value="">
			</div>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">電話番号<span>必須</span></div>
			<div class="c-form25__input">
				<input class="fullw" type="text" name="" value="">
				<p>日中ご連絡の取りやすい番号を入力してください。</p>
			</div>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">E-mail（PC）<span>必須</span></div>
			<div class="c-form25__input">
				<input class="fullw" type="text" name="" value="">
			</div>
		</div>
		<div class="c-form25__cont">
			<div class="c-form25__ttl">お問い合わせ内容<span>必須</span></div>
			<div class="c-form25__input">
				<textarea name="" value=""></textarea>
			</div>
		</div>
		<div class="c-form25__btn">
			<button class="c-form25__btn1">リセット</button>
			<button class="c-form25__btn2">確認画面へ →</button>
		</div>
	</form>
</div>
</section>
<!-- c-form26-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form26
////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-form26">
		<form action="" method="post" class="c-form26">
			<div class="c-form26__table">
				<dl>
					<dt>お名前 ※</dt>
					<dd>
						<input type="text" name="" value="">
					</dd>
				</dl>
				<dl>
					<dt>電話番号 ※</dt>
					<dd>
						<input type="text" name="" value="">
					</dd>
				</dl>
				<dl>
					<dt>メールアドレス ※</dt>
					<dd>
						<input type="text" name="" value="">
					</dd>
				</dl>
				<dl>
					<dt>メールアドレス確認用 ※</dt>
					<dd>
						<input type="text" name="" value="">
					</dd>
				</dl>
				<dl>
					<dt>お問い合わせ内容 ※</dt>
					<dd>
						<textarea name="" value=""></textarea>
					</dd>
				</dl>
			</div>
			<div class="c-form26__btn">
				<button>確認画面に進む</button>
			</div>
		</form>
	</div>
</section>
<!-- c-form27-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form27
////////////////////////////////////////////////////// ?>
	<div class="c-gl-box" data-name="c-form27">
		<form action="" method="post" class="c-form27">
			<div class="c-form27__table">
				<div class="c-form27__input">
					<label for="f27-1">お名前<span>（必須）</span>
					</label>
					<input id="f27-1" type="text" name="">
				</div>
				<div class="c-form27__input">
					<label for="f27-2">電話番号</label>
					<input id="f27-2" type="text" name="">
				</div>
				<div class="c-form27__input">
					<label for="f27-3">Eメール<span>（必須）</span></label>
					<input id="f27-3" type="text" name="">
				</div>
				<div class="c-form27__input">
					<label for="f27-4">お問い合わせ内容<span>（必須）</span></label>
					<textarea id="f27-4" required=""></textarea>
				</div>
			</div>
			<div class="c-form27__btn">
				<button><span>送信する</span></button>
			</div>
		</form>
	</div>
</section>
<!-- c-form28-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form28
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form28">
	<form action="" method="post" class="c-form28">
		<div class="c-form28__table">
			<dl>
				<dt>お問い合わせ内容<span>※</span></dt>
				<dd>
					<textarea required=""></textarea>
				</dd>
			</dl>
			<dl>
				<dt>お名前</dt>
				<dd>
					<div class="c-form28__input">
						<input type="text" name="">
						<p>例）保険 太郎</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>メールアドレス</dt>
				<dd>
					<div class="c-form28__input">
						<input type="text" name="">
						<p>例）info@hoken-koubou-h.jp</p>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>電話番号</dt>
				<dd>
					<div class="c-form28__input">
						<input type="text" name="">
						<p>例）058-324-9608</p>
					</div>
				</dd>
			</dl>
		</div>
		<div class="c-form28__check">
			<label>
				<input type="checkbox" name="">
				<span>確認ページはございません。入力内容をご確認いただき、個人情報の取扱にご同意いただけましたらチェックを入れてください。</span>
			</label>
		</div>
		<div class="c-form28__btn">
			<button></button>
		</div>
	</form>
</section>
<!-- c-form29-->
<section class="l-gl-box-wrap">
<?php ////////////////////////////////////////////////
// c-form29
////////////////////////////////////////////////////// ?>
<div class="c-gl-box" data-name="c-form29">
	<form action="" method="post" class="c-form29">
		<div class="c-form29__table">
			<dl>
				<dt>
					<div class="c-form29__ttl">
						お名前<span>必須</span>
					</div>
				</dt>
				<dd>
					<input class="w334" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">
						フリガナ<span>必須</span>
					</div>
				</dt>
				<dd>
					<input class="w334" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">ご住所</div>
				</dt>
				<dd>
					<p>▼都道府県名</p>
					<div class="c-form29__select">
						<select>
							<option value="">---</option>
							<option value="兵庫県">兵庫県</option>
							<option value="大阪府">大阪府</option>
							<option value="奈良県">奈良県</option>
						</select>
					</div>
					<p>▼市町村、番地</p>
					<input class="w383" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">電話番号</div>
				</dt>
				<dd>
					<input class="w334" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">FAX番号</div>
				</dt>
				<dd>
					<input class="w334" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">メールアドレス<span>必須</span></div>
				</dt>
				<dd>
					<input class="w334" type="text" name="">
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">お問い合わせ内容<span>必須</span></div>
				</dt>
				<dd>
					<ul class="c-form29__radio1">
						<li>
							<label>
								<input type="radio" name="f29" checked="checked">
								<span>リフォームに関する御相談</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29">
								<span>新築に関するご相談</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29">
								<span>建具に関するご相談</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29">
								<span>見積もり依頼</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29">
								<span>設備の修理依頼</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29">
								<span>その他</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">ご希望の連絡方法</div>
				</dt>
				<dd>
					<ul class="c-form29__radio2">
						<li>
							<label>
								<input type="radio" name="f29-2" checked="checked">
								<span>電話</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29-2">
								<span>FAX</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="f29-2">
								<span>メール</span>
							</label>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="c-form29__ttl">
						詳しい内容を<br>お聞かせください。<span>必須</span>
					</div>
				</dt>
				<dd>
					<textarea required=""></textarea>
				</dd>
			</dl>
		</div>
		<div class="c-form29__btn">
			<button></button>
		</div>
	</form>
</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>