'use strict';

console.log('読み込めてるよ！');

//------------------フェードインアニメーション------------------------
AOS.init();
//------------------フェードインアニメーションここまで------------------------

//------------------トップに戻るボタン------------------------
window.onscroll = () => {
    let position = document.documentElement.scrollTop || document.body.scrollTop;
    const pageTop = document.getElementById('topBtn');
    if (position >= 350) {
        pageTop.classList.add('active');
    } else {
        pageTop.classList.remove('active');
    }
};
//------------------トップに戻るボタンここまで----------------



//------------------ハンバーガーメニュー----------------------
const gNaviBtn = document.getElementById('gNaviBtn');
const gNavi = document.getElementById('gNavi');

gNaviBtn.onclick = (e) => {
    e.preventDefault;
    gNaviBtn.classList.toggle('active');
    gNavi.classList.toggle('active');
};

gNavi.onclick = (e) => {
    e.preventDefault;
    gNaviBtn.classList.remove('active');
    gNavi.classList.remove('active');
};
//------------------ハンバーガーメニューここまで--------------


//------------------好きなことSwiper-------------------------
    var swiper01 = new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        renderBullet: function (index, className) {
            //中に数字を表示
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
        },
    
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true // クロスフェードさせる
      },
    }); 
//------------------好きなことSwiperここまで------------------

