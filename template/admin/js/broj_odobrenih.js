function br_odobrenih(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
        
            var br = myObj.length;

  

            

            document.getElementById("odobrene").innerHTML = br;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_odobrene_narudzbenice.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}