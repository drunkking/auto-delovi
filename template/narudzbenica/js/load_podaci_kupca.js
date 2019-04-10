

function lo_kupac(sifra_korisnika){

    var sif = sifra_korisnika;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";
    
                row += "<tr>";
                row += "<td>" + myObj['ime'] + " " + myObj['prezime'] + "</td>";
                row += "<td>" + myObj['korisnicko_ime'] + "</td>";
                row += "<td>" + myObj['email'] + "</td>";
                row += "</tr>";

            
            document.getElementById("kupac").innerHTML = row;
        }

       
    };


    xmlhttp.open("POST", "../../src/includes/vrati_podatke_kupca.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("sifra="+sif);

}