<?php

/*****************************************************************************************
* アイキャッチの登録を有効化
*****************************************************************************************/
add_theme_support('post-thumbnails');


/*****************************************************************************************
* ヘッダをきれいに
*****************************************************************************************/
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
// Since 4.4
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');


/*****************************************************************************************
* jQueryの読み込みを削除
*****************************************************************************************/
function my_delete_plugin_files() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_plugin_files' );


/*****************************************************************************************
* ログイン時の余白を除去
*****************************************************************************************/
add_filter( 'show_admin_bar', '__return_false' );


/*****************************************************************************************
* 動整形を無効化
*****************************************************************************************/
// remove_filter('the_content', 'wpautop');


/*****************************************************************************************
* UA判定
*****************************************************************************************/
function ch_device(){
    
    $ua = $_SERVER['HTTP_USER_AGENT'];
        
    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
        // スマホからのアクセス
        $check_device = "mobile";
    } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
        // タブレットからのアクセス
        $check_device = "tablet";
    } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
        // 携帯からのアクセス
        $check_device = "old-phone";
    } else {
        // PCからのアクセス
        $check_device = "pc";
    }

    return $check_device;
}


/*****************************************************************************************
* the_date不具合対応
*****************************************************************************************/
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );


/*****************************************************************************************
* 投稿日からの日数を求める
*****************************************************************************************/
function day_diff($date1, $date2){
    define('LIMIT', 16);
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
    $seconddiff = abs($timestamp2 - $timestamp1);
    $daydiff = $seconddiff / (60 * 60 * 24);
    if($daydiff <= LIMIT){
        return true;
    }else{
        return false;
    }
};


/*****************************************************************************************
* 投稿一覧画面にIDやタクソノミーの値を表示
*****************************************************************************************/
function manage_posts_columns($columns) {
    $posttype = get_post_type();
    if($posttype == 'post' || $posttype == 'tools'){
        $columns['technologys'] = "使用技術タグ";
        $columns['ID'] = "投稿ID";
    }
    if($posttype == 'post'){
        $columns['era'] = "年代";
    }
    return $columns;
}
function my_posts_custom_column( $column, $post_id ) {
    $posttype = get_post_type();
    if($posttype == 'post' || $posttype == 'tools'){
        switch ( $column ) {
            case 'era':
                $terms = get_the_terms($post_id, 'era');
                $str = array();
                foreach( $terms as $term ){
                    array_push($str, $term->name);
                }
                echo implode(", ", $str);
                break;
            case 'ID':
                the_id();
                break;
            case 'technologys':
                $terms = get_the_terms($post_id, 'technology');
                $str = array();
                foreach( $terms as $term ){
                    array_push($str, $term->name);
                }
                echo implode(", ", $str);
                break;
        }
    }
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column' , 'my_posts_custom_column', 10, 2 );


/*****************************************************************************************
* クイック編集で入力した値を保存する
*****************************************************************************************/
function save_custom_meta_page( $post_id ) {
    $slug = 'post';
    if ( $slug !== get_post_type( $post_id ) ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    $_POST += array("{$slug}_edit_nonce" => '');
    if ( !wp_verify_nonce( $_POST["{$slug}_edit_nonce"], 'quick_edit_action' ) ) {
        return;
    }
    //チェックボックスの場合
    if ( isset( $_REQUEST['is_featured'] ) ) {
        update_post_meta($post_id, 'is_featured', TRUE);
    } else {
        update_post_meta($post_id, 'is_featured', FALSE);
    }
}
function save_custom_meta_think( $post_id ) {
    $slug = 'think';
    if ( $slug !== get_post_type( $post_id ) ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    $_POST += array("{$slug}_edit_nonce" => '');
    if ( !wp_verify_nonce( $_POST["{$slug}_edit_nonce"], 'quick_edit_action' ) ) {
        return;
    }
    //チェックボックスの場合
    if ( isset( $_REQUEST['is_featured'] ) ) {
        update_post_meta($post_id, 'is_featured', TRUE);
    } else {
        update_post_meta($post_id, 'is_featured', FALSE);
    }
}
add_action( 'save_post', 'save_custom_meta_page' );
add_action( 'save_post', 'save_custom_meta_think' );


/*****************************************************************************************
* クイック編集の入力フィールドに値を代入する（ピックアップの対象記事）
*****************************************************************************************/
function substitution_quick_edit() {
    global $post_type;
    if ( $post_type == 'post' ) {
        echo '<script type="text/javascript" src="', get_stylesheet_directory_uri() .'/admin/js/admin_edit.js', '"></script>';
    }
}
add_action('admin_footer-edit.php', 'substitution_quick_edit');


/*****************************************************************************************
* 投稿機能から「カテゴリー」「タグ」を削除
*****************************************************************************************/
function my_unregister_taxonomies(){
    global $wp_taxonomies;
 
    /*
     * 投稿機能から「カテゴリー」を削除
     */
    if (!empty($wp_taxonomies['category']->object_type)) {
        foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['category']->object_type[$i]);
            }
        }
    }
 
    /*
     * 投稿機能から「タグ」を削除
     */
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }
    return true;
}
add_action('init', 'my_unregister_taxonomies');


/*****************************************************************************************
* 投稿個別ページのパーマリンクに「/works/」を追加
*****************************************************************************************/
function add_article_post_permalink( $permalink ) {
    $permalink = '/works' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['works/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

/*****************************************************************************************
* WP GraphQLでisStickyフィルターを使えるようにする
*****************************************************************************************/
add_action( 'graphql_register_types', function () {
    register_graphql_field( 'RootQueryToPostConnectionWhereArgs', 'excludeSticky', [
        'type'        => 'Boolean',
        'description' => 'Exclude sticky posts if true',
        'resolve'     => function () {
            return null;
        }
    ] );
} );

add_filter( 'graphql_post_object_connection_query_args', function( $query_args, $source, $args ) {
    if ( isset( $args['where']['excludeSticky'] ) && true === $args['where']['excludeSticky'] ) {
        $sticky = get_option( 'sticky_posts' );
        $query_args['post__not_in'] = $sticky;
    }
    return $query_args;
}, 10, 3 );
?>