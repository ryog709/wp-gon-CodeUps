<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="CodeUps、diving" />
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<?php
$top = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
$terms = esc_url(home_url('/terms-of-service/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
// 各キャンペーンカテゴリーへのリンク
$campaign_category1 = esc_url(home_url('/campaign_category/fan-diving/'));
$campaign_category2 = esc_url(home_url('/campaign_category/license-seminar/'));
$campaign_category3 = esc_url(home_url('/campaign_category/trial-diving/'));
// インフォメーション各タブへのリンク
$tab1 = $information . '#tab01';
$tab2 = $information . '#tab02';
$tab3 = $information . '#tab03';
// 各料金一覧へのリンク
$price_course1 = $price . '#price1';
$price_course2 = $price . '#price2';
$price_course3 = $price . '#price3';
$price_course4 = $price . '#price4';
?>

<body>
    <div class="wrap <?php echo is_404() ? 'wrap-bg-color' : ''; ?>">
        <header class="header layout-header js-header">
            <div class="header__inner">
                <div class="header__content">
                    <?php if (is_front_page()) : ?>
                        <h1 class="header__logo">
                            <a href="<?php echo $top; ?>">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps" />
                            </a>
                        </h1>
                    <?php else : ?>
                        <div class="header__logo">
                            <a href="<?php echo $top; ?>">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps" />
                            </a>
                        </div>
                    <?php endif; ?>
                    <nav class="header__nav">
                        <ul class="header__nav-items u-desktop">
                            <li class="header__nav-item">
                                <a href="<?php echo $campaign; ?>">
                                    <span class="header__nav-item-en">campaign</span>
                                    <span class="header__nav-item-jp">キャンペーン</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $about; ?>">
                                    <span class="header__nav-item-en">about&nbsp;us</span>
                                    <span class="header__nav-item-jp">私たちについて</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $information; ?>">
                                    <span class="header__nav-item-en">information</span>
                                    <span class="header__nav-item-jp">ダイビング情報</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $blog; ?>">
                                    <span class="header__nav-item-en">blog</span>
                                    <span class="header__nav-item-jp">ブログ</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $voice; ?>">
                                    <span class="header__nav-item-en">voice</span>
                                    <span class="header__nav-item-jp">お客様の声</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $price; ?>">
                                    <span class="header__nav-item-en">price</span>
                                    <span class="header__nav-item-jp">料金一覧</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $faq; ?>">
                                    <span class="header__nav-item-en">FAQ</span>
                                    <span class="header__nav-item-jp">よくある質問</span>
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="<?php echo $contact; ?>">
                                    <span class="header__nav-item-en">contact</span>
                                    <span class="header__nav-item-jp">お問合せ</span>
                                </a>
                            </li>
                        </ul>
                        <button class="header__hamburger hamburger js-hamburger u-mobile" aria-label="メニューを開く">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </nav>
                </div>
                <div class="header__drawer drawer js-drawer u-mobile">
                    <nav class="drawer__nav-menu global-menu">
                        <div class="global-menu__left">
                            <div class="global-menu__wrap">
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $campaign_category1; ?>">ファンダイビング</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $campaign_category2; ?>">ライセンス講習</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $campaign_category3; ?>">体験ダイビング</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $about; ?>">私たちについて</a></li>
                                </ul>
                            </div>
                            <div class="global-menu__wrap">
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $tab1; ?>">ライセンス講習</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $tab2; ?>">ファンダイビング</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $tab3; ?>">体験ダイビング</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $blog; ?>">ブログ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="global-menu__right">
                            <div class="global-menu__wrap">
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $voice; ?>">お客様の声</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $price; ?>">料金一覧</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $price_course1; ?>">ライセンス講習</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $price_course2; ?>">体験ダイビング</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $price_course3; ?>">ファンダイビング</a></li>
                                    <li class="global-menu__item"><a href="<?php echo $price_course4; ?>">スペシャル<br class="u-mobile" />ダイビング</a></li>
                                </ul>
                            </div>
                            <div class="global-menu__wrap">
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $faq; ?>">よくある質問</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                                    </li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $terms; ?>">利用規約</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                                </ul>
                                <ul class="global-menu__items">
                                    <li class="global-menu__item-head"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>