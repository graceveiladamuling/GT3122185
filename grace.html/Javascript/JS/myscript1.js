function lampu(sw) {
    let pic;
    if (sw == 1) {
        pic = "Image/lampuhidup.gif";
    }   else if (sw == 2) {
        pic = "Image/giphy.gif";
    }   else {
        pic = "Image/lampumati.gif";
    }
    document.getElementById("lampImage").src = pic;
}
