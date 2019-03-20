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
                row += "<td>" + myObj[i]['slika'] + "</td>";
                row += "<td>" + myObj[i]['cena'] + "</td>";
                row += "<td>" + myObj[i]['sifra_kategorije'] + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_p").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}