'use strict';

console.log('読み込めてるよ！');

//------------------アニメーション------------------------
AOS.init();
//------------------アニメーションここまで------------------------

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
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    }); 
//------------------FavoriteSwiperここまで------------------

