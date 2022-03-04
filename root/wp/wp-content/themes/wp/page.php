<?php //get_header(); ?>

<?php

//管理画面で編集するページ
// if(
// 	is_page("xxx")
// ) {
// while (have_posts()){ the_post();the_content();}

// //テンプレート埋め込み
// }else{

// include(get_template_directory().'/page/'.get_page($page_id)->post_name.'.php');

// }
$pageName = get_page($page_id)->post_name;
$pageChild = get_page($page_id)->post_parent;
$parent = get_the_title( $pageChild);
//if(($pageName === 'confirm' || $pageName === 'thanks') && $pageChild ) {
include(get_template_directory().'/page/'.$pageName.'.php');
?>


<?php //get_footer(); ?>