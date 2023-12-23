<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-sp.webp" alt="海中を漂う熱帯魚" />
            </picture>
            <h1 class="sub-mv__title">information</h1>
        </div>
    </section>

    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- information -->
    <section class="information layout-information">
        <div class="information__inner inner">
            <div class="information__tab information-tab">
                <ul class="information-tab__menu">
                    <li class="information-tab__menu-item js-tab-menu is-active" data-number="tab01">ライセンス<br class="u-mobile" />講習</li>
                    <li class="information-tab__menu-item js-tab-menu" data-number="tab02">ファン<br class="u-mobile" />ダイビング</li>
                    <li class="information-tab__menu-item js-tab-menu" data-number="tab03">体験<br class="u-mobile" />ダイビング</li>
                </ul>
                <ul class="information-tab__list">
                    <li id="tab01" class="information-tab__list-item js-tab-content is-active">
                        <div class="information-tab__wrap">
                            <div class="information-tab__content">
                                <h2 class="information-tab__head">ライセンス講習</h2>
                                <p class="information-tab__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&nbsp;&#33;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&nbsp;&#33;</p>
                            </div>
                            <figure class="information-tab__image">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab01.webp" alt="ダイビング講習の様子" width="297" height="189" loading="lazy" />
                            </figure>
                        </div>
                    </li>
                    <li id="tab02" class="information-tab__list-item js-tab-content">
                        <div class="information-tab__wrap">
                            <div class="information-tab__content">
                                <h2 class="information-tab__head">ファンダイビング</h2>
                                <p class="information-tab__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                            </div>
                            <figure class="information-tab__image">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab02.webp" alt="ダイビング講習の様子" width="297" height="189" loading="lazy" />
                            </figure>
                        </div>
                    </li>
                    <li id="tab03" class="information-tab__list-item js-tab-content">
                        <div class="information-tab__wrap">
                            <div class="information-tab__content">
                                <h2 class="information-tab__head">体験ダイビング</h2>
                                <p class="information-tab__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                            </div>
                            <figure class="information-tab__image">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab03.webp" alt="ダイビング講習の様子" width="297" height="189" loading="lazy" />
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>