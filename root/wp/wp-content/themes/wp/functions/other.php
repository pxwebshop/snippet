<?php

//////////////////////////////////////////////////////////
// DNSプリフェッチ用コードを削除
//////////////////////////////////////////////////////////
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		return array_diff( wp_dependencies_unique_hosts(), $hints );
	}
	return $hints;
}

//////////////////////////////////////////////////////////
//  wp-block-library-css を削除
//////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', function(){
	wp_dequeue_style( 'wp-block-library' );
} ,11);

//////////////////////////////////////////////////////////
// rel="canonical"を削除
//////////////////////////////////////////////////////////
remove_action('wp_head', 'rel_canonical');

//////////////////////////////////////////////////////////
// 短縮URLを削除
//////////////////////////////////////////////////////////
remove_action('wp_head', 'wp_shortlink_wp_head');

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

}
