<?php
$pageid = "wp-mwwpform";
$wphead = "on";
$wpfooter = "on";
$scss = "dev/scss/3_project/_wp-mwwpform.scss";
$myPath = __FILE__;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>


<article class="p-mwwpform001">

<h1 class="c-gl-title2">自動住所</h1>



<?php ////////////////////////////////////////////////////
// フォームを表示
////////////////////////////////////////////////////////// ?>
<section class="p-mwwpform001-1">
<?php get_mwwpform_auto_address('48'); ?>
</section>




<?php ////////////////////////////////////////////////////
// 中身
////////////////////////////////////////////////////////// ?>
<section class="p-mwwpform001-2">

<p class="p-mwwpform001-2__text1">MW WP FORM 中身</p>

<?php
$the_query = new WP_Query(array(
	'post_type' => 'mw-wp-form',
	'name' => 'form001'
));
$the_query->the_post();$postId=$id;
echo '<textarea class="c-gl-code1">'.htmlspecialchars(get_the_content()).'</textarea>';
?>


<p class="p-mwwpform001-2__text2"><a href="/wp/wp-admin/post.php?post=<?php echo $postId; ?>&action=edit" target="_blank">フォーム編集画面を表示</a></p>

</section>




<?php ////////////////////////////////////////////////////
// functionとか
////////////////////////////////////////////////////////// ?>
<section class="p-mwwpform001-3">

<p>function.phpにこれを追加 ↓ <a href="https://github.com/yubinbango/yubinbango" target="_blank">YubinBango</a>のJSを使用しています</p>

<textarea class="c-gl-code1">
//////////////////////////////////////////////////////////
// WM WP FORM　自動住所のあるフォームを生成
//////////////////////////////////////////////////////////
function get_mwwpform_auto_address($key){

	$content = do_shortcode('[mwform_formkey key="'.$key.'"]');;
	$content = str_replace( '<form ', '<form class="h-adr" ', $content );
	$content = str_replace( '</form>', '<input type="hidden" class="p-country-name" value="Japan"></form>', $content );
	$content = str_replace( '</form>', '<span class="p-country-name" style="display:none;">Japan</span></form>', $content );
	$content .= '<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>';

	echo $content;

}</textarea>

<br>
<br>

<p>フォームの表示するにはこれ↓</p>

<textarea class="c-gl-code1" style="min-height: 2em;">
&lt;?php get_mwwpform_auto_address('xxxxx'); ?&gt;
</textarea>

<br>
<br>
<p>「xxxxx」の部分にフォームのid番号を入れる。この場合は48を入れる。</p>
<img src="/wp-component/mwwpform/img/001.png">

</section>

</article>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>