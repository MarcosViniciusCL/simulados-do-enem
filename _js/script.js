function mostraOculta(ID, ID2) {
    if ((document.getElementById(ID).style.display == "none") && (document.getElementById(ID2).style.display == "none")) {
        esconde(ID);
        mostra(ID2);
    } else if (document.getElementById(ID).style.display == "none" && document.getElementById(ID2).style.display != "none") {
        esconde(ID);
        mostra(ID2);

    } else if (document.getElementById(ID).style.display != "none" && document.getElementById(ID2).style.display == "none") {
        mostra(ID);

    } else if (document.getElementById(ID).style.display != "none" && document.getElementById(ID2).style.display != "none") {
        esconde(ID);
        mostra(ID2);
    }


}

function mostra(TD) {
    document.getElementById(TD).style.display = "none";
    document.getElementById("botoes").style.display = "none";
}

function esconde(TD) {
    document.getElementById(TD).style.display = "block";
}