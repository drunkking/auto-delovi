function del_uloga(sifra){

    var sifra_u = sifra;

    var uloga_obj = {
        "sifra": sifra_u
    };

    xmlhttp = new XMLHttpRequest();
    uloga_obj_json = JSON.stringify(uloga_obj);

    xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_uloge'] + "</td>";
                row += "<td>" + myObj[i]['naziv'] + "</td>";
                row += "<td>" + "<button type='button' class='btn btn-danger' onclick='del_uloga("+ myObj[i]['sifra_uloge'] +")' >Obriši</button>" + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_u").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/obrisi_ulogu.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("uloga="+uloga_obj_json);
}