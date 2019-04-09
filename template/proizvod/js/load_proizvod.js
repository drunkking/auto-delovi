function table_proizvod() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

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
                row += "<td>" + myObj[i]['naziv_kategorije'] + "</td>";
                row += "<td>" + myObj[i]['stanje'] + "</td>";
                row += "<td>" + "<a href='proizvod.php?data="+ myObj[i]['sifra_proizvoda'] +"'><button type='button' class='btn btn-warning fas fa-edit'></button>" + "</a></td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='del_proizvod("+ myObj[i]['sifra_proizvoda'] +")' ></button>" + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_p").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_proizvode.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}