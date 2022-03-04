<?php
/*
===============================================================================
  カスタム投稿設定ファイル
=============================================================================== */
function my_custompost() {

//////////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////////


$cp["label"]   = "People";
$cp["post_type"] = "people";

register_post_type($cp["post_type"], array(
'label' => $cp["label"],
'menu_icon'   => 'dashicons-admin-post',
'menu_position' => 5,
'has_archive' => true,
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => array( 'slug' => '', 'with_front' => false ),
'query_var' => true,
'supports' => array('title','thumbnail'),
'labels' => array (
'name' => $cp["label"],
'singular_name' => '',
'menu_name' => $cp["label"],
'add_new' => '新規追加',
'add_new_item' => $cp["label"].'を新規追加',
'edit' => 'Edit',
'edit_item' => $cp["label"].'を編集',
'new_item' => 'New '.$cp["label"],
'view' => $cp["label"].'を表示',
'view_item' => $cp["label"].'を表示',
'search_items' => $cp["label"].'を検索',
'not_found' => $cp["label"].'はありません',
'not_found_in_trash' => 'ゴミ箱は空です',
'parent' => 'Parent '.$cp["label"],
),) );

register_taxonomy( 'mt_cat', 'mt', array(
'label'        => 'カテゴリー',
'public'       => true,
'hierarchical' => true,
));

}
add_action( 'init', 'my_custompost', 0 );


// ?>

<?php
/* ===============================================================================
  カスタム投稿設定ファイル
=============================================================================== */

 /* 1.カスタム投稿の利用
   TRUE => 利用する　FASLE => 利用しない
------------------------------------------------------------------------------- */
define("CUSTOM_POST_USE", TRUE);

/* 2.カスタム投稿設定
------------------------------------------------------------------------------- */
if(CUSTOM_POST_USE){

	// function addPosts(){

	// 	//////////////////////////////////////////////////////////////////////////////////
	// 	//	■カスタム投稿表示設定
	// 	//	'title'				カスタム投稿名を指定する。
	// 	//	'slug'				URLなどに使用されるスラッグを指定する。
	// 	//	'supports'			投稿でサポートする機能。
	// 	//						（例）　array('author','title','editor','post-formats','comments','thumbnail')
	// 	//						author => 記事の投稿者の変更設定
	// 	//						comments => 対象のカスタム投稿記事でコメントを受け付けるかどうか
	// 	//						thumbnail => アイキャッチを設定出来るようになります
	// 	//	'taxonomy'			カスタムタクソノミーの設定。
	// 	//						使用する場合はタクソノミー名を、使用しない場合はfalseを入力する。
	// 	//						値をarrayで指定することで、タクソノミーを複数設定することも可能。
	// 	//						その場合、以下をarrayの値に指定する。
	// 	//						name => タクソノミー名の指定
	// 	//						label => 管理画面に表示されるタクソノミーのラベル
	// 	//						tag => タグとして使用する場合はtrue、カテゴリーとして使用する場合はfalse
	// 	//	'tag'				タグとして使用する場合はtrue、カテゴリーとして使用する場合はfalse
	// 	//
	// 	//	（例） カスタムタクソノミーを一つ使用する場合
	// 	//	$post_status = array(
	// 	//		array(
	// 	//			'title' => '新着情報',
	// 	//			'slug' => 'news',
	// 	//			'supports' => array('title', 'editor', 'post-formats'),
	// 	//			'taxonomy' => 'news_tax',
	// 	//			'tag' => false,
	// 	//		),
	// 	//	);
	// 	//
	// 	//	（例） カスタムタクソノミーを二つ以上使用する場合
	// 	//	$post_status = array(
	// 	//		array(
	// 	//			'title' => '施工実績',
	// 	//			'slug' => 'work',
	// 	//			'supports' => array('title', 'editor', 'post-formats'),
	// 	//			'taxonomy' => array(
	// 	//				array(
	// 	//					'name' => 'work_tax',
	// 	//					'label' => 'カテゴリー',
	// 	//					'tag' => false,
	// 	//				),
	// 	//				array(
	// 	//					'name' => 'work_tag',
	// 	//					'label' => 'タグ',
	// 	//					'tag' => true,
	// 	//				),
	// 	//			),
	// 	//		),
	// 	//	);
	// 	//////////////////////////////////////////////////////////////////////////////////

	// 	/* ----- カスタム投稿指定 ----- */
	// 	$post_status = array(
	// 		// array(
	// 		// 	'slug' => 'blog',
	// 		// 	'title' => 'blog',
	// 		// 	'rewrite' => array( 'slug' => '', 'with_front' => false ),
	// 		// 	'supports' => array('title', 'editor'),
	// 		// 	'taxonomy' => 'blog_tax',
	// 		//  	'hierarchical' => true,
	// 		// ),
	// 		array(
	// 			'title' => 'People',
	// 			'slug' => 'people',
	// 			'supports' => array('title'),
	// 			'taxonomy' => 'people_tax',
	// 		 	'tag' => false,
	// 		 	'rewrite' => array('slug' => 'people'),
	// 		 	'hierarchical' => true,
	// 		),
	// 	);

	// 	/* ----- カスタム投稿コア設定 ----- */
	// 	$custom_posts = array(
	// 		'tag' => false,
	// 		'public' => true,
	// 		'publicly_queryable' => true,
	// 		'show_ui' => true,
	// 		'query_var' => true,
	// 		'rewrite' => true,
	// 		'capability_type' => 'post',
	// 		'hierarchical' => false,
	// 		'menu_position' => 4,
	// 		'supports' => array('title', 'editor', 'post-formats','thumbnail'),
	// 		'has_archive' => true
	// 	);

	// 	/* ----- タクソノミーコア設定 ----- */
	// 	$tax = array(
	// 		'public' => true,
	// 		'show_ui' => true,
	// 	);

	// 	/* ----- 処理部分 ----- */
	// 	foreach($post_status as $val):
	// 		/* ----- カスタム投稿登録 ----- */
	// 		$labels = array(
	// 			'name' => _x($val['title'], 'post type general name'),
	// 			'singular_name' => _x($val['title'], 'post type singular name'),
	// 			'add_new' => _x($val['title'].'を追加', 'book'),
	// 			'add_new_item' => __('新しい'.$val['title'].'を追加'),
	// 			'edit_item' => __($val['title'].'を編集'),
	// 			'new_item' => __($val['title']),
	// 			'view_item' => __('投稿を表示'),
	// 			'search_items' => __($val['title'].'を探す'),
	// 			'not_found' =>  __($val['title'].'はありません'),
	// 			'not_found_in_trash' => __('ゴミ箱に'.$val['title'].'はありません'),
	// 			'parent_item_colon' => ''
	// 		);
	// 		$custom_posts['labels'] = $labels;
	// 		$custom_posts['supports'] = $val['supports'];
	// 		register_post_type($val['slug'], $custom_posts);

	// 		/* ----- カタクソノミー登録 ----- */
	// 		if($val['taxonomy']):
	// 			if(is_array($val['taxonomy'])):
	// 				foreach($val['taxonomy'] as $value):
	// 					$tax['label'] = $value['label'];
	// 					$tax['labels'] = array(
	// 						'name' => $value['label'],
	// 						'singular_name' => $value['label'],
	// 						'search_items' => $value['label'].'を検索',
	// 						'popular_items' => 'よく使われている'.$value['label'],
	// 						'all_items' => 'すべての'.$value['label'],
	// 						'parent_item' => '親の'.$value['label'],
	// 						'edit_item' => $value['label'].'の編集',
	// 						'update_item' => '更新',
	// 						'add_new_item' => '新規'.$value['label'].'を追加',
	// 						'new_item_name' => '新しい'.$value['label'],
	// 					);
	// 					if($value['tag'] == true):
	// 						$tax['hierarchical'] = false;
	// 					else:
	// 						$tax['hierarchical'] = true;
	// 					endif;
	// 					register_taxonomy($value['name'], $val['slug'], $tax);
	// 				endforeach;
	// 			else:
	// 				if($val['tag'] == true):
	// 					$tax['hierarchical'] = false;
	// 					$label = 'タグ';
	// 				else:
	// 					$tax['hierarchical'] = true;
	// 					$label = 'カテゴリー';
	// 				endif;
	// 				$tax['label'] = $label;
	// 				$tax['labels'] = array(
	// 					'name' => $label,
	// 					'singular_name' => $label,
	// 					'search_items' => $label.'を検索',
	// 					'popular_items' => 'よく使われている'.$label,
	// 					'all_items' => 'すべての'.$label,
	// 					'parent_item' => '親の'.$label,
	// 					'edit_item' => $label.'の編集',
	// 					'update_item' => '更新',
	// 					'add_new_item' => '新規'.$label.'を追加',
	// 					'new_item_name' => '新しい'.$label,
	// 				);
	// 				register_taxonomy($val['taxonomy'], $val['slug'], $tax);
	// 			endif;
	// 		endif;

	// 	endforeach;
	// }
	// add_action('init', 'addPosts', 0);
}