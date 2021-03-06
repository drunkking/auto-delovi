
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

            lo_kategorije(myObj.sifra_kategorije);

            document.getElementById("stanje_p").value = myObj.stanje;

            document.getElementById("cena_p").value = myObj.cena;
            
        }
        
    };


    xmlhttp.open("POST","../../src/includes/ucitaj_proizvod.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);
}


function lo_kategorije(sifra_kat) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

                if(myObj[i]['sifra_kategorije'] == sifra_kat){

                 row +="<option value=" + myObj[i]['sifra_kategorije'] +"  selected>" + myObj[i]['naziv']+ "</option>";
                
                } else {
                    row +="<option value=" + myObj[i]['sifra_kategorije'] +">" + myObj[i]['naziv']+ "</option>";
                }
            }

            document.getElementById("kategorija").innerHTML =  row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_kategorije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}