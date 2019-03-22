function up_korisnik(sifra){

    var sifra_k = sifra;

    var ime = document.getElementById("ime_k").value;

    var prezime = document.getElementById("prezime_k").value;

    var datum_rodjenja = document.getElementById("datum_rodj_k").value;

    var korisnicko_ime = document.getElementById("korisnicko_k").value;

    var email = document.getElementById("adresa_k").value;

    var sifra = document.getElementById("sifra_k").value;

    var pol = document.getElementById("pol_k").value;

    var slika = document.getElementById("help_slika").innerText;

    if(document.getElementById("slika_k").value != "") {
        slika = document.getElementById("slika_k").files[0].name;
    }

  
    var korisnik_obj = {
        "sifra_k": sifra_k,
        "ime": ime,
        "prezime": prezime,
        "slika": slika,
        "datum_rodjenja": datum_rodjenja,
        "korisnicko_ime": korisnicko_ime,
        "email": email,
        "sifra": sifra,
        "pol": pol
    };

    

    xmlhttp = new XMLHttpRequest();
    korisnik_obj_json = JSON.stringify(korisnik_obj);

    xmlhttp.onreadystatechante = function(){
        if(this.readyState == 4 && this.status == 200){
   

            
            console.log(this.responseTest);
        
        }
    };

    xmlhttp.open("POST","../../src/includes/izmeni_korisnika.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("korisnik="+korisnik_obj_json);
}


console.log(document.getElementById("help_slika").innerText);