<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-sp.webp" alt="海中を漂う熱帯魚" />
            </picture>
            <h1 class="sub-mv__title">about&nbsp;us</h1>
        </div>
    </section>

    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- aboutUs -->
    <article class="aboutUs layout-aboutUs">
        <div class="aboutUs__inner inner">
            <div class="aboutUs__container">
                <div class="aboutUs__image-box">
                    <figure class="aboutUs__image-left">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus01.webp" alt="オレンジ色の屋根に乗っているシーサー" width="194" height="128" loading="lazy" />
                    </figure>
                    <figure class="aboutUs__image-right">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus02.webp" alt="青い海の中を漂う黄色のカラフルな熱帯魚" width="281" height="186" loading="lazy" />
                    </figure>
                </div>
                <p class="aboutUs__sub-head"><span>dive</span>&nbsp;into<br />the<span>&nbsp;ocean</span></p>
                <p class="aboutUs__text">私たちは海の魅力をもっと多くの人に伝えたい！初心者からベテランまで、安全かつ快適なダイビングを提供します。<br>海とのふれあいで、新しい世界を発見しましょう。海底の美しい景色と生き物に会いに、一緒に潜りませんか？</p>
            </div>
        </div>
    </article>
    <!-- gallery -->
    <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__title-wrap section-title">
                <span class="section-title__sub">gallery</span>
                <h2 class="section-title__main">フォト</h2>
            </div>
            <ul class="gallery__list gallery-list">
                <?php
                // オプションページ 'gallery-options' から繰り返しフィールド 'gallery' を取得
                $gallery_items = SCF::get_option_meta('gallery-options', 'gallery');
                if ($gallery_items) :
                    foreach ($gallery_items as $gallery_item) :
                        $image     = $gallery_item['gallery_img']; // 画像フィールド
                        $image_url = wp_get_attachment_image_url($image, 'full'); // 画像のURL
                        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true); // ALTテキスト
                ?>
                        <li class="gallery-list__item js-modal-open" data-target="<?php echo $image; ?>">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                        </li>
                <?php endforeach;
                endif; ?>
            </ul>
            <!-- modal -->
            <div class="gallery__modal gallery-modal">
                <ul class="gallery-modal__list gallery-modal-list">
                    <?php
                    if ($gallery_items) :
                        foreach ($gallery_items as $gallery_item) :
                            $image     = $gallery_item['gallery_img']; // 画像フィールド
                            $image_url = wp_get_attachment_image_url($image, 'full'); // 画像のURL
                            $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true); // ALTテキスト
                    ?>
                            <li class="gallery-modal-list__item modal js-modal" id="<?php echo $image; ?>">
                                <div class="modal__inner">
                                    <figure class="modal__image">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                                    </figure>
                                </div>
                            </li>
                    <?php endforeach;
                    endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>