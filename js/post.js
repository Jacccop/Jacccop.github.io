function addBold(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[b][/b]";
}
function addItalic(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[i][/i]";
}
function addUnderline(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[u][/u]";
}
function addLineThrough(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[s][/s]";
}
function addColor(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[color=][/color]";
}
function addUrl(event) {
    var targ = event.target || event.srcElement;
    document.getElementById("contentInput").value += "[url=]link[/url]";
}