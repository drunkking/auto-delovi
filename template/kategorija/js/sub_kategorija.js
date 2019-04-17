

function submit_kategorija(){

    var naziv = document.getElementById("naziv_k").value;

    if(naziv.length > 0){

        var kategorija_obj = {
            "naziv": naziv
        };

        xmlhttp = new XMLHttpRequest();
        kategorija_obj_json = JSON.stringify(kategorija_obj);

    
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                console.log(this.responseText);
        
            }
        };
        

        xmlhttp.open("POST","../../src/includes/ubaci_kategoriju.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("kategorija="+kategorija_obj_json);

    }
}