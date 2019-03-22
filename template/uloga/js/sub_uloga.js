function submit_uloga(){

    var naziv = document.getElementById("naziv_u").value;

    var uloga_obj = {
        "naziv": naziv
    };


    xmlhttp = new XMLHttpRequest();
    uloga_obj_json = JSON.stringify(uloga_obj);

    xmlhttp.onreadystatechange = function(){
        if(this.responseState == 4 && this.status == 200){

            console.log(this.responseText);
        }
    };

    xmlhttp.open("POST","../../src/includes/ubaci_ulogu.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("uloga="+uloga_obj_json);


}