<?php get_header(); ?>

<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-policy-sp.webp" alt="珊瑚礁と熱帯魚の群れ" />
            </picture>
            <h1 class="sub-mv__title">privacy<span>&nbsp;policy</span></h1>
        </div>
    </section>
    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- legal-document -->
    <section class="legal-document layout-legal-document">
        <div class="legal-document__inner">
            <h2 class="legal-document__title">プライバシーポリシー</h2>
            <p class="legal-document__introduction">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
            <div class="legal-document__items">
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">概要&nbsp;当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。</li>
                            <li class="legal-document__description-number">収集する情報&nbsp;当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。</li>
                        </ol>
                    </div>
                </div>
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <p class="legal-document__description-text">また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">情報の使用&nbsp;当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。</li>
                        </ol>
                    </div>
                </div>
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <p class="legal-document__description-text">・お客様からのお問い合わせやサポートの提供&nbsp;・当社のサービスや製品の提供&nbsp;・当社のサイトの改善や新しいサービスの開発&nbsp;・法律や規制に基づく義務の履行</p>
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">情報の共有&nbsp;当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。</li>
                        </ol>
                    </div>
                </div>
                <div class="legal-document__item">
                    <div class="legal-document__description">
                        <p class="legal-document__description-text">・お客様の同意がある場合&nbsp;・法律や規制に基づく場合&nbsp;・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
                        <ol class="legal-document__description-numbers">
                            <li class="legal-document__description-number">セキュリティ&nbsp;当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。</li>
                            <li class="legal-document__description-number">Cookieの使用&nbsp;当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。</li>
                            <li class="legal-document__description-number">お問い合わせ先&nbsp;当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。&nbsp;[会社名] [住所] [電話番号] [メールアドレス]</li>
                            <li class="legal-document__description-number">プライバシーポリシーの変更&nbsp;当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。</li>
                        </ol>
                    </div>
                </div>
                <div class="legal-document__item">
                    <p class="legal-document__item-text">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
                </div>
            </div>
        </div>
    </section <?php get_footer(); ?>