function showFlag(element) {
    var flag = document.getElementById(element);
    if (flag.style.opacity === "0") {
        flag.style.opacity = "1";
    } else {
        flag.style.opacity = "0";
    }
}