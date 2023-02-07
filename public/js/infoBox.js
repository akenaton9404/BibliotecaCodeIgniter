function hideInfo() {
    document.getElementById('info-box').style.opacity = document.getElementById('info-box').style.opacity === "0" ? "1" : "0"


    setTimeout(function(){
        if (document.getElementById('info-box').style.opacity === "0") {
            document.getElementById('info-box').style.display = "none"
        }
        else {
            document.getElementById('info-box').style.display = "flex"
        }
    }, parseInt(document.getElementById('info-box').currentStyle.animationDelay) * 1.1);
}