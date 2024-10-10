window.addEventListener('load', () =>{

    let valor1 = document.getElementById('valor1').value
    let valor2 = document.getElementById('valor2').value
    let valor3 = document.getElementById('valor3').value

    if(valor1 > 10){
        document.getElementById('valorCalculado').classList.add('blue');
        return;
    }

    if(valor2 < valor3){
        document.getElementById('valorCalculado').classList.add('green');
        return;
    }

    if(valor3 < (valor1 + valor2)){
        document.getElementById('valorCalculado').classList.add('red');
        return;
    }
})