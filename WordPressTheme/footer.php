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
$terms = esc_url(home_url('/terms/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
// 各タブへのリンク
$tab1 = $information . '#tab01';
$tab2 = $information . '#tab02';
$tab3 = $information . '#tab03';
?>

<!-- contact -->
<section class="contact layout-top-contact">
    <div class="contact__inner inner">
        <div class="contact__container">
            <div class="contact__access-content">
                <div class="contact__logo">
                    <a href="<?php echo $top; ?>">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-codeups-logo.svg" alt="CodeUps" />
                    </a>
                </div>
                <div class="contact__access">
                    <address class="contact__text-wrap">
                        <p class="contact__text">沖縄県那覇市1-1</p>
                        <p class="contact__text">TEL:0120-000-0000</p>
                        <p class="contact__text">営業時間:8:30-19:00</p>
                        <p class="contact__text">定休日:毎週火曜日</p>
                    </address>
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11422.225158092015!2d127.76178219960295!3d26.434769460374337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e51bb839672015%3A0x88661c0ac8410d40!2z6Z2S44Gu5rSe56qf!5e0!3m2!1sja!2sjp!4v1697484217969!5m2!1sja!2sjp" title="マップ" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
                    </div>
                </div>
            </div>
            <div class="contact__info-content">
                <div class="contact__title-wrap section-title">
                    <span class="section-title__sub section-title__sub--large">contact</span>
                    <h2 class="section-title__main section-title__main--space">お問い合わせ</h2>
                    <p class="section-title__info">ご予約・お問い合わせはコチラ</p>
                </div>
                <div class="contact__button">
                    <a href="<?php echo $contact; ?>" class="button">Contact us<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<div class="page-top js-page-top">
    <a href="#">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/scroll-button.svg" alt="PAGE TOP" width="80" height="80" loading="lazy" />
    </a>
</div>

<footer class="footer layout-footer js-footer">
    <div class="footer__inner inner">
        <div class="footer__logo-wrap">
            <div class="footer__logo">
                <a href="<?php echo $top; ?>">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps" />
                </a>
            </div>
            <div class="footer__sns-icon-wrap">
                <a href="#" class="footer__sns-icon" target="_blank" rel="noopener">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="FacebookLogo" width="24" height="24" loading="lazy" />
                </a>
                <a href="#" class="footer__sns-icon" target="_blank" rel="noopener">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="InstagramLogo" width="24" height="24" loading="lazy" />
                </a>
            </div>
        </div>
        <nav class="footer__menu global-menu">
            <div class="global-menu__left">
                <div class="global-menu__wrap">
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"> <a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                        <li class="global-menu__item"><a href="#">ライセンス取得</a></li>
                        <li class="global-menu__item"><a href="#">貸切体験ダイビング</a></li>
                        <li class="global-menu__item"><a href="#">ナイトダイビング</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $about; ?>">私たちについて</a></li>
                    </ul>
                </div>
                <div class="global-menu__wrap">
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                        <li class="global-menu__item"><a href="<?php echo $tab1; ?>">ライセンス講習</a></li>
                        <li class="global-menu__item"><a href="<?php echo $tab2; ?>">体験ダイビング</a></li>
                        <li class="global-menu__item"><a href="<?php echo $tab3; ?>">ファンダイビング</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $blog; ?>">ブログ</a></li>
                    </ul>
                </div>
            </div>
            <div class="global-menu__right global-menu__right--space">
                <div class="global-menu__wrap">
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $voice; ?>">お客様の声</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $price; ?>">料金一覧</a></li>
                        <li class="global-menu__item"><a href="#">ライセンス講習</a></li>
                        <li class="global-menu__item"><a href="#">体験ダイビング</a></li>
                        <li class="global-menu__item"><a href="#">ファンダイビング</a></li>
                    </ul>
                </div>
                <div class="global-menu__wrap">
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $faq; ?>">よくある質問</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $terms; ?>">利用規約</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                    </ul>
                    <ul class="global-menu__items">
                        <li class="global-menu__item-head"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <small class="footer__copyright"> Copyright&nbsp;©&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved. </small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>