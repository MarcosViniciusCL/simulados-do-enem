var data_hora;


var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;
function inicio() {	
	control = setInterval(cronometro, 1000);
}


function cronometro() {
    segundos++;
    document.getElementById("segundos").innerHTML = ":" + ("0" + segundos).slice(-2);
    document.getElementById("minutos").innerHTML = ":" + ("0" + minutos).slice(-2);
    document.getElementById("horas").innerHTML = ("0" + horas).slice(-2);

    
    
    if(segundos === 59){
        segundos = 0;
        minutos++;
    }
    if(minutos === 59){
        minutos = 0;
        horas++;
	}
    
} 

function ajustarInput(str) {
    var resul;
    resul += "";
    console.log(str)
    while (str.length <= 1) {
        resul.append("0");
    }
    resul+=str;
    return resul;
}

function getTempoTotal() {
    return horas+":"+minutos+":"+segundos;
}

function setTempo(time){
    data_hora = new Date(time);
    data_atual = new Date();
    resto = data_atual.getTime() - data_hora.getTime();
    tempo_exibir = new Date().getTime() + resto;
    setTempoMs(resto, null);
}

function setTempoMs(ms) {
    segundos = ms / 1000;
    // 2- Extract hours:
    horas = parseInt( segundos / 3600 ); // 3,600 seconds in 1 hour
    segundos = segundos % 3600; // seconds remaining after extracting hours
    // 3- Extract minutes:
    minutos = parseInt( segundos / 60 ); // 60 seconds in 1 minute
    // 4- Keep only seconds not extracted to minutes:
    segundos = parseInt(segundos % 60);
}

function obterHoraNTP() {
    var dt;
    $.ajax({
        url: "http://enderecoDoSeuServico/",
        success: function (horario) {
            dt = new Date(horario);
            return dt;
        }
    });
    return null;
}