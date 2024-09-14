const mediaGeral   = document.getElementById('media-geral');
const mediaMateria = document.getElementById('media-materia');
const tabela       = document.getElementById('table');

mediaGeral.addEventListener('click', function(){
    let linhas      = document.querySelectorAll("tr");
    let mediaAlunos = [];

    for(let i = 2; i <= linhas.length; i++){
        let celulas = linhas[i].querySelectorAll("td");
        let aluno   = [];

        celulas.forEach(celula => {
            aluno.push(celula.textContent);
        });

        let dadosAluno = criaEstruturaArrayAlunos(aluno);

        celulas[10].innerText = dadosAluno.media;
    }
});

/**
 * @param {Array} aAluno 
 * @returns {Array} - Realiza a estruturação dos dados do aluno
 */
function criaEstruturaArrayAlunos(aAluno){
    let notasAluno = [];

    for(i = 1; i <= aAluno.length; i++){
        notasAluno.push(aAluno[i]);
    }

    let aluno = {
        nome  : aAluno[0],
        notas : notasAluno,
        media : calculaMedia(notasAluno)
    }

    return aluno;
}

/**
 * @param {Array} aNotas 
 * @returns {float} - Calcula a média final do aluno
 */
function calculaMedia(aNotas){
    let somaNotas  = 0;
    let mediaFinal = 0;

    aNotas.forEach(nota => {
        if(nota != '' && nota != undefined){
            somaNotas = parseFloat(nota) + parseFloat(somaNotas);
        }
    });

    mediaFinal = somaNotas / (aNotas.length - 2);

    return parseFloat(mediaFinal.toFixed(2));
}