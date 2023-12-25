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
            // すべてのプラン情報を取得
            $all_plans = SCF::get_option_meta('price-options');
            $plans = [];
            foreach ($all_plans as $key => $value) {
                if (preg_match('/^price_course_([0-9]+)$/', $key, $matches)) {
                    $plan_id = $matches[1];
                    $plans[$plan_id] = [
                        'title' => $value,
                        'group' => 'price-' . $plan_id,
                        'course_array' => ['course_' . $plan_id, 'sp-course_' . $plan_id, 'price_' . $plan_id]
                    ];
                }
            }

            foreach ($plans as $plan_id => $plan) :
                $price_group = SCF::get_option_meta('price-options', $plan['group']);
                if (!empty($price_group)) :
                    $rowspan = count($price_group); // rowspanの値を設定
            ?>
                    <table class="price__list price-list">
                        <tr class="price-list_row">
                            <th class="price-list__head" rowspan="<?php echo $rowspan; ?>">
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
                                <td class="price-list__course"><?php echo $item[$plan['course_array'][0]]; ?><br class="u-mobile" /><?php echo $item[$plan['course_array'][1]]; ?></td>
                                <td class="price-list__value"><?php echo $item[$plan['course_array'][2]]; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>


    <?php get_footer(); ?>