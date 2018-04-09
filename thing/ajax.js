function ajax() {
    let debug = true;
    let weight = document.getElementById("weight").value;
    let length = document.getElementById("length").value;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else  {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let controlScript = "BMI.php";
    let httpString = controlScript + "?weight=" + weight + "&length=" + length;
    let httpResponse = "";
    if (debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 & xmlhttp.status == 200) {
            httpResponse = xmlhttp.responseText;
            document.getElementById("resultaat").innerHTML = httpResponse;

        }
    }
}

