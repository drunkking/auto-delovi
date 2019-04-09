function table_korisnik(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){



            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_korisnika'] + "</td>";
                row += "<td>" + myObj[i]['ime'] + "</td>";
                row += "<td>" + myObj[i]['prezime'] + "</td>";
                row += "<td><img class='img-fluid' height='100px' width='130px'  src='./images/" + myObj[i]['slika'] + "'/>"+ "</td>";
                row += "<td>" + myObj[i]['datum_rodjenja'] + "</td>";
                row += "<td>" + myObj[i]['korisnicko_ime'] + "</td>";
                row += "<td>" + myObj[i]['email'] + "</td>";
                row += "<td>" + myObj[i]['sifra'] + "</td>";
                row += "<td>" + myObj[i]['pol'] + "</td>";

                if(myObj[i]['naziv_uloge'] == 'Admin'){
                row += "<td><span class='badge badge-success'>" + myObj[i]['naziv_uloge'] + "</span></td>";
                } else {
                row += "<td><span class='badge badge-danger'>" + myObj[i]['naziv_uloge'] + "</span></td>";
                }
                row += "<td>" + "<a href='korisnik.php?data="+ myObj[i]['sifra_korisnika'] +"'><button type='button' class='btn btn-warning fas fa-edit'></button>" + "</a></td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='del_korisnik("+ myObj[i]['sifra_korisnika'] +")' ></button>" + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_k").innerHTML = row;
        }
    };

    xmlhttp.open("POST","../../src/includes/vrati_sve_korisnike.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}