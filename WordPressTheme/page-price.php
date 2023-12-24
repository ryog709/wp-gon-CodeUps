<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-sp.webp" alt="ダイビングをしている様子" />
            </picture>
            <h1 class="sub-mv__title">price</h1>
        </div>
    </section>

    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- price -->
    <section class="price layout-price">
        <div class="price__inner inner">
            <?php
            $plans = [
                1 => [
                    'title' => SCF::get_option_meta('price-options', 'price_course_1'),
                    'group' => 'price-1',
                    'course_key' => ['course_1', 'sp-course_1', 'price_1']
                ],
                2 => [
                    'title' => SCF::get_option_meta('price-options', 'price_course_2'),
                    'group' => 'price-2',
                    'course_key' => ['course_2', 'sp-course_2', 'price_2']
                ],
                3 => [
                    'title' => SCF::get_option_meta('price-options', 'price_course_3'),
                    'group' => 'price-3',
                    'course_key' => ['course_3', 'sp-course_3', 'price_3']
                ],
                4 => [
                    'title' => SCF::get_option_meta('price-options', 'price_course_4'),
                    'group' => 'price-4',
                    'course_key' => ['course_4', 'sp-course_4', 'price_4']
                ]
            ];
            ?>

            <?php foreach ($plans as $plan_id => $plan) : ?>
                <?php
                $price_group = SCF::get_option_meta('price-options', $plan['group']);
                if (!empty($price_group)) :
                    $rowspan = count($price_group); // ここでrowspanの値を設定
                ?>
                    <table class="price__list price-list">
                        <tr class="price-list_row">
                            <th class="price-list__head" rowspan="<?php echo $rowspan; ?>"> <!-- ここでrowspanを使う -->
                                <span><?php echo $plan['title']; ?></span>
                            </th>
                            <?php
                            $first = true;
                            foreach ($price_group as $item) :
                                if (!$first) {
                                    echo '</tr><tr class="price-list_row">';
                                }
                                $first = false;
                            ?>
                                <td class="price-list__course"><?php echo $item[$plan['course_key'][0]]; ?><br class="u-mobile" /><?php echo $item[$plan['course_key'][1]]; ?></td>
                                <td class="price-list__value"><?php echo $item[$plan['course_key'][2]]; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <?php get_footer(); ?>