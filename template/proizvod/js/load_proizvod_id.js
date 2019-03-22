
function load_p(sifra){

    var sifra_p = sifra;

    var proizvod_obj = {
        "sifra": sifra_p
    };

    xmlhttp = new XMLHttpRequest();
    proizvod_obj_json = JSON.stringify(proizvod_obj);

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            
            
            var myObj = JSON.parse(this.responseText);


            document.getElementById("naziv_p").value = myObj.naziv;
            
            document.getElementById("proizvodjac_p").value = myObj.proizvodjac;

            document.getElementById("za_vozila_p").value = myObj.za_vozila;

            document.getElementById("tmp_slika").src = "images/" + myObj.slika;

            document.getElementById("help_slika").innerText = myObj.slika;

            document.getElementById("cena_p").value = myObj.cena;
            
        }
        
    };


    xmlhttp.open("POST","../../src/includes/ucitaj_proizvod.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);
}