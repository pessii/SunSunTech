document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('hidden');
    });

    // 画面の他の部分をクリックするとメニューを閉じる
    document.addEventListener('click', function (e) {
        if (!dropdownButton.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });

    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let slides = document.getElementsByClassName("slides");
        let dots = document.getElementsByClassName("dot");

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        for (let j = 0; j < dots.length; j++) {
            dots[j].className = dots[j].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";  
        dots[slideIndex - 1].className += " active";  
    }

    // 自動でスライドを切り替える
    setInterval(function() {
        plusSlides(1);
    }, 5000); // 5秒ごとに次へ

});