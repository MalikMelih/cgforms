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

/*document.body.addEventListener("keydown", function (ev) {

	// function to check the detection
	ev = ev || window.event; // Event object 'ev'
	var key = ev.which || ev.keyCode; // Detecting keyCode
	
    // Detecting Alt Key
    var alt = ev.altKey ? ev.altKey : ((key === 18)
    ? true : false);

    if (key == 27) {
		//console.log("Esc");
        document.getElementById("ab").style.left = "-400px";
        document.getElementById("sb").style.left = "-400px";
	}
	if (key == 67 && alt) {
		//console.log("Alt+C");
        window.location="?pg=create&type=cargo";
	}
	else if (key == 83 && alt) {
		//console.log("Alt+S");
        window.location="?pg=create&type=services";
	}
    else if (key == 84 && alt) {
		//console.log("Alt+T");
        window.location="?pg=create&type=delivery";
	}
    else if (key == 72 && alt) {
		//console.log("Alt+H");
        window.location="?pg=create&type=scrap";
	}

}, false);*/

document.body.addEventListener("keydown", function (ev) {

	// function to check the detection
	ev = ev || window.event; // Event object Shourcut
	var key = ev.which || ev.keyCode; // Detecting keyCode

    // Detecting Alt Key
    var alt = ev.altKey ? ev.altKey : ((key === 18)
    ? true : false);

    if (key == 27) {    //Esc   //Close Tabs
        document.getElementById("ab").style.left = "-400px";
        document.getElementById("sb").style.left = "-400px";
	}
    else if (key == 83 && alt) { //Alt + S  //Search Tab
        if (document.getElementById("sb").style.left == "70px")
        {
            document.getElementById("sb").style.left = "-400px";
        }
        else
        {
            document.getElementById("sb").style.left = "70px";
        }
	}
	else if (key == 49 && alt) {    //Alt + 1   //Cargo
        window.location="?pg=create&type=cargo";
	}
	else if (key == 50 && alt) {    //Alt + 2   //Services
        window.location="?pg=create&type=services";
	}
    else if (key == 51 && alt) {    //Alt + 3   //Delivery
        window.location="?pg=create&type=delivery";
	}
    else if (key == 52 && alt) {    //Alt + 4   //Scrap
        window.location="?pg=create&type=scrap";
	}
    else if (key == 67 && alt) {    //Alt + C   //Configure
        window.location="?pg=configure";
	}
    else if (key == 65 && alt) {    //Alt + T   //Account
        window.location="?pg=account";
	}
    else if (key == 76 && alt) {    //Alt + L  //Forms List
        window.location="?pg=formslist";
    }

}, false);

//  
document.addEventListener("keydown", onKeyDown);
document.addEventListener("keyup", onKeyUp);

function onKeyDown(event){
    if(event.key === '"')
    {
        block();
    }
}

function onKeyUp(event){
    none();
}

function block()
{
    document.getElementById("hsearch").style.display = "block";
    document.getElementById("hcargo").style.display = "block";
    document.getElementById("hservices").style.display = "block";
    document.getElementById("hdelivery").style.display = "block";
    document.getElementById("hscrap").style.display = "block";
    document.getElementById("hconf").style.display = "block";
    document.getElementById("huser").style.display = "block";
    document.getElementById("htheme").style.display = "block";
    document.getElementById("hlist").style.display = "block";
}

function none()
{
    document.getElementById("hsearch").style.display = "none";
    document.getElementById("hcargo").style.display = "none";
    document.getElementById("hservices").style.display = "none";
    document.getElementById("hdelivery").style.display = "none";
    document.getElementById("hscrap").style.display = "none";
    document.getElementById("hconf").style.display = "none";
    document.getElementById("huser").style.display = "none";
    document.getElementById("htheme").style.display = "none";
    document.getElementById("hlist").style.display = "none";
}

//

function alert(msg){
    alert(msg);
};

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
};

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
};

function anime(x)
{
    x.animate([ { opacity: 0 }, { opacity: 1 } ], { duration: 1300 });
};