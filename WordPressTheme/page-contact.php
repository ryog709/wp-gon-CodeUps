<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <picture class="sub-mv__picture">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.webp" alt="エメラルドグリーンの海" />
            </picture>
            <h1 class="sub-mv__title">contact</h1>
        </div>
    </section>
    
    <!-- breadcrumbs -->
    <?php get_template_part('parts/breadcrumbs') ?>

    <!-- contact-form -->
    <section class="contact-form layout-contact-form">
        <div class="contact-form__inner">
            <form class="contact-form__entry form js-form" action="#" novalidate>
                <p class="form__error js-form__error">※必須項目が入力されていません。<br class="u-mobile" />入力してください。</p>
                <dl class="form__wrap">
                    <dt class="form__label">
                        <label for="name">お名前<span>必須</span></label>
                    </dt>
                    <dd class="form__input form-input">
                        <input type="text" id="name" name="name" placeholder="沖縄&emsp;太郎" required="required" />
                    </dd>
                </dl>
                <dl class="form__wrap">
                    <dt class="form__label">
                        <label for="email">メールアドレス<span>必須</span></label>
                    </dt>
                    <dd class="form__input form-input">
                        <input type="email" id="email" name="email" placeholder="aaa000@ggmail.com" required="required" />
                    </dd>
                </dl>
                <dl class="form__wrap">
                    <dt class="form__label">
                        <label for="tel">電話番号<span>必須</span></label>
                    </dt>
                    <dd class="form__input form-input">
                        <input type="tel" id="tel" name="tel" placeholder="000-0000-0000" required="required" />
                    </dd>
                </dl>
                <dl class="form__wrap">
                    <dt class="form__label">お問合せ項目<span>必須</span></dt>
                    <dd class="form__checkbox form-checkbox">
                        <label>
                            <input type="checkbox" checked />
                            <span>ダイビング講習について</span>
                        </label>
                        <label>
                            <input type="checkbox" />
                            <span>ファンダイビングについて</span>
                        </label>
                        <label>
                            <input type="checkbox" />
                            <span>体験ダイビングについて</span>
                        </label>
                    </dd>
                </dl>
                <dl class="form__wrap form__wrap--select">
                    <dt class="form__label">キャンペーン</dt>
                    <dd class="form__select form-select">
                        <select id="address">
                            <option hidden>キャンペーン内容を選択</option>
                            <option value="ライセンス取得">ライセンス取得</option>
                            <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                            <option value="ナイトダイビング">ナイトダイビング</option>
                            <option value="貸切ファンダイビング">貸切ファンダイビング</option>
                        </select>
                    </dd>
                </dl>
                <dl class="form__wrap form__wrap--textarea">
                    <dt class="form__label">
                        <label for="message">お問合せ内容<span>必須</span></label>
                    </dt>
                    <dd class="form__textarea form-textarea">
                        <textarea name="message" id="message" required="required"></textarea>
                    </dd>
                </dl>
                <div class="form__check form-check">
                    <label>
                        <input type="checkbox" />
                        <span>個人情報の取り扱いについて同意のうえ送信します。</span>
                    </label>
                </div>
                <div class="form__submit form-submit">
                    <input type="submit" value="send" />
                </div>
            </form>
        </div>
    </section>

    <?php get_footer(); ?>