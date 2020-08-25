var button = document.getElementById("buttonAddress");

button.onclick = function() {
    var textShow = document.getElementById("fotterAddress1");
    if (textShow.style.display !== 'none') {
        textShow.style.display = 'none';
    }
    else {
        textShow.style.display = 'block';
    }
};