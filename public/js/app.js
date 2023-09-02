document.addEventListener("DOMContentLoaded", function () {
    var copyButton = document.getElementById("copiar");
    var shortUrlElement = document.getElementById("short-url");

    copyButton.addEventListener("click", function () {
        var range = document.createRange();
        range.selectNode(shortUrlElement);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);

        try {
            document.execCommand("copy");
            alert("URL curta copiada para a área de transferência!");
        } catch (error) {
            console.error("Erro ao copiar: ", error);
        } finally {
            window.getSelection().removeAllRanges();
        }
    });
});