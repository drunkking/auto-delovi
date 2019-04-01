function lo_proizvod() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

              row += "<div class='col-lg-3 col-md-6 mb-4'>";
              row += "<div class='card h-100 pro'>";
              row += "<img class='card-img-top' height='200' width='200' src='template/proizvod/images/" + myObj[i]['slika'] + "' alt=''>";
              row += "<div class='card-body'>";
              row += "<h4 class='card-title'>";
              row += "<a href='#' id='naziv_p'>"+ myObj[i]['naziv']+"</a>";
              row += "</h4>";
              row += "<label>Cena: <small>RSD</small></label>";
              row += "<h5 id='cena_p'>" + myObj[i]['cena'] + "</h5>";
              row += " <p class='card-text'></p>";
              row += "</div>";
              row += "</div>";
              row += "</div>";

            }

            document.getElementById("data").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../auto_delovi/src/includes/vrati_sve_proizvode.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}


//