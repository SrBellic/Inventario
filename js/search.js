let search = document.querySelector('#search');
let table = document.querySelector('#tabla') ;
let filas = document.getElementsByTagName('tr');

search.addEventListener('input', () => {
    let buscar = search.value.toLowerCase(); 

    for (let i = 0; i < filas.length; i++) {
        const filatxt = filas[i].innerText.toLowerCase(); 

        if (filatxt.includes(buscar)) {
            filas[i].style.display = ''; 
        } else {
            filas[i].style.display = 'none'; 
        }
    }
});

let searchEdit = document.querySelector('#searchEdit');
let tableEdit = document.querySelector('#tablaEdit') ;
let filasEdit = document.getElementsByTagName('tr');

searchEdit.addEventListener('input', () => {
    let buscar = searchEdit.value.toLowerCase(); 

    for (let i = 0; i < filasEdit.length; i++) {
        const filatxt = filasEdit[i].innerText.toLowerCase(); 

        if (filatxt.includes(buscar)) {
            filasEdit[i].style.display = ''; 
        } else {
            filasEdit[i].style.display = 'none'; 
        }
    }
});

let searchDelete = document.querySelector('#searchDelete');
let tableDelete = document.querySelector('#tablaDelete') ;
let filasDelete = document.getElementsByTagName('tr');

searchDelete.addEventListener('input', () => {
    let buscar = searchDelete.value.toLowerCase(); 

    for (let i = 0; i < filasDelete.length; i++) {
        const filatxt = filasDelete[i].innerText.toLowerCase(); 

        if (filatxt.includes(buscar)) {
            filasDelete[i].style.display = ''; 
        } else {
            filasDelete[i].style.display = 'none'; 
        }
    }
});