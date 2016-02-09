//W3 schools
function loadDoc() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("timer").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "timer.php", true);
	xhttp.send();
}
//W3 schools

function mala_slova() {
	var xhttp = new XMLHttpRequest();
	var polje = document.getElementById('polje');
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("polje2").value = xhttp.responseText;
		}
	};
	xhttp.open("GET", "timer.php?unos=" + polje.value, true);
	xhttp.send();
}

function prikazi(broj, broj2) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("wrapper").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "postovi.php?prikazi=" + broj + "&strana=" + broj2, true);
	xhttp.send();
}

function tabela(grad) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById(grad).innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "tabela.php?grad=" + grad, true);
	xhttp.send();
}

function trazi(sadrzaj) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById('rezultat').innerHTML = xhttp.responseText;
		}
	};
	var po = document.getElementById('nesto').value;
	xhttp.open("GET", "pretraga.php?po=" + po + "&sadrzaj=" + sadrzaj, true);
	xhttp.send();
}
function obrisi(id, grad) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById(grad).innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "obrisired.php?id=" + id + "& grad=" + grad, true);
	xhttp.send();
}

function provera()
{
	document.getElementById('logovanje').submit();
//	var forma = document.logovanje;
//	var user = forma.user.value;
//	var password = forma.password.value;
//
//	var re_user = /^[A-z0-9]{4,}$/;
//
//	if (user == '' || password == '')
//	{
//		alert('Korisnicko ime i lozinka ne smeju biti prazni!');
//	} else if (!user.match(re_user))
//	{
//		alert('ime nije u dobrom formatu');
//	} else
//	{
//		forma.submit();
//	}
}