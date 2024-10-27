import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css'; // スタイルシートのインポート
import 'slick-carousel/slick/slick-theme.css'; // テーマのインポート

$(document).ready(function(){
    $('.container').slick({
        // Slickのオプションをここに設定
        autoplay: true,
        dots: true,
    });
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
