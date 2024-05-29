let incrementar = document.getElementById('incrementar'); //Boton de incrementar
let decrementar = document.getElementById('decrementar'); //Boton de decrementar
let cantidad = document.getElementById('count'); //contador visible
let countInput = document.getElementById('count_hidden'); //contador del input escondido
let count = 0;

incrementar.addEventListener('click', () => {
    count++; //contador creciente
    cantidad.innerHTML = count;
    countInput.value = count; 
});

decrementar.addEventListener('click', () => {
    if (count > 1) {
        count--; //contador decreciente
        cantidad.innerHTML = count;
        countInput.value = count; 
    }
});
