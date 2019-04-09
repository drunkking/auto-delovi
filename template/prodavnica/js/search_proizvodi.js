function trazi_proizvod() {

    var sifra_kategorije = document.getElementById("s_kat").value;
    var data = document.getElementById("search").value;


    var data_obj = {
        "sifra_kategorije": sifra_kategorije,
        "data": data
    };

    xmlhttp = new XMLHttpRequest();
    data_obj_json = JSON.stringify(data_obj);

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "<div class='row my-4 text-center'>";

            if(myObj.length > 0){

                for(var i = 0; i < myObj.length; i++){

                    row += "<div class='col-lg-3 col-md-4 col-md-6  mb-4'>";
                    row += "<div class='card h-100 pro'>";
                    row += "<a href='#'><img class='card-img-top' height='200' width='200' src='template/proizvod/images/" + myObj[i]['slika'] + "' alt=''></a>";
                    row += "<div class='card-body'>";
                    row += "<h4 class='card-title'>";
                    row += "<a href='#' id='naziv_p'>"+ myObj[i]['naziv']+"</a>";
                    row += "</h4>";
                    row += "<label>Cena: <small>RSD</small></label>";
                    row += "<h5 id='cena_p'>" + myObj[i]['cena'] + "</h5>";
                    row += "<label>Za vozila:</label>";
                    row += " <p class='card-text'>" + myObj[i]['za_vozila'] +"</p>";
                    row += "</div>";
                    row += "<button class='dodaj_u_korpu btn btn-primary kat' data-id='" +  myObj[i]['sifra_proizvoda'] + "'>DODAJ U KORPU</button>";
                    row += "</div>";
                    row += "</div>";
                }
            } else {
                    row += "<div class='col-lg-12 text-center'>";
                    row += "<div class='alert alert-primary' role='alert' ><h3>Nema traženih proizvoda</h3></div>";
                    row += "</div>";

            }

            row+="</div>";
            document.getElementById("data").innerHTML = row;
           
        }
    };

    xmlhttp.open("POST","../auto_delovi/src/includes/vrati_trazene_proizvode.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("trazi="+data_obj_json);

}