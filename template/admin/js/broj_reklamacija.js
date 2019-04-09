function br_reklam(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var br = myObj.length;


           
            document.getElementById("reklam").innerHTML = br;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_reklamacije.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}
