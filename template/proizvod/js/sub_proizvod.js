
function submit_proizvod(){

    var naziv = document.getElementById("naziv_p").value;

    var proizvodjac = document.getElementById("proizvodjac_p").value;

    var za_vozila = document.getElementById("za_vozila_p").value;
 
    var slika = document.getElementById("slika_p").files[0].name; 

    var cena = document.getElementById("cena_p").value;


    var proizvod_obj = {
        "naziv": naziv,
        "proizvodjac": proizvodjac,
        "slika": slika,
        "za_vozila": za_vozila,
        "cena": cena
    };

   

    xmlhttp = new XMLHttpRequest();
    proizvod_obj_json = JSON.stringify(proizvod_obj);

    
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            
            console.log(this.responseText);
            
        }
    };
    

    xmlhttp.open("POST","../../src/includes/ubaci_proizvod.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);
}








