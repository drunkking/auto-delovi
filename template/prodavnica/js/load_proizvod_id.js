function lo_proizvod(sifra) {

    var sifra_kategorije = sifra;

    var proizvod_obj = {
        "sifra": sifra_kategorije
    };

    proizvod_obj_json = JSON.stringify(proizvod_obj);


    var xmlhttp = new XMLHttpRequest();



    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            
            var myObj = JSON.parse(this.responseText);
            var row = "<div class='row my-4'>";
            
            if(myObj.length > 0){

            for(var i = 0; i < myObj.length; i++) {

              row += "<div class='col-lg-3 col-md-4 col-md-6  mb-4'>";
              row += "<div class='card h-100 pro'>";
              row += "<img class='card-img-top' height='200' width='200' src='../../template/proizvod/images/" + myObj[i]['slika'] + "' alt=''>";
              row += "<div class='card-body'>";
              row += "<h4 class='card-title'>";
              row += "<a id='naziv_p'>"+ myObj[i]['naziv']+"</a>";
              row += "</h4>";
              row += "<label>Cena: <small>RSD</small></label>";
              row += "<h5 id='cena_p'>" + myObj[i]['cena'] + "</h5>";
              row += "<h5>Za vozila:</h5>";
              row += " <p class='card-text'>" + myObj[i]['za_vozila'] +"</p>";
              row += "</div>";
              row += "<button class='dodaj_u_korpu btn  kat' data-id='" +  myObj[i]['sifra_proizvoda'] + "'>DODAJ U KORPU</button>";
              row += "</div>";
              row += "</div>";

               }

           } else {

             row += "<div class='col-lg-12 text-center mb-4'>";
             row += "<div class='alert alert-warning' role='alert'><h3>Nema proizvoda u ovoj kategoriji</h3></div>";
             row += "</div>";

           }
           row+="</div>";

            document.getElementById("data").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_proizvode_id.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);

}