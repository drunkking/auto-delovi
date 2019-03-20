function table_kategorija(){


    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_kategorije'] + "</td>";
                row += "<td>" + myObj[i]['naziv'] + "</td>";
                row += "</tr>";
            }

            document.getElementById("tb_k").innerHTML = row;
        }
    };
    xmlhttp.open("POST", "../../src/includes/vrati_sve_kategorije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}