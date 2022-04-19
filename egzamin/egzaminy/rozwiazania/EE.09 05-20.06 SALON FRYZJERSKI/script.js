function odkryj() {
    var cena;
    if (document.getElementById("krotkie").checked) cena = 25;
    else if (document.getElementById("srednie").checked) cena = 30;
    else if (document.getElementById("dlugie").checked) cena = 40;
    else if (document.getElementById("poldlugie").checked) cena = 50;
    document.getElementById("wynik").innerHTML = "Cena strzyżenia: "+cena;
}