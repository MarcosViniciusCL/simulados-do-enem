var respcorreta = "";
var areaconhecimento;

function submeterQuestao(){
    var enunciado = document.getElementById("comments").value;
    var ano = document.getElementById("anoQuestao").value;
    var respa = "A " + document.getElementById("respa").value;
    var respb = "B " + document.getElementById("respb").value;
    var respc = "C " + document.getElementById("respc").value;
    var respd = "D " + document.getElementById("respd").value;
    var respe = "E " + document.getElementById("respe").value;
    var correta = respcorreta;
    var area = areaconhecimento;

    console.log(enunciado);
    console.log(ano);
    console.log(respa);
    console.log(respb);
    console.log(respc);
    console.log(respd);
    console.log(respe);
    console.log(correta);
    console.log(area);
    enviarAjax(enunciado,ano,respa,respb,respc,respd,respe,correta,area);
}

function enviarAjax(enunciado, ano, respa, respb, respc, respd, respe, correta, area) {
    $.ajax({
        url: "../_controller/cadastrar-questao-nao-oficial.php",
        type: 'post',
        data: {Enunciado:enunciado,a:respa,b:respb,c:respc,d:respd,e:respe,resposta:correta,area:area,ano:ano},
        success: function (result) {

        }
    });
}

function marcarCorreta(letra) {
    respcorreta = letra;
    console.log("Resposta correta: " + letra);
}
function marcarAreaConhecimento(area) {
    areaconhecimento = area;
    console.log("Area marcada: " + areaconhecimento);
}