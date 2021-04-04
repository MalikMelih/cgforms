function search(name) {
    var id = document.getElementById(name);
    if (id.style.left == "-400px")
    {
        id.style.left = "70px";
    }
    else
    {
        id.style.left = "-400px";
    }
};

document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        document.getElementById('tb').style.left = "-400px";
        document.getElementById('search-bar').style.left = "-400px";
    }
};

function alert(msg){
    alert(msg);
}

function qr(x)
{
    var a = document.getElementById("sb-div");
    var b = document.getElementById("sb-input");
    var c = document.getElementById("sb-div-qr");
    var d = document.getElementById("sb-input-qr");
    if (x=="qr") {       
        
        a.setAttribute("id", "sb-div-qr");
        b.setAttribute("id", "sb-input-qr");
        b.placeholder = "QR Kod İle Ara";
    }
    else if (x=="code") {       
        c.setAttribute("id", "sb-div");
        d.setAttribute("id", "sb-input");
        d.placeholder = "Barkod veya Form Numarasıyla Ara";
    }
}