
function li_kategorija() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            
            var myObj = JSON.parse(this.responseText);
            var row = "";
            var naziv;

            for(var i = 0; i < myObj.length; i++) {

                naziv = myObj[i]['naziv'];
                row += "<a href='#' class='list-group-item kat'>" + naziv.toUpperCase(); + "</a>";
            }

            document.getElementById("kategorija").innerHTML = row;
        }


        
    };

    xmlhttp.open("POST", "../auto_delovi/src/includes/vrati_sve_kategorije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}

