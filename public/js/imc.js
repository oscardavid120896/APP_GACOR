window.onload= iniciar;

function iniciar(){
    var btnCalcular=document.getElementById("btnCalcular");
    btnCalcular.addEventListener("click",calcularIMC);
}

function calcularIMC(){
    var peso=document.getElementById("peso").value;
    var altura=document.getElementById("altura").value;
    
    var imc=peso/(altura*altura);

    document.getElementById("datos").innerHTML="El IMC es:"+Math.round(imc);

}