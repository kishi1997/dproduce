//#BTNクリックで#MENUを表示.disp {display: none;}
$(function () {
  $(".menuNavi").click(function () {
    $("#menuNavi__menu").toggleClass("icon-menu");
    $("#menuNavi__menu").toggleClass("icon-close");
    $(".mainNavi").toggleClass("menu-open");
  });
});

//Scroll Rules
$(function () {
  if (window.matchMedia("(max-width: 640px)").matches) {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 50;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  } else {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 100;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  }
});

//施工事例(サムネイル固定)
$(function () {
  $(".yao-slider").slick({
    arrows: false,
    fade: true,
    asNavFor: ".yao-thumbnail",
  });
  $(".yao-thumbnail").slick({
    slidesToShow: 6,
    asNavFor: ".yao-slider",
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        },
      },
    ],
  });
});
// ヘッダー追従時に背景色追加
$(window).on("scroll", function () {
  const fvBottom = $(".top-fv").offset().top + $(".top-fv").outerHeight();
  const scroll = $(window).scrollTop();

  if (scroll > fvBottom) {
    $("header").addClass("is-bg");
  } else {
    $("header").removeClass("is-bg");
  }
});
//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
  });
});

// headerの高さを計測して、bodyのpading-topにその値を追加
// function adjustBodyPadding() {
//   const body = document.body;
//   console.log(body);
//   const headerHeight = document.querySelector("header").offsetHeight;
//   console.log(headerHeight);
//   body.style.paddingTop = headerHeight + "px";
// }
// window.addEventListener("resize", adjustBodyPadding);
// window.addEventListener("load", adjustBodyPadding);

document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;

  // ==========================================
  // ドロワーメニュー開閉
  // ==========================================
  const drawerOpenBtn = document.querySelector(".js-drawer-open");
  const drawerCloseBtns = document.querySelectorAll(".js-drawer-close");
  const drawer = document.querySelector(".js-drawer");

  if (drawerOpenBtn && drawer) {
    const toggleDrawer = () => {
      drawer.classList.toggle("is-active");
      body.classList.toggle("is-locked");
    };

    drawerOpenBtn.addEventListener("click", toggleDrawer);

    drawerCloseBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        drawer.classList.remove("is-active");
        body.classList.remove("is-locked");
      });
    });
  }

  // ==========================================
  // SP用アコーディオンメニュー
  // ==========================================
  const accordions = document.querySelectorAll(".js-accordion");

  accordions.forEach((acc) => {
    const trigger = acc.querySelector(".js-accordion-trigger");

    if (window.innerWidth > 768) {
      acc.classList.add("is-open");
    } else {
      if (trigger.textContent.trim() === "ブログ") {
        acc.classList.add("is-open");
      }
    }

    trigger.addEventListener("click", () => {
      if (window.innerWidth <= 768) {
        acc.classList.toggle("is-open");
      }
    });
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      accordions.forEach((acc) => acc.classList.add("is-open"));
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  // ==========================================
  // STRENGTHセクション アコーディオン開閉
  // ==========================================
  const strengthAccordions = document.querySelectorAll(
    ".p-top-strength__accordion",
  );
  strengthAccordions.forEach((acc) => {
    // 変更点：ボタンだけでなく、バー全体（トリガー）を取得する
    const trigger = acc.querySelector(".p-top-strength__accordion-trigger");
    if (trigger) {
      trigger.addEventListener("click", () => {
        // is-open クラスの付け外しで開閉
        acc.classList.toggle("is-open");
      });
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  // ==========================================
  // SERVICEセクション タブ切り替え
  // ==========================================
  const tabItems = document.querySelectorAll(".p-top-service__tab-item");
  const tabPanels = document.querySelectorAll(".p-top-service__panel");

  if (tabItems.length > 0 && tabPanels.length > 0) {
    tabItems.forEach((tab) => {
      tab.addEventListener("click", (e) => {
        // ボタン自体のデフォルト動作を防ぐ
        e.preventDefault();

        // クリックされたタブが持つターゲットIDを取得（例: "tab-outsourcing"）
        const targetId = tab.getAttribute("data-tab");

        // 1. すべてのタブから is-active を外す
        tabItems.forEach((t) => t.classList.remove("is-active"));
        // 2. クリックされたタブに is-active を付ける
        tab.classList.add("is-active");

        // 3. すべてのパネルから is-active を外す
        tabPanels.forEach((p) => p.classList.remove("is-active"));
        // 4. 対応するIDのパネルに is-active を付ける
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) {
          targetPanel.classList.add("is-active");
        }
      });
    });
  }
});
document.addEventListener("DOMContentLoaded", () => {
  // ==========================================
  // MODEL CASE スライダー (Slick)
  // ==========================================
  // jQueryが必須となるため、$ を使用します。
  if (typeof $ !== "undefined" && $.fn.slick) {
    $(".js-case-slider").slick({
      autoplay: false, // 自動再生
      autoplaySpeed: 4000, // 自動再生の速度
      speed: 800, // スライド切り替えのアニメーション速度
      slidesToShow: 1, // 1枚ずつ表示
      slidesToScroll: 1, // 1枚ずつスクロール
      arrows: true, // 矢印ボタンを表示
      dots: false, // 下部のドットはデザイン上に無いため非表示
      fade: true, // フェードで切り替える場合は true (スライドの場合は false)
      pauseOnHover: true, // マウスオーバーで自動再生を一時停止
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  // ==========================================
  // VOICES スライダー (Slick) とプログレスバー連動
  // ==========================================
  if (typeof $ !== "undefined" && $.fn.slick) {
    const $voicesSlider = $(".js-voices-slider");
    const $voicesProgress = $(".js-voices-progress");

    // 1. スライダー初期化時
    $voicesSlider.on("init", function (event, slick) {
      calcProgress(slick.currentSlide);
    });

    // 2. スライド切り替え時
    $voicesSlider.on(
      "beforeChange",
      function (event, slick, currentSlide, nextSlide) {
        calcProgress(nextSlide);
      },
    );

    // 3. 【修正】バーを3段階でループ移動させる関数
    function calcProgress(nextSlide) {
      // nextSlide（0, 1, 2, 3, 4...）を 3 で割った余りを出す
      // 0 % 3 = 0 （1枚目の位置）
      // 1 % 3 = 1 （2枚目の位置）
      // 2 % 3 = 2 （3枚目の位置）
      // 3 % 3 = 0 （4枚目だけどバーは1枚目の位置へ戻る）
      // 4 % 3 = 1 （5枚目だけどバーは2枚目の位置へ）

      const loopIndex = nextSlide % 3;

      // 移動量を計算（0, 100, 200 のいずれかになる）
      const movePercent = loopIndex * 100;

      // translateX を更新してバーを移動
      $voicesProgress.css("transform", `translateX(${movePercent}%)`);
    }

    // 4. Slickの実行
    $voicesSlider.slick({
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 800,
      infinite: true, // 無限ループ（デフォルトでtrueですが明示）
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            arrows: false,
          },
        },
      ],
    });
  }
});
document.addEventListener("DOMContentLoaded", () => {
  // ==========================================
  // SEMINAR スライダー (Slick)
  // ==========================================
  if (typeof $ !== "undefined" && $.fn.slick) {
    $(".js-seminar-slider").slick({
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 800,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            fade: false,
          },
        },
      ],
    });
  }
});
