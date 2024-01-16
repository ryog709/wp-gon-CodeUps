<?php get_header(); ?>
<main>
    <!-- top-mv -->
    <section class="top-mv layout-top-mv">
        <div class="top-mv__inner">
            <div class="top-mv__opening opening-mv">
                <div class="opening-mv__mask js-opening-mv-mask">
                    <div class="opening-mv__title-content">
                        <h2 class="opening-mv__title">diving</h2>
                        <span class="opening-mv__title-sub">into&nbsp;the&nbsp;ocean</span>
                    </div>
                </div>
                <div class="opening-mv__wrap">
                    <div class="opening-mv__left js-opening-mv-left">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening-mv-left.webp" alt="DIVING" />
                    </div>
                    <div class="opening-mv__right js-opening-mv-right">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening-mv-right.webp" alt="DIVING" />
                    </div>
                </div>
            </div>
            <div class="top-mv__swiper swiper js-mv-swiper">
                <div class="top-mv__swiper-wrapper swiper-wrapper">
                    <?php
                    $i = 1; // 初期化
                    while (true) : // 無限ループ
                        $slide = get_field('slide' . $i); // スライドデータを取得
                        if (!$slide) break; // スライドがなければループを抜ける
                        // サブフィールドからデータを取得
                        $pc_src = $slide['slide_pc' . $i];
                        $sp_src = $slide['slide_sp' . $i];
                        $alt    = $slide['slide_alt' . $i];
                        // 両方の画像が設定されている場合のみスライドを表示
                        if (isset($pc_src) && isset($sp_src)) : ?>
                            <div class="top-mv__swiper-slide swiper-slide">
                                <picture class="top-mv__picture">
                                    <source srcset="<?php echo $pc_src; ?>" media="(min-width: 768px)" type="image/webp" />
                                    <img src="<?php echo $sp_src; ?>" alt="<?php echo $alt; ?>" />
                                </picture>
                            </div>
                    <?php endif;
                        $i++; // インクリメント
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="top-mv__title-content js-mv-title-content">
                <h2 class="top-mv__title">diving</h2>
                <span class="top-mv__title-sub">into&nbsp;the&nbsp;ocean</span>
            </div>
        </div>
    </section>

    <!-- top-campaign -->
    <?php
    // 新しいWP_Queryインスタンスを作成し、'campaign'カスタム投稿タイプの投稿を取得
    $campaign_query      = new WP_Query([
        'post_type'      => 'campaign', // カスタム投稿タイプを指定
        'post_status'    => 'publish',  // 公開された投稿のみ
        'posts_per_page' => 16,         // 最大16件の投稿を表示
        'orderby'        => "rand"      // ランダムな順序で投稿を取得
    ]);
    // 投稿があるかどうかをチェック
    if ($campaign_query->have_posts()) : ?>
        <section class="top-campaign layout-top-campaign">
            <div class="top-campaign__inner inner">
                <div class="top-campaign__header">
                    <div class="top-campaign__title-wrap section-title">
                        <span class="section-title__sub">campaign</span>
                        <h2 class="section-title__main">キャンペーン</h2>
                    </div>
                    <div class="top-campaign__swiper-buttons">
                        <div class="top-campaign__swiper-button-prev swiper-button-prev"></div>
                        <div class="top-campaign__swiper-button-next swiper-button-next"></div>
                    </div>
                </div>
                <div class="top-campaign__swiper-container">
                    <div class="top-campaign__swiper swiper js-card-swiper">
                        <div class="top-campaign__swiper-wrapper swiper-wrapper">
                            <!-- 各投稿に対してループ -->
                            <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
                                <div class="top-campaign__swiper-slide swiper-slide">
                                    <figure class="top-campaign__swiper-card campaign-card">
                                        <!-- 投稿のサムネイルを表示 -->
                                        <div class="campaign-card__image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <!-- サムネイル画像のサイズと属性を指定して表示 -->
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="280" height="188" loading="lazy" />
                                            <?php else : ?>
                                                <!-- サムネイルがない場合の代替画像 -->
                                                <img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="280" height="188" loading="lazy" />
                                            <?php endif; ?>
                                        </div>
                                        <!-- キャンペーン詳細情報の表示 -->
                                        <figcaption class="campaign-card__body">
                                            <!-- カスタムタクソノミー（カテゴリー）を表示 -->
                                            <p class="campaign-card__tag"><span><?php the_terms(get_the_ID(), 'campaign_category'); ?></span></p>
                                            <!-- 投稿のタイトルを表示 -->
                                            <p class="campaign-card__title"><?php the_title(); ?></p>
                                            <!-- カスタムフィールドからキャンペーン価格情報を取得 -->
                                            <?php $campaignPrice = get_field('campaign_price_list');
                                            if ($campaignPrice) : ?>
                                                <!-- キャンペーン価格情報を表示 -->
                                                <p class="campaign-card__text"><?php echo $campaignPrice['campaign_text']; ?></p>
                                                <div class="campaign-card__price-wrap">
                                                    <div class="campaign-card__price-sub"><span><?php echo $campaignPrice['normal_price']; ?></span></div>
                                                    <div class="campaign-card__price-main"><?php echo $campaignPrice['campaign_price']; ?></div>
                                                </div>
                                            <?php endif; ?>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="top-campaign__button">
                    <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button">View more<span></span></a>
                </div>
            </div>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>

    <!-- top-aboutUs -->
    <section class="top-aboutUs layout-top-aboutUs">
        <div class="top-aboutUs__inner inner">
            <div class="top-aboutUs__title-wrap section-title">
                <span class="section-title__sub">about&nbsp;us</span>
                <h2 class="section-title__main">私たちについて</h2>
            </div>
            <div class="top-aboutUs__container">
                <div class="top-aboutUs__image-box">
                    <figure class="top-aboutUs__image-left">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus01.webp" alt="オレンジ色の屋根に乗っているシーサー" width="194" height="128" loading="lazy" />
                    </figure>
                    <figure class="top-aboutUs__image-right">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus02.webp" alt="青い海の中を漂う黄色のカラフルな熱帯魚" width="281" height="186" loading="lazy" />
                    </figure>
                </div>
                <div class="top-aboutUs__text-wrap">
                    <h3 class="top-aboutUs__sub-head"><span>dive</span>&nbsp;into<br />the<span>&nbsp;ocean</span></h3>
                    <div class="top-aboutUs__content">
                        <p class="top-aboutUs__text">海の素晴らしさを全ての人に伝えたいと思っています！初心者から経験者まで、一人ひとりに合った安心・安全なダイビング体験を提供。<br>海の生物との出会いや、息をのむような海底の景観、水中での新しい発見が、あなたを待っています。私たちと一緒に、未知の世界への扉を開いてみませんか？</p>
                        <div class="top-aboutUs__button">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="button">View more<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- top-information -->
    <section class="top-information layout-top-information">
        <div class="top-information__inner inner">
            <div class="top-information__title-wrap section-title">
                <span class="section-title__sub">information</span>
                <h2 class="section-title__main">ダイビング情報</h2>
            </div>
            <div class="top-information__wrap">
                <div class="top-information__image colorbox js-colorbox">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information01.webp" alt="珊瑚と熱帯魚の画像" width="345" height="227" loading="lazy" />
                </div>
                <div class="top-information__content">
                    <p class="top-information__head">ライセンス講習</p>
                    <p class="top-information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
                    <div class="top-information__button">
                        <a href="<?php echo esc_url(home_url('/information/')); ?>" class="button">View more<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- top-blog -->
    <?php
    // WordPressのカスタムクエリを設定し、ブログ投稿を取得
    $blog_query = new WP_Query([
        'post_type'      => 'post',    // 投稿タイプを'投稿'に指定
        'post_status'    => 'publish', // 公開された投稿のみ
        'posts_per_page' => 3,         // 表示する投稿数
        'order'          => 'DESC'     // 降順に並べる
    ]);
    // 投稿がある場合の処理
    if ($blog_query->have_posts()) : ?>
        <section class="top-blog layout-top-blog">
            <div class="top-blog__inner">
                <div class="top-blog__title-wrap section-title">
                    <span class="section-title__sub section-title__sub--white">blog</span>
                    <h2 class="section-title__main section-title__main--white">ブログ</h2>
                </div>
                <ul class="top-blog__cards blog-cards">
                    <!-- /各投稿に対するループ -->
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <li class="blog-cards__item blog-card">
                            <a href="<?php the_permalink(); ?>"> <!-- 個別投稿へのリンク -->
                                <div class="blog-card__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <!-- サムネイル画像がある場合、サムネイルを表示 -->
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="280" height="188" loading="lazy" />
                                    <?php else : ?>
                                        <!-- サムネイル画像がない場合、noimage画像を表示 -->
                                        <img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="301" height="201" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card__body">
                                    <time class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time><!-- 投稿の日付を'年.月.日'の形式で表示 -->
                                    <p class="blog-card__title"><?php the_title(); ?></p><!-- 投稿のタイトルを表示 -->
                                    <p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p><!-- 投稿の内容を80語まで表示し、それ以上は'…'で省略 -->
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="top-blog__button">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button">View more<span></span></a>
                </div>
            </div>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>

    <!-- top-voice -->
    <?php
    // カスタム投稿タイプ 'voice' から投稿を取得するためのクエリ設定
    $voice_query         = new WP_Query([
        'post_type'      => 'voice',    // カスタム投稿タイプ 'voice' を指定
        'post_status'    => 'publish',  // 公開された投稿のみ取得
        'posts_per_page' => 2,          // 一度に表示する投稿数
        'orderby'        => "rand"      // 投稿をランダムに表示
    ]);
    // 投稿が存在する場合の処理
    if ($voice_query->have_posts()) : ?>
        <section class="top-voice layout-top-voice">
            <div class="top-voice__inner inner">
                <div class="top-voice__title-wrap section-title">
                    <span class="section-title__sub">voice</span>
                    <h2 class="section-title__main">お客様の声</h2>
                </div>
                <ul class="top-voice__cards voice-cards">
                    <!--  投稿をループして表示 -->
                    <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
                        <li class="voice-cards__item voice-card">
                            <div class="voice-card__container">
                                <div class="voice-card__wrap">
                                    <div class="voice-card__content">
                                        <!-- 顧客情報の表示 -->
                                        <?php $voiceCustomer = get_field('voice_customer');
                                        if ($voiceCustomer) : ?>
                                            <p class="voice-card__customer"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
                                        <?php endif; ?>
                                        <p class="voice-card__tag"><?php the_terms(get_the_ID(), 'voice_category'); ?></p>
                                    </div>
                                    <p class="voice-card__title"><?php the_title(); ?></p>
                                </div>
                                <div class="voice-card__img colorbox js-colorbox">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="151" height="117" loading="lazy" />
                                    <?php else : ?>
                                        <!-- サムネイルがない場合の代替画像 -->
                                        <img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="151" height="117" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <p class="voice-card__text"><?php echo wp_trim_words(get_field('voice_text'), 170, '…'); ?></p><!-- 投稿の内容を160単語でトリミングして表示 -->
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="top-voice__button">
                    <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button">View more<span></span></a>
                </div>
            </div>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>

    <!-- top-price -->
    <section class="top-price layout-top-price">
        <div class="top-price__inner inner">
            <div class="top-price__title-wrap section-title">
                <span class="section-title__sub">price</span>
                <h2 class="section-title__main">料金一覧</h2>
            </div>
            <div class="top-price__container">
                <div class="top-price__block">
                    <?php
                    // 価格プランのデータを取得し処理する部分
                    $all_plans = SCF::get_option_meta('price-options');
                    $plans = [];
                    // 各プランをループで処理
                    foreach ($all_plans as $key => $value) {
                        // プランのIDを抽出
                        if (preg_match('/^price_course_([0-9]+)$/', $key, $matches)) {
                            $plan_id = $matches[1];
                            // プランの詳細情報を配列に格納
                            $plans[$plan_id]   = [
                                'title'        => $value,
                                'group'        => 'price-' . $plan_id,
                                'course_array' => ['course_' . $plan_id, 'sp-course_' . $plan_id, 'price_' . $plan_id]
                            ];
                        }
                    }
                    // 各プランの価格情報を表示
                    foreach ($plans as $plan_id => $plan) {
                        $price_group = SCF::get_option_meta('price-options', $plan['group']);
                        if (!empty($price_group)) {
                            echo '<div class="top-price__list-wrap">';
                            echo '<p class="top-price__list-title">' . $plan['title'] . '</p>';
                            echo '<dl class="top-price__list">';
                            // 各価格情報をリストとして出力
                            foreach ($price_group as $item) {
                                echo '<div class="top-price__list-item">';
                                echo '<dt class="top-price__list-menu">' .  $item[$plan['course_array'][0]] . $item[$plan['course_array'][1]] . '</dt>';
                                echo '<dd class="top-price__list-price">' . $item[$plan['course_array'][2]] . '</dd>';
                                echo '</div>';
                            }
                            echo '</dl>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <picture class="top-price__image colorbox js-colorbox">
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc01.webp" media="(min-width: 768px)" type="image/webp" width="492" height="746" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp01.webp" alt="海を漂う海亀" width="345" height="227" loading="lazy" />
                </picture>
            </div>
            <div class="top-price__button">
                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="button">View more<span></span></a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>