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
        <div class="breadcrumbs layout-breadcrumbs">
            <div class="breadcrumbs__inner inner">
                <!-- Breadcrumb NavXT 7.1.0 -->
                <span>
                    <a href="./"><span>TOP</span></a>
                </span>
                <span>
                    <span>私たちについて</span>
                </span>
            </div>
        </div>
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
                    <p class="aboutUs__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
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
                    <li class="gallery-list__item js-modal-open" data-target="1">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery01.webp" alt="熱帯魚と珊瑚礁" />
                    </li>
                    <li class="gallery-list__item js-modal-open" data-target="2">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery02.webp" alt="エメラルドグリーンの海" />
                    </li>
                    <li class="gallery-list__item js-modal-open" data-target="3">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery03.webp" alt="熱帯魚" />
                    </li>
                    <li class="gallery-list__item js-modal-open" data-target="4">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery04.webp" alt="熱帯魚" />
                    </li>
                    <li class="gallery-list__item js-modal-open" data-target="5">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery05.webp" alt="熱帯魚の群れ" />
                    </li>
                    <li class="gallery-list__item js-modal-open" data-target="6">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery06.webp" alt="珊瑚と熱帯魚" />
                    </li>
                </ul>
                <!-- modal -->
                <div class="gallery__modal gallery-modal">
                    <ul class="gallery-modal__list gallery-modal-list">
                        <li class="gallery-modal-list__item modal js-modal" id="1">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery01.webp" alt="熱帯魚と珊瑚礁" />
                                </figure>
                            </div>
                        </li>
                        <li class="gallery-modal-list__item modal js-modal" id="2">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery02.webp" alt="エメラルドグリーンの海" />
                                </figure>
                            </div>
                        </li>
                        <li class="gallery-modal-list__item modal js-modal" id="3">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery03.webp" alt="熱帯魚" />
                                </figure>
                            </div>
                        </li>
                        <li class="gallery-modal-list__item modal js-modal" id="4">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery04.webp" alt="熱帯魚" />
                                </figure>
                            </div>
                        </li>
                        <li class="gallery-modal-list__item modal js-modal" id="5">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery05.webp" alt="熱帯魚の群れ" />
                                </figure>
                            </div>
                        </li>
                        <li class="gallery-modal-list__item modal js-modal" id="6">
                            <div class="modal__inner">
                                <figure class="modal__image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery06.webp" alt="珊瑚と熱帯魚" />
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
<?php get_footer(); ?>