
function lo_narudzbenica(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

                row += "<tr>";
                row += "<td>" + myObj[i]['sifra_narudzbenice'] + "</td>";
                row += "<td>" + myObj[i]['datum_narucivanja'] + "</td>";
                row += "<td>" + "<button type='button' onclick='lo_stavka(" + myObj[i]['sifra_narudzbenice'] + ")' class='btn btn-warning fas fa-list-ul' data-toggle='modal' data-target='#StavkaModal'>" +"</button>"+ "</td>";
                row += "<td>" + "<button type='button' class='btn btn-success far fa-arrow-alt-circle-up' onclick='odobri("+ myObj[i]['sifra_narudzbenice'] +");'></button>"+ "</td>";
                row += "<td>" + "<button type='button' class='btn btn-danger fas fa-trash-alt' onclick='' ></button>" + "</td>";
                row += "</tr>";

            }

            document.getElementById("tb_n").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_narudzbenice.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}




function odobri(sifra_narudzbenice){

    var sifra = sifra_narudzbenice;

    var narudzbenica_obj = {
        "sifra": sifra
    };

    var xmlhttp = new XMLHttpRequest();
    narudzbenica_obj_json = JSON.stringify(narudzbenica_obj);


    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            lo_narudzbenica();
        }
    };

    xmlhttp.open("POST","../../src/includes/odobri_narudzbenicu.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("sif_narudz="+narudzbenica_obj_json);

   

}