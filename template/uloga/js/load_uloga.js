function table_uloga(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row +="<tr>";
                row +="<td>" + myObj[i]['sifra_uloge'] +"</td>";
                row +="<td>" + myObj[i]['naziv'] +"</td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='del_uloga("+ myObj[i]['sifra_uloge'] +")' ></button>" + "</td>";
                row +="</tr>";
            }

            document.getElementById("tb_u").innerHTML = row;
        }
    };
    xmlhttp.open("POST", "../../src/includes/vrati_sve_uloge.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}