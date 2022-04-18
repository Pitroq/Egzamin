function bigger(img){
    document.body.innerHTML += "<div id='gallery-bigger-box' onClick='defeault();'><img class='gallery-bigger-item' src='"+img+"'></div>";
    // document.body.innerHTML += "<div id='gallery-bigger-box'></div>";
}
function defeault() {
    document.getElementById("gallery-bigger-box").remove();
}