<?php get_header(); ?>

<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-sp.webp" alt="珊瑚礁と熱帯魚の群れ" />
            </picture>
            <h1 class="sub-mv__title">terms&nbsp;of<span>&nbsp;service</span></h1>
        </div>
    </section>
    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- legal-document -->
    <section class="legal-document layout-legal-document">
        <div class="legal-document__inner">
            <h2 class="legal-document__title">利用規約</h2>
            <p class="legal-document__introduction">以下は、Webサイトで使用する一般的な利用規約の例です。</p>
            <div class="legal-document__items">
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">概要&nbsp;この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。</li>
                            <li class="legal-document__description-number">サービスの利用&nbsp;当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。</li>
                            <li class="legal-document__description-number">禁止事項&nbsp;お客様は、以下の行為を禁止します。</li>
                        </ol>
                    </div>
                    <p class="legal-document__item-text">・当社のサービスに対して不正なアクセスをすること&nbsp;・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること&nbsp;・当社のサービスを商業目的で利用すること&nbsp;・当社のサービスに関する知的財産権を侵害する行為をすること&nbsp;・その他、法律や公序良俗に反する行為をすること</p>
                </div>
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">知的財産権&nbsp;当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。</li>
                            <li class="legal-document__description-number">免責事項 当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。</li>
                            <li class="legal-document__description-number">プライバシー&nbsp;当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。</li>
                            <li class="legal-document__description-number">その他の規定&nbsp;本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。</li>
                            <li class="legal-document__description-number">利用規約の変更&nbsp;当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。</li>
                        </ol>
                    </div>
                </div>
                <div class="legal-document__item">
                    <p class="legal-document__item-text">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>