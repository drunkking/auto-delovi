
function submit_korisnik(){

    var ime = document.getElementById("ime_k").value;

    var prezime = document.getElementById("prezime_k").value;

    var slika = document.getElementById("slika_k").files[0].name;

    var datum_rodjenja = document.getElementById("datum_rodj_k").value;

    var korisnicko_ime = document.getElementById("korisnicko_k").value;

    var email = document.getElementById("adresa_k").value;

    var sifra = document.getElementById("sifra_k").value;

    var pol = document.getElementById("pol_k").value;



    var korisnik_obj = {
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

    xmlhttp.open("POST","../../src/includes/ubaci_korisnika.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("korisnik="+korisnik_obj_json);
}