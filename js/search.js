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
