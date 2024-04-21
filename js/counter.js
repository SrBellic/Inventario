let incrementar = document.getElementById('incrementar')
let decrementar = document.getElementById('decrementar')
let cantidad = document.getElementById('count')
let count=0

incrementar.addEventListener('click', ()=>{
    count++
    cantidad.innerHTML = count
})
decrementar.addEventListener('click', ()=>{
    if (count > 1) {
        count--;
        cantidad.innerHTML = count;
    }
})

