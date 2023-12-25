<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.webp" alt="エメラルドグリーンの海と砂浜" />
            </picture>
            <h1 class="sub-mv__title">FAQ</h1>
        </div>
    </section>

    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- faq -->
    <section class="faq layout-faq">
        <div class="faq__inner inner">
            <ul class="faq__list faq-list">
                <?php
                $faq_items = SCF::get_option_meta('faq-options', 'faq');
                if (!empty($faq_items)) :
                    foreach ($faq_items as $faq_item) :
                        $question = esc_html($faq_item['question']);
                        $answer = esc_html($faq_item['answer']);
                ?>
                        <li class='faq-list__item'>
                            <p class='faq-list__item-question js-faq-question'><?= $question ?></p>
                            <p class='faq-list__item-answer'><?= $answer ?></p>
                        </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>
    </section>

    <?php get_footer(); ?>