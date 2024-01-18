<?php get_header(); ?>

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
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- sitemap -->
    <div class="sitemap layout-sitemap">
        <div class="sitemap__inner inner">
            <nav class="sitemap__menu global-menu">
                <div class="global-menu__left">
                    <div class="global-menu__wrap">
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                            <li class="global-menu__item"><a href="<?php echo $campaign_category1; ?>">ファンダイビング</a></li>
                            <li class="global-menu__item"><a href="<?php echo $campaign_category2; ?>">ライセンス講習</a></li>
                            <li class="global-menu__item"><a href="<?php echo $campaign_category3; ?>">体験ダイビング</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $about; ?>">私たちについて</a></li>
                        </ul>
                    </div>
                    <div class="global-menu__wrap">
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                            <li class="global-menu__item"><a href="<?php echo $tab1; ?>">ライセンス講習</a></li>
                            <li class="global-menu__item"><a href="<?php echo $tab2; ?>">ファンダイビング</a></li>
                            <li class="global-menu__item"><a href="<?php echo $tab3; ?>">体験ダイビング</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $blog; ?>">ブログ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="global-menu__right">
                    <div class="global-menu__wrap">
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $voice; ?>">お客様の声</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $price; ?>">料金一覧</a></li>
                            <li class="global-menu__item"><a href="<?php echo $price_course1; ?>">ライセンス講習</a></li>
                            <li class="global-menu__item"><a href="<?php echo $price_course2; ?>">体験ダイビング</a></li>
                            <li class="global-menu__item"><a href="<?php echo $price_course3; ?>">ファンダイビング</a></li>
                            <li class="global-menu__item"><a href="<?php echo $price_course4; ?>">スペシャル<br class="u-mobile">ダイビング</a></li>
                        </ul>
                    </div>
                    <div class="global-menu__wrap">
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $faq; ?>">よくある質問</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $terms; ?>">利用規約</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                        </ul>
                        <ul class="global-menu__items global-menu__items--color">
                            <li class="global-menu__item-head global-menu__item-head--icon-color"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <?php get_footer(); ?>