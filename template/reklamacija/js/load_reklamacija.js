function table_reklam(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            
            for(var i = 0; i < myObj.length; i++){

                row +="<tr>";
                row +="<td>" + myObj[i]['sifra_reklamacije'] +"</td>";
                row +="<td>" + myObj[i]['email'] +"</td>";
                row +="<td><textarea disabled  rows='4' cols='40'>" + myObj[i]['poruka'] +"</textarea></td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='del_reklam("+ myObj[i]['sifra_reklamacije'] +")' ></button>" + "</td>";
                row +="</tr>";
            }

            document.getElementById("tb_rek").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_reklamacije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}