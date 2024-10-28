import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css'; // スタイルシートのインポート
import 'slick-carousel/slick/slick-theme.css'; // テーマのインポート

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/** -----------------
topスライドショー
----------------- **/
$(document).ready(function() {
    console.log("jQuery is ready."); // デバッグメッセージ
    $(".full-screen").slick({
        centerMode: true,
        centerPadding: '1%',
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
});

/** -----------------
商品一覧スライドショー
----------------- **/
$('.js-slick').slick({
    autoplay: false,
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 5,
  });