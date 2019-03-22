function load_k(sifra){

    var sifra_k = sifra;

    var korisnik_obj = {
        "sifra": sifra_k
    };

    xmlhttp = new XMLHttpRequest();
    korisnik_obj_json = JSON.stringify(korisnik_obj);

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
         
            var myObj = JSON.parse(this.responseText);

            document.getElementById("ime_k").value = myObj.ime;

            document.getElementById("prezime_k").value = myObj.prezime;

            document.getElementById("tmp_slika").src = "images/" + myObj.slika;

            document.getElementById("help_slika").innerText = myObj.slika;

            document.getElementById("datum_rodj_k").value = myObj.datum_rodjenja;

            document.getElementById("korisnicko_k").value = myObj.korisnicko_ime;

            document.getElementById("adresa_k").value = myObj.email;

            document.getElementById("sifra_k").value = myObj.sifra;

            document.getElementById("pol_k").value = myObj.pol;
            
            
        }

    };

    xmlhttp.open("POST","../../src/includes/ucitaj_korisnika.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("korisnik="+korisnik_obj_json);
}