document.addEventListener('DOMContentLoaded', function() {
    const priceInputs = document.querySelectorAll('.price-input');

    priceInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            // 数値以外の文字を削除
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
});
