function cambiaImagen() {

    var num_hileras = $("#num_hileras").val();
    var tipo = $("#tipo").val();

    var canvas = document.getElementById("canvasPlano");
    var ctx = canvas.getContext("2d");
    //Borramos datos anteriores
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    //Se crea el objeto de imagen y se le asigna la ruta
    var img = new Image();     
    img.src = "images/canvas/"+tipo+num_hileras+".png";
    //Cuando carga la imagen dibujamos el plano
    var s = getComputedStyle(canvas);
    var w = s.width;
    var h = s.height;

    W = (canvas.width = w.split("px")[0])/2;
    H = canvas.height = h.split("px")[0];

    var pos_ini = W - (W/2);
    console.log(W+"---"+H)


    img.onload = function(){
       // ctx.drawImage(img, 0, 0, canvas.width, canvas.height, 0, 0, canvas.width, canvas.height)
        ctx.drawImage(img,pos_ini,5, W,H);
    }

    

}

 document.getElementById('formularioCalculadora').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("ass")
    const cadena = document.getElementById('tipoCadena').value
    const numeroDientes = document.getElementById('num_dientes').value
    const numeroHileras = document.getElementById('num_hileras').value
    const tipoPinion = document.getElementById('tipo_pinion').value
    
    
    let pinonRef = `${cadena} ${numeroHileras}${tipoPinion} ${numeroDientes}`; 
    let paso = valores[cadena].paso * 25.4;
    let alpa = ( 180 / numeroDientes );
    let diametroExterior = paso * (0.6 + (1 / Math.tan(alpa * Math.PI / 180)));
    let diametroPrimitivo = paso / Math.sin(alpa * Math.PI / 180);
    let diametroRodillo = valores[cadena].rollerDia * 25.4;
    let diamteroBase = diametroPrimitivo - diametroRodillo;
    console.log('e: ', {
        pinonRef,
        diametroExterior,
        diametroPrimitivo,
        diamteroBase,
        diametroRodillo,
        paso,
        numeroDientes,
        cadena,
        alpa
    });

});

const valores = {
    25: {
        paso: 0.250,
        rollerDia: 0.130,
    },
    35: {
        paso: 0.375,
        rollerDia: 0.200,
    },
    41: {
        paso: 0.500,
        rollerDia: 0.306,
    },
    40: {
        paso: 0.500,
        rollerDia: 0.312,
    },
    50: {
        paso: 0.625,
        rollerDia: 0.400,
    },
    60: {
        paso: 0.750,
        rollerDia: 0.469,
    },
    80: {
        paso: 1.000,
        rollerDia: 0.625,
    },
    100: {
        paso: 1.250,
        rollerDia: 0.750,
    },
    120: {
        paso: 1.500,
        rollerDia: 0.875,
    },
    140: {
        paso: 1.750,
        rollerDia: 1.000,
    },
    160: {
        paso: 2.000,
        rollerDia: 1.125,
    },
    180: {
        paso: 2.250,
        rollerDia: 1.406,
    },
}