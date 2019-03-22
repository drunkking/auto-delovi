function del_kategorija(sifra){

    var sifra_k = sifra;

    var  kategorija_obj = {
        "sifra": sifra_k
    };

    xmlhttp = new XMLHttpRequest();
    kategorija_obj_json = JSON.stringify(kategorija_obj);


    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_kategorije'] + "</td>";
                row += "<td>" + myObj[i]['naziv'] + "</td>";
                row += "<td>" + "<button type='button' class='btn btn-danger' onclick='del_kategorija("+ myObj[i]['sifra_kategorije'] +")' >Obriši</button>" + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_k").innerHTML = row;
        }
    };


    xmlhttp.open("POST", "../../src/includes/obrisi_kategoriju.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("kategorija="+kategorija_obj_json);

}