//  ハンバーガーメニュー
let btn = document.getElementById("hamburger"); // ハンバーガーボタン
let menu = document.getElementById("menu-sp"); // ハンバーガーメニュー

// ボタンがクリックされたらclassを追加・削除
btn.addEventListener("click", function () {
    btn.classList.toggle("btn--open");
    menu.classList.toggle("add-menu");
});


let navLinks = document.querySelectorAll(".menu-sp__link");

navLinks.forEach(function(element){
    element.addEventListener('click', function(){
        btn.classList.remove("btn--open");
        menu.classList.remove("add-menu");
    });
});

// スライダー初期化 会員制度
var swiper_membership  = new Swiper ('.swiper-membership', {
  //画面サイズによって、パラメーターを変える
  // ここからオプション
  spaceBetween:0,
  slidesPerView: 1,
  breakpoints: {
    // 540px以上の場合
    547: {
      slidesPerView: 2,
    },
    // 768px以上の場合
    648: {
      slidesPerView: 3,
    },
    // 980px以上の場合
    960: {
      slidesPerView: 4,
    }
  },

  
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// スライダー初期化　馬たち
var swiper  = new Swiper ('.swiper-horse', {
  // ここからオプション
  spaceBetween:10,
  slidesPerView: 3, // 一度に表示する枚数
  loop: true,
  pagination: {
    el: ".swiper-pagination-horse",
    clickable: true,
  },
});

