
const pro = document.getElementById('data');


load_event();

function load_event(){

pro.addEventListener('click', ubaci);


document.addEventListener('DOMContentLoaded', getFromLocalStorage);

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
  cena: proizvod.querySelector('#cena_p').textContent
}

console.log(pro_info);

ubaci_u_korpu(pro_info);

}


function ubaci_u_korpu(proizvod){

var row = "";

//Build temlate
row += "<tr>";
row += "<td> <img src='" + proizvod.slika +"' width='120px'></td>";
row += "<td>"  + proizvod.naziv + "</td>";
row += "<td>" + proizvod.cena + "</td>";
row += "<td>" + "<input type='number' class='form-control'>"  +  "</td>";
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
localStorage.setItem('courses', JSON.stringify(arr));
}




function getCoursesFromStorage(){
  let courses;

//i something exit on the sotrage then we get the value, create empty array

if(localStorage.getItem('courses') === null){
  courses = [];
} else {
  courses = JSON.parse(localStorage.getItem('courses'));
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
    row += "<td>" + "<input type='number' class='form-control' min='0' max='100'>"  +  "</td>";
    row += "</tr>";
    
    
    document.getElementById('korpa').innerHTML += row;
    
  
});

}

