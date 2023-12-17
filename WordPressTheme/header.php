<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="robots" content="noindex" />
        <!-- meta情報 -->
        <title>CodeUps_gon</title>
        <meta name="description" content="これはディスクリプションです" />
        <meta name="keywords" content="CodeUps、diving" />
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.ico" type="image/x-icon" />
        <?php wp_head(); ?>
    </head>

    <body>
            <header class="header layout-header js-header">
                <div class="header__inner">
                    <div class="header__content">
                        <h1 class="header__logo">
                            <a href="./">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps" />
                            </a>
                        </h1>
                        <nav class="header__nav">
                            <ul class="header__nav-items u-desktop">
                                <li class="header__nav-item">
                                    <a href="campaign.html">
                                        <span class="header__nav-item-en">campaign</span>
                                        <span class="header__nav-item-jp">キャンペーン</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="about.html">
                                        <span class="header__nav-item-en">about&nbsp;us</span>
                                        <span class="header__nav-item-jp">私たちについて</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="information.html">
                                        <span class="header__nav-item-en">information</span>
                                        <span class="header__nav-item-jp">ダイビング情報</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="blog.html">
                                        <span class="header__nav-item-en">blog</span>
                                        <span class="header__nav-item-jp">ブログ</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="voice.html">
                                        <span class="header__nav-item-en">voice</span>
                                        <span class="header__nav-item-jp">お客様の声</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="price.html">
                                        <span class="header__nav-item-en">price</span>
                                        <span class="header__nav-item-jp">料金一覧</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="faq.html">
                                        <span class="header__nav-item-en">FAQ</span>
                                        <span class="header__nav-item-jp">よくある質問</span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="contact.html">
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
                                        <li class="global-menu__item-head"><a href="campaign.html">キャンペーン</a></li>
                                        <li class="global-menu__item"><a href="#">ライセンス取得</a></li>
                                        <li class="global-menu__item"><a href="#">貸切体験ダイビング</a></li>
                                        <li class="global-menu__item"><a href="#">ナイトダイビング</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="about.html">私たちについて</a></li>
                                    </ul>
                                </div>
                                <div class="global-menu__wrap">
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="information.html">ダイビング情報</a></li>
                                        <li class="global-menu__item"><a href="#">ライセンス講習</a></li>
                                        <li class="global-menu__item"><a href="#">体験ダイビング</a></li>
                                        <li class="global-menu__item"><a href="#">ファンダイビング</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="blog.html">ブログ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="global-menu__right">
                                <div class="global-menu__wrap">
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="voice.html">お客様の声</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="price.html">料金一覧</a></li>
                                        <li class="global-menu__item"><a href="#">ライセンス講習</a></li>
                                        <li class="global-menu__item"><a href="#">体験ダイビング</a></li>
                                        <li class="global-menu__item"><a href="#">ファンダイビング</a></li>
                                    </ul>
                                </div>
                                <div class="global-menu__wrap">
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="faq.html">よくある質問</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head">
                                            <a href="privacypolicy.html">プライバシー<br class="u-mobile" />ポリシー</a>
                                        </li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="terms.html">利用規約</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="contact.html">お問い合わせ</a></li>
                                    </ul>
                                    <ul class="global-menu__items">
                                        <li class="global-menu__item-head"><a href="sitemap.html">サイトマップ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
