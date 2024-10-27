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

});