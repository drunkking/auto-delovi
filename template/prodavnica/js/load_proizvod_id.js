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
            var row = "";
            
            if(myObj.length > 0){

            for(var i = 0; i < myObj.length; i++) {

              row += "<div class='col-lg-3  col-md-6 mb-4'>";
              row += "<div class='card h-100'>";
              row += "<a href='#'><img class='card-img-top' height='200' width='200' src='../../template/proizvod/images/" + myObj[i]['slika'] + "' alt=''></a>";
              row += "<div class='card-body'>";
              row += "<h4 class='card-title'>";
              row += "<a href='#' id='naziv_p'>"+ myObj[i]['naziv']+"</a>";
              row += "</h4>";
              row += "<label>Cena: <small>RSD</small></label>";
              row += "<h5 id='cena_p'>" + myObj[i]['cena'] + "</h5>";
              row += " <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>";
              row += "</div>";
              row += "<button class='dodaj_u_korpu btn btn-primary' data-id='" +  myObj[i]['sifra_proizvoda'] + "'>DODAJ U KORPU</button>";
              row += "</div>";
              row += "</div>";

               }

           } else {

            row += "<div class='col-lg-12 text-center'>";
             row += "<div class='alert alert-warning' role='alert'><h3>Nema proizvoda u ovoj kategoriji</h3></div>";
             row += "</div>";

           }

            document.getElementById("data").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_proizvode_id.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("proizvod="+proizvod_obj_json);

}