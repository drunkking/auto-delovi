function del_proizvod(sifra){

    var sifra_p = sifra;

    var proizvod_obj = {
        "sifra": sifra_p
    };

    xmlhttp = new XMLHttpRequest();
    proizvod_obj_json = JSON.stringify(proizvod_obj);


    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            
            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_proizvoda'] + "</td>";
                row += "<td>" + myObj[i]['naziv'] + "</td>";
                row += "<td>" + myObj[i]['proizvodjac'] + "</td>";
                row += "<td>" + myObj[i]['za_vozila'] + "</td>";
                row += "<td><img class='img-fluid' height='100px' width='130px'  src='./images/" + myObj[i]['slika'] + "'/>"+ "</td>";
                row += "<td>" + myObj[i]['cena'] + "</td>";
                row += "<td>" + myObj[i]['sifra_kategorije'] + "</td>";
                row += "<td>" + "<a href='proizvod.php?data="+ myObj[i]['sifra_proizvoda'] +"'><button type='button' class='btn btn-warning'>Izmeni</button>" + "</a></td>";
                row += "<td>" + "<button type='button' class='btn btn-danger' onclick='del_proizvod("+ myObj[i]['sifra_proizvoda'] +")' >Obriši</button>" + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_p").innerHTML = row;
        }
    };


    xmlhttp.open("POST","../../src/includes/obrisi_proizvod.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);

}