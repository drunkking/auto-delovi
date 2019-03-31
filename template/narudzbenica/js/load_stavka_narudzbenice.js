function lo_stavka(sif_narudzbenice){

    var sif = sif_narudzbenice;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row += "<tr>";
                row += "<td>" + myObj[i]['naziv_proizvoda'] +  "</td>";
                row += "<td><img class='img-fluid' src='../proizvod/images/" + myObj[i]['slika'] +"'></td>";
                row += "<td>" + myObj[i]['cena'] + "</td>";
                row += "<td>" + myObj[i]['kolicina'] +"</td>";
                row += "</tr>";
            }

            document.getElementById("stavka").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_stavke_narudzbenice.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("sifra="+sif);

}