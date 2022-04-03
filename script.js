function copyToClipBoard() {

    var content = document.getElementById('textArea');

    content.select();
    document.execCommand('copy');

    alert("The Link Is In Your ClipBoard!");
}