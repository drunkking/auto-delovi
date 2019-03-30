
const pro = document.getElementById('data');


load_event();

function load_event(){

pro.addEventListener('click', ubaci);



document.addEventListener('DOMContentLoaded', getFromLocalStorage);

}


function ocistiKorpu(){


  var row = " ";

  document.getElementById('korpa').innerHTML = row;


  localStorage.clear();
}




function ubaci(e){

e.preventDefault();

if(e.target.classList.contains('dodaj_u_korpu')){

  const pro = e.target.parentElement.parentElement;

  get_info(pro);

   }
}

function get_info(proizvod){

const pro_info = {
  slika: proizvod.querySelector('img').src,
  naziv: proizvod.querySelector('#naziv_p').textContent,
  cena: proizvod.querySelector('#cena_p').textContent,
  sifra: proizvod.querySelector('button').getAttribute('data-id'),
  kolicina: "1"
 
}


ubaci_u_korpu(pro_info);

}


function ubaci_u_korpu(proizvod){

var row = "";

//Build temlate
row += "<tr>";
row += "<td> <img src='" + proizvod.slika +"' width='120px'></td>";
row += "<td>"  + proizvod.naziv + "</td>";
row += "<td>" + proizvod.cena + "</td>";
row += "<td>" + "<select onchange='kolicina(this.value, "+ proizvod.sifra + ")'> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option>  <option value='5'>5</option></select>"  +  "</td>";
row += "</tr>";


document.getElementById('korpa').innerHTML += row;
//add course in the storage
cuvaj(proizvod);

}




function cuvaj(proizvod){


let arr = getCoursesFromStorage();

//add the course int the arrayt
arr.push(proizvod);

//since sotrage only saves string
localStorage.setItem('keskolica', JSON.stringify(arr));
}




function getCoursesFromStorage(){
  let courses;

//i something exit on the sotrage then we get the value, create empty array

if(localStorage.getItem('keskolica') === null){
  courses = [];
} else {
  courses = JSON.parse(localStorage.getItem('keskolica'));
}

return courses;
}

function getFromLocalStorage(){
let coursesLS = getCoursesFromStorage();

//LOOp throut the courses and prit the cart

coursesLS.forEach(function(proizvod){

    var row = "";

    //Build temlate
    row += "<tr>";
    row += "<td> <img src='" + proizvod.slika +"' width='120px'></td>";
    row += "<td>"  + proizvod.naziv + "</td>";
    row += "<td>" + proizvod.cena + "</td>";
    row += "<td>" + "<select onchange='kolicina(this.value,"+ proizvod.sifra + ")'> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option>  <option value='5'>5</option></select>"  +  "</td>";
    row += "</tr>";
    
    
    document.getElementById('korpa').innerHTML += row;
    
  
});

}

function kolicina(kol, sifra){

  let kolica;

  
  if(localStorage.getItem('keskolica') === null){
    kolica = [];
  } else {
    kolica = JSON.parse(localStorage.getItem('keskolica'));
  }

  for(var i = 0; i < kolica.length; i++){

    if(kolica[i].sifra == sifra){
      
      kolica[i].kolicina = kol;
    }
  }

    localStorage.setItem('keskolica', JSON.stringify(kolica));

 }




    

    