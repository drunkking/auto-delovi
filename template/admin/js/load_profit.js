function lo_profit(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
        
            var br = myObj['prof'];

  
            console.log(myObj);
            

            document.getElementById("profit").innerHTML = br;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_profit.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}