<?php
function my_custom_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

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



//投稿ページの編集
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

//アイキャッチ画像編集
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

//SCFでのオプションページ作成
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('', '料金一覧', 'manage_options', 'price-options', 'dashicons-money-alt', '7');
SCF::add_options_page('', 'ギャラリー', 'manage_options', 'gallery-options', 'dashicons-format-gallery', '8');
SCF::add_options_page('', 'よくある質問', 'manage_options', 'faq-options', 'dashicons-editor-help', '9');