function lo_odobrena_narudzbenica(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_narudzbenice'] + "</td>";
                row += "<td>" + myObj[i]['datum_narucivanja'] + "</td>";
                row += "<td>" + "<button type='button' onclick='lo_stavka(" + myObj[i]['sifra_narudzbenice'] + ");' class='btn btn-warning fas fa-list-ul' data-toggle='modal' data-target='#StavkaModal'></button></td>";
                row += "<td>" + "<button type='button' onclick='lo_kupac(" + myObj[i]['sifra_korisnika'] + ")' class='btn btn-info fas fa-user-tag' data-toggle='modal' data-target='#KupacModal'>" +"</button>"+ "</td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='del_narudz_odob("+ myObj[i]['sifra_narudzbenice'] +")' ></button>" + "</td>";
                row += "</tr>";

            }

            document.getElementById("tb_n").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_odobrene_narudzbenice.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}