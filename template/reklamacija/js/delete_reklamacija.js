function del_reklam(sifra){

    var sifra_r = sifra;

    var reklamacija_obj = {
        "sifra": sifra_r
    };

    xmlhttp = new XMLHttpRequest();
    reklamacija_obj_json = JSON.stringify(reklamacija_obj);

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

    xmlhttp.open("POST", "../../src/includes/obrisi_reklamaciju.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("reklamacija="+reklamacija_obj_json);

}