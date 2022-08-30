document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
    element.addEventListener("keyup", function (e) {
        let cursorPosition = this.selectionStart;
        let value = parseInt(this.value.replace(/[^,\d]/g, ""));
        let originalLenght = this.value.length;
        if (isNaN(value)) {
            this.value = "";
        } else {
            this.value = value.toLocaleString("id-ID", {
                currency: "IDR",
                style: "currency",
                minimumFractionDigits: 0,
            });
            cursorPosition =
                this.value.length - originalLenght + cursorPosition;
            this.selectionRange(cursorPosition, cursorPosition);
        }
    });
});
