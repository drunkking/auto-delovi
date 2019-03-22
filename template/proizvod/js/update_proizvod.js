function up_proizvod(sifra){

    var sifra_p = sifra;

    var naziv = document.getElementById("naziv_p").value;

    var proizvodjac = document.getElementById("proizvodjac_p").value;

    var za_vozila = document.getElementById("za_vozila_p").value;
  
    var cena = document.getElementById("cena_p").value;

    var slika = document.getElementById("help_slika").innerText;

    if(document.getElementById("slika_p").value != ""){
        slika = document.getElementById("slika_p").files[0].name;
    }

    var sif_kategorije = document.getElementById("kategorija").value;

    

    var proizvod_obj = {
        "sifra": sifra_p,
        "naziv": naziv,
        "proizvodjac": proizvodjac,
        "slika": slika,
        "za_vozila": za_vozila,
        "cena": cena,
        "sifra_kategorije": sif_kategorije
    };


    

    xmlhttp = new XMLHttpRequest();
    proizvod_obj_json = JSON.stringify(proizvod_obj);

    
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            console.log(this.responseText);
        }
    };
    

    xmlhttp.open("POST","../../src/includes/izmeni_proizvod.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);
}

