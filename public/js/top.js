/* -----------------
ドロップダウンメニュー
----------------- */
document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const categoriesDropdownButton = document.getElementById('categoriesDropdownButton');
    const categoriesDropdownMenu = document.getElementById('categoriesDropdownMenu');

    // 名前のドロップダウンのクリックイベント
    dropdownButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('hidden');
    });

    // カテゴリードロップダウンのクリックイベント
    categoriesDropdownButton.addEventListener('click', function () {
        categoriesDropdownMenu.classList.toggle('categories-hidden');
    });

    // 他の部分をクリックするとドロップダウンを閉じる
    document.addEventListener('click', function (e) {
        if (!dropdownButton.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
        if (!categoriesDropdownButton.contains(e.target)) {
            categoriesDropdownMenu.classList.add('categories-hidden');
        }
    });
});

// 名前のドロップダウンを表示・非表示
function showNameDropdown() {
    document.getElementById("dropdownMenu").classList.remove("hidden");
}
function hideNameDropdown() {
    document.getElementById("dropdownMenu").classList.add("hidden");
}

// カテゴリードロップダウンを表示・非表示
function showCategoriesDropdown() {
    document.getElementById("categoriesDropdownMenu").classList.remove("categories-hidden");
}
function hideCategoriesDropdown() {
    document.getElementById("categoriesDropdownMenu").classList.add("categories-hidden");
}

// サブカテゴリーメニューを表示・非表示
function showSubDropdown(menuId) {
    document.getElementById(menuId).classList.add('show');
}
function hideSubDropdown(menuId) {
    document.getElementById(menuId).classList.remove('show');
}


/* -----------------
ヘッダー行をスクロール
----------------- */
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header-container');
    if (window.scrollY > 0) {
        header.classList.add('shadow');
    } else {
        header.classList.remove('shadow');
    }
});