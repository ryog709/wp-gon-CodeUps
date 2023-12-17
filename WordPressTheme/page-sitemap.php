<?php get_header(); ?>

	<main>
        <!-- sub-mv -->
        <section class="sub-mv">
            <div class="sub-mv__inner">
                <picture class="sub-mv__picture">
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-pc.webp" media="(min-width: 768px)" type="image/webp" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-sp.webp" alt="珊瑚礁と熱帯魚の群れ" />
                </picture>
                <h1 class="sub-mv__title">Site MAP</h1>
            </div>
        </section>
        <!-- breadcrumbs -->
        <div class="breadcrumbs layout-breadcrumbs">
            <div class="breadcrumbs__inner inner">
                <!-- Breadcrumb NavXT 7.1.0 -->
                <span>
                    <a href="./"><span>TOP</span></a>
                </span>
                <span>
                    <span>サイトマップ</span>
                </span>
            </div>
        </div>

        <!-- sitemap -->
        <div class="sitemap layout-sitemap">
            <div class="sitemap__inner inner">
                <nav class="sitemap__menu global-menu">
                    <div class="global-menu__left">
                        <div class="global-menu__wrap">
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="campaign.html">キャンペーン</a></li>
                                <li class="global-menu__item"><a href="#">ライセンス取得</a></li>
                                <li class="global-menu__item"><a href="#">貸切体験ダイビング</a></li>
                                <li class="global-menu__item"><a href="#">ナイトダイビング</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="about.html">私たちについて</a></li>
                            </ul>
                        </div>
                        <div class="global-menu__wrap">
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="information.html">ダイビング情報</a></li>
                                <li class="global-menu__item"><a href="#">ライセンス講習</a></li>
                                <li class="global-menu__item"><a href="#">体験ダイビング</a></li>
                                <li class="global-menu__item"><a href="#">ファンダイビング</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="blog.html">ブログ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="global-menu__right">
                        <div class="global-menu__wrap">
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="voice.html">お客様の声</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="price.html">料金一覧</a></li>
                                <li class="global-menu__item"><a href="#">ライセンス講習</a></li>
                                <li class="global-menu__item"><a href="#">体験ダイビング</a></li>
                                <li class="global-menu__item"><a href="#">ファンダイビング</a></li>
                            </ul>
                        </div>
                        <div class="global-menu__wrap">
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="faq.html">よくある質問</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color">
                                    <a href="privacypolicy.html">プライバシー<br class="u-mobile" />ポリシー</a>
                                </li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="terms.html">利用規約</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="contact.html">お問い合わせ</a></li>
                            </ul>
                            <ul class="global-menu__items global-menu__items--color">
                                <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="sitemap.html">サイトマップ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

<?php get_footer(); ?>