<?php
$pageid = "font";
$scss = "dev/scss/3_project/_font.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="p-font">

<section class="p-font1">
	<div class="p-font1__img">
		<a href="/assets/img/font/015.png" target="_blank"><img src="/assets/img/font/015.png"></a>
	</div>
	<div class="p-font1__text">
		<h1>文字を画像にして表示する場合</h1>
		<p>左図の赤枠のような箇所は、以下の理由で<strong>「画像（PNG or SVG）」</strong>にします。</p>
		<ul>
			<li>文字にデザインが施されているため</li>
			<li>文字の配置も含めてデザインされているため</li>
			<li>テキストとCSSの組み合わせではデザイン再現が難しいため</li>
			<li>使用されているフォントが、有料フォントまたは一般的に利用されないフォントのため</li>
			<li>テキストにしないほうがWEBサイトの運用上の都合がよいため</li>
		</ul>
	</div>
</section>

<section class="p-font1">
	<div class="p-font1__img">
		<a href="/assets/img/font/016.png" target="_blank"><img src="/assets/img/font/016.png"></a>
	</div>
	<div class="p-font1__text">
		<h1>文字を画像にしないで表示する場合</h1>
		<p>左図の赤枠のような箇所は、以下の理由で<strong>「テキスト」</strong>にします。</p>
		<ul>
			<li>テキストにデザインが施されていないため</li>
			<li>CSSで再現できるデザインのため</li>
			<li>画像とテキストが分離しているデザインのため</li>
			<li>WordpressなどのCMSでテキストを出力すると思われる部分のため</li>
			<li>よくある標準のフォントのため</li>
		</ul>
	</div>
</section>

<section class="p-font1">
	<div class="p-font1__img">
		<a href="/assets/img/font/014.png" target="_blank"><img src="/assets/img/font/014.png"></a>
	</div>
	<div class="p-font1__text">
		<h1>慣れていないと、どのフォントを使えばいいのかわからない</h1>
		<p>デザインデータのフォント指定通りに「font-family」を指定すればよいのですが、そうではないパターンが多いです。<br>
			WEBフォントを使用する場合もあります。<br><br>
	例えば「Noto Sans」というフォント指定の場合はGoogle Fontsを使用を推奨します。</p>
	</div>
</section>

<section class="p-font1">
	<div class="p-font1__img">
		<a href="/assets/img/font/017.png" target="_blank"><img src="/assets/img/font/017.png"></a>
	</div>
	<div class="p-font1__text">
		<h1>明朝体(serif)はもっとよくわからない。</h1>
		<p>もし「リュウミン」または「Ryumin」が使われていた場合、それの代わりになるデバイスフォントを指定します。<br>
		「リュウミン」または「Ryumin」は有料のフォントのため、ほとんどのPCやスマートフォンにはインストールされていないためです。<br>
	<br>
↓↓↓↓↓↓↓↓↓ 正解がよくわからないと思うので、以下にフォント対応表を用意しました ↓↓↓↓↓↓↓↓↓</p>
	</div>
</section>

<section class="p-font2">
<table class="table is-striped">
	<thead>
		<tr>
			<th>Font name</th>
			<th>PSD example</th>
			<th>Best way & Reason</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Roboto</th>
			<td><img src="/assets/img/font/001.png"></td>
			<td>
				<a href="https://fonts.google.com/specimen/Roboto?selection.family=Roboto" target="_blank">Google Fonts 「Roboto」</a>
				<?php link_1(); ?>
			</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: 'Roboto', sans-serif;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: 'Roboto', sans-serif, "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", "メイリオ","Meiryo";
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Lato</th>
			<td>
				<img src="/assets/img/font/013.png">
			</td>
			<td>
				<a href="https://fonts.google.com/specimen/Lato" target="_blank">Google Fonts 「Lato」</a>
				<?php link_1(); ?>
			</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: 'Lato', sans-serif;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: 'Lato', sans-serif, "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", "メイリオ","Meiryo";
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Noto Sans<br>
			源ノ角ゴシック</th>
			<td>
				<img src="/assets/img/font/002.png">
				<img src="/assets/img/font/008.png">
			</td>
			<td>
				<a href="https://fonts.google.com/specimen/Noto+Sans+JP" target="_blank">Google Fonts 「Noto Sans JP」</a>
				<?php link_1(); ?>
			</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: 'Noto Sans JP', sans-serif;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: 'Noto Sans JP', "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", "メイリオ", "Meiryo", sans-serif ;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Meiryo<br>
			メイリオ</th>
			<td>
				<img src="/assets/img/font/004.png">
				<img src="/assets/img/font/009.png">
			</td>
			<td>Device font</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: "メイリオ", "Meiryo";</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: "メイリオ", "Meiryo", "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", sans-serif ;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Yu Gothic<br>
			游ゴシック</th>
			<td>
				<img src="/assets/img/font/005.png">
				<img src="/assets/img/font/006.png">
			</td>
			<td>Device font</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic";</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", "メイリオ", "Meiryo", sans-serif ;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Hiragino kaku<br>
				Hiragino Kaku Gothic<br>
				ヒラギノ角ゴ
			</th>
			<td>
				<img src="/assets/img/font/010.png">
			</td>
			<td>Device font</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							その個所にだけ
							<code class="prettyprint lang-css">font-family: "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro";</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", "メイリオ", "Meiryo", sans-serif ;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Kozuka Gothic<br>
				小塚ゴシック
			</th>
			<td>
				<img src="/assets/img/font/011.png">
			</td>
			<td>？</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							メイリオで代用する。<br>
							その個所にだけ
							<code class="prettyprint lang-css">font-family: "メイリオ", "Meiryo";</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">メイリオで代用する。<br>
							_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　font-family: "メイリオ", "Meiryo", "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", sans-serif ;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Yu Mincho<br>
			游明朝</th>
			<td>
				<img src="/assets/img/font/007.png">
			</td>
			<td>Device font</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way">
							@mixin mincho()を使う。<br>
							その個所にだけ
							<code class="prettyprint lang-css">@include mincho;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　@include mincho;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Ryumin<br>
			リュウミン</th>
			<td><img src="/assets/img/font/003.png"></td>
			<td>商用フォント</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way"><br>
							別のフォントで代用する。<br>
							@mixin mincho()を使う。<br>
							その個所にだけ
							<code class="prettyprint lang-css">@include mincho;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　@include mincho;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<th>Kozuka Mincho<br>
				小塚明朝
			</th>
			<td>
				<img src="/assets/img/font/012.png">
			</td>
			<td>？</td>
			<td>
				<ul>
					<li>
						<?php type_1(); ?>
						<div class="way"><br>
							別のフォントで代用する。<br>
							@mixin mincho()を使う。<br>
							その個所にだけ
							<code class="prettyprint lang-css">@include mincho;</code>
							を指定
						</div>
					</li>
					<li>
						<?php type_2(); ?>
						<div class="way">_reset.scssのfont-familyを変更する。
						<code class="prettyprint lang-css">
						body{<br>
							　　@include mincho;
							<br>}
						</code>
						</div>
					</li>
				</ul>
			</td>
		</tr>
	</tbody>
</table>










<br>





</section>
<?php
function type_1(){
	$html = '<div class="type type--1"><img src="/assets/img/font/014.png"></div>';
	echo $html;
}

function type_2(){
	$html = '<div class="type type--2"><img src="/assets/img/font/018.png"></div>';
	echo $html;
}

function link_1(){
	$html = '<div class="link1"><a href="https://saruwakakun.com/html-css/basic/google-fonts" target="_blank">参考：Google Fontsの使い方</a></div>';
	echo $html;
}

?>




</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>