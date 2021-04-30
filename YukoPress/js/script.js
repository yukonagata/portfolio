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

