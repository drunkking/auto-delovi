
function naruci(){

    var kolica;

    
    if(localStorage.getItem('keskolica') === null){
      kolica = [];
    } else{

        
    kolica = JSON.stringify(localStorage.getItem('keskolica'));



    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          
        
          console.log(this.responseText);
          
           }
       };

       xmlhttp.open("POST","../../src/includes/naruci_proizvode.php", true);
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xmlhttp.send("proizvod="+kolica);

    }




}