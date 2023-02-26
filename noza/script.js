'use strict';

console.log('読み込めてるよ！');

//------------------トップに戻るボタン------------------------
window.onscroll = () => {
    const position = document.documentElement.scrollTop || document.body.scrollTop;
    const pageTop = document.getElementById('topBtn');
    if (position >= 600) {
        pageTop.classList.add('active');
    } else {
        pageTop.classList.remove('active');
    }

    const pageTop2 = document.getElementById('header');
    if (position >= 600) {
        pageTop2.classList.add('active');
    } else {
        pageTop2.classList.remove('active');
    }
};
//------------------トップに戻るボタンここまで----------------


//------------------アコーディオンメニュー------------------------
jQuery(function ($) {  
    // 最初のコンテンツ以外は非表示
    $(".qanda__box:not(:first-of-type) dd").css("display", "none");
    // 矢印の向きを変えておく
    $(".qanda__box:first-of-type dt").addClass("open");
    //タイトルがクリックされたら
    $(".qanda__q").on('click', function () {
      //クリックしたjs-accordion-title以外の全てのopenを取る
      $(".qanda__q").not(this).removeClass("open");
      //クリックされたjs-accordion-title以外のcontentを閉じる
      $(".qanda__q").not(this).next().slideUp(300);
      //thisにopenクラスを付与
      $(this).toggleClass("open");
      //thisのcontentを展開、開いていれば閉じる
      $(this).next().slideToggle(300);
    });
  });
//------------------アコーディオンメニューここまで----------------
