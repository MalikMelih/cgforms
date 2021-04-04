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
        document.getElementById('ab').style.left = "-400px";
        document.getElementById('sb').style.left = "-400px";
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

function chg(x,y)
{
    var a = document.getElementById("lc-bg");
    var b = document.getElementById("ic-img");
    var c = document.getElementById("pdf");
    var d = document.getElementById("rc-items");
    if(x=="doviz")
    {
        a.setAttribute("class", "bg-doviz");
        b.setAttribute("src", "assets/img/logo/light/doviz.png");
        anime(a);
        anime(b);
    }
    else if (x=="otomotiv")
    {
        a.setAttribute("class", "bg-oto");
        b.setAttribute("src", "assets/img/logo/light/otomotiv.png");
        anime(a);
        anime(b);
    }
    else if (x=="holding")
    {
        a.setAttribute("class", "bg-holding");
        b.setAttribute("src", "assets/img/logo/light/holding.png");
        anime(a);
        anime(b);
    }
    else if (x=="gaz")
    {
        a.setAttribute("class", "bg-gaz");
        b.setAttribute("src", "assets/img/logo/light/cg.png");
        anime(a);
        anime(b);
    }
    else if(x=="cargo")
    {
        c.style.backgroundImage = "url(docs/pdf/examples/"+y+"/cargo.png)";
        anime(b);
    }
    else if (x=="services")
    {
        c.style.backgroundImage = "url(docs/pdf/examples/"+y+"/services.png)";
        anime(b);
    }
    else if (x=="delivery")
    {
        c.style.backgroundImage = "url(docs/pdf/examples/"+y+"/delivery.png)";
        anime(b);
    }
    else if (x=="scrap")
    {
        c.style.backgroundImage = "url(docs/pdf/examples/"+y+"/scrap.png)";
        anime(b);
    }
    else
    {
        a.setAttribute("class", "bg-holding");
        b.setAttribute("src", "assets/img/logo/light/holding.png");
        anime(a);
        anime(b);
    }
}

function anime(x)
{
    x.animate([ { opacity: 0 }, { opacity: 1 } ], { duration: 1300 });
}