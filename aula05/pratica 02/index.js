const mediaGeral   = document.getElementById('media-geral');
const mediaMateria = document.getElementById('media-materia');
const tabela       = document.getElementById('table');
let mediaAlunos    = [];

mediaGeral.addEventListener('click', function(){
    let linhas       = document.querySelectorAll("tr");

    for(let i = 2; i <= linhas.length; i++){
        let celulas = linhas[i].querySelectorAll("td");
        let aluno   = [];

        celulas.forEach(celula => {
            aluno.push(celula.textContent);
        });

        mediaAlunos.push(criaEstruturaArrayAlunos(aluno));
        
    }


});

function criaEstruturaArrayAlunos(aAluno){
    let notasAluno = [];

    for(i = 1; i <= aAluno.length; i++){
        notasAluno.push(aAluno[i]);
    }

    let aluno = {
        nome: aAluno[0],
        notas: notasAluno
    }

    return aluno;
}

function calculaMedia(aNotas){
    let somaNotas  = 0;
    let mediaFinal = 0;

    aNotas.forEach(nota => {
        somaNotas = parseFloat(nota) + parseFloat(somaNotas);
    });

    mediaFinal = somaNotas / (aNotas.length - 1);

    return mediaFinal;
}