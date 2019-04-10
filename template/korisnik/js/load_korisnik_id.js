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

            lo_uloge(myObj.sifra_uloge);
            
            
        }

    };

    xmlhttp.open("POST","../../src/includes/ucitaj_korisnika.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("korisnik="+korisnik_obj_json);
}




function lo_uloge(sifra_uloge){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                if(myObj[i]['sifra_uloge'] == sifra_uloge){

                    row +="<option value='" + myObj[i]['sifra_uloge'] + "'selected>" + myObj[i]['naziv'] + "</option>";
                } else {
                    row +="<option value='" + myObj[i]['sifra_uloge'] + "'>" + myObj[i]['naziv'] + "</option>";
                }
                
            }
            
            document.getElementById("uloga_k").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_uloge.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}