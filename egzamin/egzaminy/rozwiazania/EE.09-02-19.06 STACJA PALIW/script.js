function oblicz() {
    var rodzaj = parseInt(document.getElementById("rodzaj").value);
    var litry = parseInt(document.getElementById("litry").value);
    var koszt;
    if (rodzaj == 1) koszt = 4;
    else if (rodzaj == 2) koszt = 3.5;
    else koszt = 0;

    document.getElementById("wynik").innerHTML = ("<br>koszt paliwa: " + litry * koszt + "zł");
        
    
    
}
