jQuery(function ($) {
    // この中であればWordpressでも「$」が使用可能になる
    // ページが読み込まれたときに実行
    $(document).ready(function () {
        $(".js-page-top").hide(); // 最初は非表示に
    });

    // スクロールイベント
    $(window).on("scroll", function () {
        let scrollHeight = $(document).height();
        let scrollPosition = $(window).height() + $(window).scrollTop();
        let footHeight = $(".js-footer").innerHeight();
        let scrollPositionFromTop = $(window).scrollTop();
        // ボタン位置の調整
        let cssSettings = scrollHeight - scrollPosition <= footHeight ?
        { position: "absolute", bottom: footHeight + "px", top: "auto" } :
        { position: "fixed", bottom: "0px", top: "auto" };
        $(".js-page-top").css(cssSettings);
        // ボタンの表示・非表示
        if (scrollPositionFromTop > 200) {
            $(".js-page-top").fadeIn();
        } else {
            $(".js-page-top").fadeOut();
        }
    });

    //ドロワーメニュー
    $(window).resize(function () {
        if ($(window).width() >= 768) {
            if ($(".js-drawer").hasClass("is-open")) {
                $(".js-drawer").fadeOut(500, function () {
                    $(this).removeClass("is-open");
                });
                $(".js-hamburger").removeClass("is-open");
                $(".js-header").removeClass("is-open");
            }
        }
    });

    // ハンバーガーメニュー
    $(function () {
        $(".js-hamburger,.js-drawer,.js-drawer a").click(function () {
            if ($(".js-drawer").hasClass("is-open")) {
                // クラスを削除
                $(".js-header").removeClass("is-open");
                $(".js-drawer").fadeOut(500, function () {
                    $(this).removeClass("is-open");
                });
                $(".js-hamburger").removeClass("is-open");
                $("body").toggleClass("is-open");
            } else {
                // クラスを追加
                $(".js-header").addClass("is-open");
                $(".js-drawer").hide().addClass("is-open").fadeIn(500);
                $(".js-hamburger").addClass("is-open");
                $("body").addClass("is-open");
            }
        });
    });

    //mvスライダー
    const mvSwiper = new Swiper(".js-mv-swiper", {
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false, // ユーザー操作後に自動再生を再開する
        },
        speed: 2000,
        allowTouchMove: false, // マウスでのスワイプを禁止
    });

    //カード型レイアウトスライダー
    if (document.querySelector(".js-card-swiper")) {
        const cardSwiper = new Swiper(".js-card-swiper", {
            slidesPerView: "auto",
            autoplay: true,
            speed: 2000,
            loop: true,
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    }

    // gsapオープニングアニメーション
    // ページが読み込まれたときにヘッダーを非表示にする
    if ($(".js-opening-mv-mask").length) {
        gsap.set(".js-header", { autoAlpha: 0 });
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;
        const startHeight = windowHeight;
        const openingTL = gsap.timeline({
            defaults: { duration: 3, ease: "power4.inOut" },
        });
        // 768px以上のときのアニメーション
        if (windowWidth > 768) {
            openingTL.to(".js-opening-mv-mask", { duration: 4, autoAlpha: 0 }).
            fromTo([".js-opening-mv-left", ".js-opening-mv-right"], { y: startHeight }, { y: 0, stagger: 0.12 }, "-=2.7").
            fromTo(".js-mv-swiper", { autoAlpha: 0 }, { autoAlpha: 1 }, "-=1.5").fromTo(".js-mv-title-content", { autoAlpha: 0 }, { autoAlpha: 1 }, "-=2.2").
            fromTo(".js-header", { y: -90, autoAlpha: 0 }, { y: 0, autoAlpha: 1, duration: 0.3 }, "-=2");
        } else {
            gsap.to(".js-header", { autoAlpha: 1, duration: 0.3 }); // 768px以下のとき、ヘッダーをただちに表示する
        }
    } else {
        gsap.to(".js-header", { autoAlpha: 1, duration: 0.3 }); // .js-opening-mv-mask がない場合は、ヘッダーを直接表示する
    }

    $(document).ready(function () {
        // 要素の取得とスピードの設定
        let box = $(".js-colorbox"),
            speed = 700;
        // .colorboxの付いた全ての要素に対して下記の処理を行う
        box.each(function () {
            $(this).append('<div class="is-color"></div>');
            var color = $(this).find($(".is-color")),
                image = $(this).find("img");
            var counter = 0;
            image.css("opacity", "0");
            color.css("width", "0%");
            // スクロールイベントで背景色が画面に現れたかどうかチェック
            $(window).on("scroll", function () {
                var windowBottom = $(window).scrollTop() + $(window).height();
                var colorTop = color.offset().top;
                if (windowBottom > colorTop && counter == 0) {
                    color.delay(200).animate({ width: "100%" }, speed, function () {
                        image.css("opacity", "1");
                        $(this).css({ left: "0", right: "auto" });
                        $(this).animate({ width: "0%" }, speed);
                    });
                    counter = 1;
                }
            });
        });
    });

    // スクロールバーの幅を計算する関数
    function getScrollbarWidth() {
        // 外側のdivを作成し、スクロールバーを表示させる
        const outer = document.createElement('div');
        outer.style.visibility = 'hidden';
        outer.style.overflow = 'scroll';
        document.body.appendChild(outer);
        // 内側のdivを作成
        const inner = document.createElement('div');
        outer.appendChild(inner);
        // スクロールバーの幅を計算（外側の幅 - 内側の幅）
        const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;
        // 作成した要素を削除
        outer.parentNode.removeChild(outer);
        return scrollbarWidth;
    }
    // モーダルを開くイベントリスナー
    $(".js-modal-open").each(function () {
        $(this).on("click", function (e) {
            e.preventDefault();
            const target = $(this).data("target");
            const modal = document.getElementById(target);
            const scrollbarWidth = getScrollbarWidth();
            // スクロールバーの幅が0より大きい場合、bodyの右のpaddingに設定
            if (scrollbarWidth > 0) {
                $("body").css("padding-right", scrollbarWidth + "px");
            }
            // モーダルを表示
            $(modal).css({ display: "flex", opacity: 0 }).animate({ opacity: 1 }, 600);
            $("html,body").css("overflow", "hidden"); // ページのスクロールを禁止
        });
    });
    // モーダルを閉じるイベントリスナー
    $(".js-modal").on("click", function () {
        $(this).animate({ opacity: 0 }, 600, function () {
            $(this).css("display", "none");
            // bodyのpaddingを元に戻し、スクロールを許可
            $("body").css("padding-right", 0);
            $("html,body").css("overflow", "auto");
        });
    });


    // タブメニュー
    $(".js-tab-menu").on("click", function () {
        $(".js-tab-menu").removeClass("is-active");
        $(".js-tab-content").removeClass("is-active");
        $(this).addClass("is-active");
        var number = $(this).data("number");
        $("#" + number).addClass("is-active");
    });

    //別ページからタブメニューへダイレクトリンク
    $(document).ready(function() {
        var hash = window.location.hash;
        if (hash) {
            // ハッシュに基づいてタブをアクティブにする
            $('.js-tab-menu').removeClass('is-active');
            $('.js-tab-content').removeClass('is-active');
            $('.js-tab-menu[data-number="' + hash.substring(1) + '"]').addClass('is-active');
            $(hash).addClass('is-active');
        }
    });

    // アーカイブアコーディオンメニュー
    $(".js-blog-side-menu-archive-list-item:first .js-blog-side-menu-archive-month-wrap").show();
    $(".js-blog-side-menu-archive-list-item:first .js-archive-accordion").addClass("is-open");
    $(".js-archive-accordion").on("click", function () {
        $(this).next().slideToggle(550);
        $(this).toggleClass("is-open");
    });

    // faqアコーディオンメニュー
    $(".js-faq-question").next().slideDown();
    $(".js-faq-question").addClass("is-open");
    $(".js-faq-question").on("click", function () {
        $(this).next().slideToggle(600);
        $(this).toggleClass("is-open");
    });


    // コンタクトフォームのバリデーションチェック
    const form = document.querySelector(".js-form");
    // フォームが存在する場合のみ以下の処理を実行
    if (form) {
        // ".js-form__error"クラスを持つエラーメッセージ要素を選択
        const errorMessage = document.querySelector(".js-form__error");
        // 入力値のバリデーションを行う関数
        function validateInput(input) {
            // 入力値が空白の場合はエラーを表示
            if (!input.value.trim()) {
                input.classList.add("is-error");
                return false;
            } else {
                // 入力値が正しい場合はエラー表示を消す
                input.classList.remove("is-error");
                return true;
            }
        }
        // 必須フィールドを全て選択
        const fields = form.querySelectorAll(".wpcf7-validates-as-required, .wpcf7-textarea");
        // 各フィールドに対して入力イベントリスナーを追加
        fields.forEach((field) => {
            field.addEventListener("input", () => {
                validateInput(field);
            });
        });
        // フォームの送信イベントに対する処理
        form.addEventListener("submit", (e) => {
            e.preventDefault(); // デフォルトの送信処理をキャンセル
            let isValidForm = true; // フォームのバリデーション状態
            // 全フィールドのバリデーションを確認
            fields.forEach((field) => {
                if (!validateInput(field)) {
                    isValidForm = false;
                }
            });
            // フォームのバリデーションが全て正しい場合
            if (isValidForm) {
                errorMessage.classList.remove("is-error");
                // ここでフォームの送信処理を行う
            } else {
                // バリデーションエラーがある場合はエラーメッセージを表示
                errorMessage.classList.add("is-error");
            }
        });
    }


    // 送信ボタン無効化
    const submit = document.querySelector('.wpcf7-submit');
    const checkbox = document.querySelector('.form-check [type="checkbox"]');
    // 送信ボタンとチェックボックスがページに存在するか確認
    if (submit && checkbox) {
        // 送信ボタンの初期状態を設定
        submit.disabled = true;
        // チェックボックスにイベントリスナーを追加
        checkbox.addEventListener('change', () => {
            submit.disabled = !checkbox.checked;
        });
    }


});
