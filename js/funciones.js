function saludar() {
    var saludoId = document.getElementById("saludo");
    console.log("hello world");
    saludoId.innerHTML = "hello world";
}

function hola() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var edad = document.getElementById("edad").value;
    console.log(nombre+' '+apellido+' '+edad);

    var rubrik = document.getElementById('title');
    rubrik.innerHTML = nombre+' '+apellido+' '+edad;
}

function changeColor() {
    mensage = document.getElementById("msn");
    
    var rubrik = document.getElementById('title');
    mensage.innerHTML = '<button type="" class="button" value="" onclick="changeColorBack();">click here</button></br> <h3>the console is cyan</h3>';
    mensage.style.backgroundColor= 'blue';
    console.log('\x1b[36m%s\x1b[0m', 'I am cyan');
}
function changeColorBack() {
    mensage = document.getElementById("msn");
    
    var rubrik = document.getElementById('title');
    mensage.innerHTML = '<button type="" class="button" value="" onclick="changeColor();">click here</button></br> <h3>the console is white</h3>';
    mensage.style.backgroundColor= 'white';
    console.log('\x1b[0m', 'I am White');
}

function bigNumber() {
    var num1 = document.getElementById('n1').value;
    var num2 = document.getElementById('n2').value;
    var resp = document.getElementById('title');

    if (num1>num2) {
        resp.innerHTML = 'The bigges number is '+num1;
        console.log('The bigges number is '+num1);
    } else {
        resp.innerHTML = 'The bigges number is '+num2;
        console.log('The bigges number is '+num1);
    }
}


var count_click = 0;
function randomNumber() {
    var rand = Math.floor(Math.random() * 101);
    console.log(rand);

    var num1 = document.getElementById('num').value;
    var res = document.getElementById("title");

    count_click += 1;

    if (num1 == rand) {
        res.innerHTML = 'BINGO!!!<br> the random number was '+rand+'<br> you try '+count_click+' time';           
    } else {
        if (num1 > rand){
            res.innerHTML = 'Sorry your number was too hight<br> try again.';
        } else {
            res.innerHTML = 'Sorry your number was too low<br> try again.';
        }
    }
    
}

$("#save_btn").click(function(){

    var comment = $.trim($("#comment").val());
        // if(comment != ""){
        //     // Show alert dialog if value is not blank
        //     alert(comment);
        // }
    if(comment != ""){
        var blob = new Blob([comment],
        {type: "text/plain;charset=utf-8"}
        );

        saveAs(blob, "testfile1.txt");
    } else {
        alert("No text in the test area.");
    }
});


function leerArchivo(e) {
    var archivo = e.target.files[0];
    if (!archivo) {
        return;
    }
    var lector = new FileReader();
    lector.onload = function(e) {
        var contenido = e.target.result;
        mostrarContenido(contenido);
    };
    lector.readAsText(archivo);
}

function mostrarContenido(contenido) {
    var elemento = document.getElementById('contenido-archivo');
    elemento.innerHTML = contenido;
}

    document.getElementById('file-input')
    .addEventListener('change', leerArchivo, false);



function math() {

    var num1 = document.getElementById('num').value;
    var res1 = document.getElementById("raiz");
    var res2 = document.getElementById("potencia2");
    var res3 = document.getElementById("potencia10");

    var raiz = Math.sqrt(num1);
    var potencia2 = Math.pow(num1, 2);
    var potencia10 = Math.pow(num1, 10);

    res1.innerHTML = 'square root of '+num1+' = '+raiz;
    res2.innerHTML = num1+' raised to 2 = '+potencia2;
    res3.innerHTML = num1+' raised to 10 = '+potencia10;
    
}


function arreglo() {
    var res1 = document.getElementById("desorden");
    var res2 = document.getElementById("orden");

    let numeros = [1,3,8,4,10,6,7,9,2,5];
    // for(var i=0;i<11;i++){
    // 	console.log(numeros[i]);
    // }
    res1.innerHTML = 'my array is '+numeros;

    var ordenado = numeros.sort((a, b) => a - b);
    res2.innerHTML = 'ordered numerically '+ordenado;
}


function palindromo()
{
    var pal = document.getElementById('palabra').value.toLowerCase();
    var res = document.getElementById("title");
    var lap = pal.split("").reverse().join("");
   
    if (pal == lap) {
        res.innerHTML = pal+' are a palindrome';
    } else {
        res.innerHTML = pal+' are NOT a palindrome';
    }
    // res.innerHTML = lap;
}



function numDentro() {
    
    var num1 = document.getElementById("n1").value;
    var num2 = document.getElementById("n2").value;
    var res = document.getElementById("title");

    let i = num1; // we have i already declared and assigned

    for (; i < num2; i++) { // no need for "begin"
        alert( i ); // 0, 1, 2
        console.log( i );
        // res.innerHTML = i;
    }

    // res.innerHTML = i;
}



function numPar()
{
    let numeros = document.getElementById('numeros').value;
    let num1 = numeros;

    let pares = [];
    let impares =[];

    if (num1 == null || num1 == '') {

    alert('You have to write an number');
    }

    for (let i = 0; i < num1; i++) {
        if (i % 2 === 0) {
            pares.push(i);
        }
        if (i % 2 ) {
            impares.push(i);
        }
    }
    document.getElementById('par').innerHTML = 'even numbers '+pares;
    document.getElementById('impar').innerHTML = 'odd number '+impares;
}

function juntar()
{
    var num1 = document.getElementById('numeros').value;
    var res = document.getElementById("title");

    // var num1 = "$ 178.000,89";
    var montoFormat = num1.replace(/["$,]/g,'+');
    // var montoFormat = num1.replace(",","+")
    
    suma = montoFormat;
    console.log(suma);
   
    res.innerHTML = suma;


    // var num1 = document.getElementById('numeros').value;
    // // var num1 = prompt("Cantidad de numeros: ");
    // var sumando;
    // var total = 0;
    // for (var i = 0; i < num1; i++) {
    //     sumando = prompt("Numeros: ");
    //     total = parseInt(total) + parseInt(sumando)
    // }

    // alert("Suma total: " + parseInt(total));
}

function competition() {
    var num1 = document.getElementById("n1").value;
    var num2 = document.getElementById("n2").value;
    var char = document.getElementById("character");
    var opp = document.getElementById("opponent");
    var heal1 = document.getElementById("health1");
    var heal2 = document.getElementById("health2");
    var fuer1 = document.getElementById("strength1");
    var fuer2 = document.getElementById("strength2");
    var suer1 = document.getElementById("lucky1");
    var suer2 = document.getElementById("lucky2");

    const salud1 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];
    const salud2 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];

    const fuerza1 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];
    const fuerza2 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];

    const suerte1 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];
    const suerte2 = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];

    const random = Math.floor(Math.random() * salud1.length);
    console.log(random, salud1[random]);

    const random2 = Math.floor(Math.random() * salud2.length);
    console.log(random2, salud2[random2]);

    const random3 = Math.floor(Math.random() * fuerza1.length);
    console.log(random3, fuerza1[random3]);

    const random4 = Math.floor(Math.random() * fuerza2.length);
    console.log(random4, fuerza2[random4]);

    const random5 = Math.floor(Math.random() * suerte1.length);
    console.log(random5, suerte1[random5]);

    const random6 = Math.floor(Math.random() * suerte2.length);
    console.log(random6, suerte2[random6]);

    char.innerHTML = num1;
    opp.innerHTML = num2;

    heal1.innerHTML = salud1[random];
    heal2.innerHTML = salud2[random2];

    fuer1.innerHTML = fuerza1[random3];
    fuer2.innerHTML = fuerza2[random4];

    suer1.innerHTML = suerte1[random5];
    suer2.innerHTML = suerte2[random6];
} 

function close_window() {
    if (confirm("Close Window?")) {
      close();
    }
  }