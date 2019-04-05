function se_kat() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            
            var myObj = JSON.parse(this.responseText);
            var row = "";
            var naziv;

            row +="<option value='0'>Traži sve</option>";

            for(var i = 0; i < myObj.length; i++) {

               naziv = myObj[i]['naziv'];
               row += "<option value='"+ myObj[i]['sifra_kategorije'] +"'>" + naziv + "</option>";
              
            }

            document.getElementById("s_kat").innerHTML = row;
        
    };


    }
    
    xmlhttp.open("POST", "../auto_delovi/src/includes/vrati_sve_kategorije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}

