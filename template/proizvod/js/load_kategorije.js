function lo_kategorije() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++) {

                row +="<option value=" + myObj[i]['sifra_kategorije'] +">" + myObj[i]['naziv']+ "</option>";
            }

            document.getElementById("kategorija").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_kategorije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}