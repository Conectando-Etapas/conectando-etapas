function darkMode() {

    const xhttp = new XMLHttpRequest();
    let html = document.getElementsByTagName('html');
    
    if (html[0].getAttribute('data-bs-theme') == "dark") {
        var color_mode = "light";
        xhttp.open("GET", "system/darkmode.php?darkmode=0");
    } else {
        var color_mode = "dark";
        xhttp.open("GET", "system/darkmode.php?darkmode=1");
    }
    html[0].setAttribute('data-bs-theme', color_mode);

    xhttp.onload = function(){
        console.log(`(${this.response}) ${this.responseText}.`);
    }

    xhttp.send();
}