<?php
function my_custom_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap');

    // CSS
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.css');
    wp_enqueue_style('my-theme-css', get_theme_file_uri('/assets/css/style.css'));

    // JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('my-theme-js', get_theme_file_uri('/assets/js/script.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');

function change_post_menu_label_to_blog()
{
    global $menu;
    global $submenu;

    // メニュー名を「ブログ」に変更
    $menu[5][0] = 'ブログ';
    $submenu['edit.php'][5][0] = 'ブログ一覧';
    $submenu['edit.php'][10][0] = '新規ブログ';
    $submenu['edit.php'][16][0] = 'ブログタグ';
    $submenu['edit.php'][15][0] = 'ブログカテゴリー';
}
add_action('admin_menu', 'change_post_menu_label_to_blog');


function my_setup()
{
    add_theme_support('post-thumbnails'); /* アイキャッチ */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support(
        'html5',
        array( /* HTML5のタグで出力 */
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

//アーカイブの表示件数変更
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_archive('campaign')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '4'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');


function create_campaign_taxonomy()
{
    // カスタムタクソノミーの設定
    $labels = array(
        'name'              => _x('キャンペーンカテゴリー', 'taxonomy general name'),
        'singular_name'     => _x('キャンペーンカテゴリー', 'taxonomy singular name'),
        // 他のラベルもここに追加できる
    );

    $args = array(
        'hierarchical'      => true, // カテゴリーのような階層構造
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'campaign_category'),
    );

    register_taxonomy('campaign_category', array('campaign'), $args);
}
add_action('init', 'create_campaign_taxonomy');

// function campaign_category_meta_box()
// {
//     add_meta_box('campaign_category_id', 'キャンペーンカテゴリー', 'campaign_category_meta_box_callback', 'campaign', 'side', 'default');
// }
// add_action('add_meta_boxes', 'campaign_category_meta_box');

// function campaign_category_meta_box_callback($post)
// {
//     // セキュリティのためのNonceフィールド
//     wp_nonce_field('campaign_category_meta_box', 'campaign_category_meta_box_nonce');

//     // カテゴリーの表示
//     the_terms($post->ID, 'campaign_category');
// }
