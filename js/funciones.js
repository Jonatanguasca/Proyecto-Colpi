
function cambiaImagen() {
    const num_hileras = document.getElementById('num_hileras').value
    const tipo = document.getElementById('tipo_pinion').value

    var canvas = document.getElementById("canvasPlano");
    var ctx = canvas.getContext("2d");
    //Borramos datos anteriores
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    //Se crea el objeto de imagen y se le asigna la ruta
    var img = new Image();     
    img.src = "images/canvas/"+tipo+num_hileras+".png";

    //Cuando carga la imagen dibujamos el plano
    canvas.width = 400;
    canvas.height = 400;

    W = 200;
    H = 400;

    var pos_ini = W - (W/2);

    
    img.onload = function(){
       // ctx.drawImage(img, 0, 0, canvas.width, canvas.height, 0, 0, canvas.width, canvas.height)
        ctx.drawImage(img,pos_ini,5, W,H);
    }

    

}

document.getElementById('formularioCalculadora').addEventListener('submit', function(e) {
    e.preventDefault();
    const valido = validateForm();

    if (!valido) {
        return;
    }

    // valores
    const cadena = document.getElementById('tipoCadena').value
    const numeroDientes = document.getElementById('num_dientes').value
    const numeroHileras = document.getElementById('num_hileras').value
    const tipoPinion = document.getElementById('tipo_pinion').value
    
    // tabla y loader
    const tablaDatos = document.getElementById('tabla_datos');
    const spinner = document.getElementsByClassName('loader__contener')[0];
    const downloadButton = document.getElementById('download_button')
    
    // encabezados del resultado
    const dPinionRef = document.getElementById('d_pinion_ref');
    const dAnchoDiente = document.getElementById('d_ancho_diente');
    spinner.style.display = "flex";

    // campos de la tabla
    const dDientes = document.getElementById('d_dientes');
    const dPaso = document.getElementById('d_paso');
    const dDiametroExterior = document.getElementById('d_diametro_exterior');
    const dDiametroPrimitivo = document.getElementById('d_diametro_primitivo');
    const dDiametroBase = document.getElementById('d_diametro_base');
    const dDiametroRodillo = document.getElementById('d_diametro_rodillo');
    
    // CALCULOS
    let pinonRef = `${cadena} ${numeroHileras}${tipoPinion} ${numeroDientes}`; 
    let paso = valores[cadena].paso * 25.4;
    let alpa = ( 180 / numeroDientes );
    let diametroExterior = paso * (0.6 + (1 / Math.tan(alpa * Math.PI / 180)));
    let diametroPrimitivo = paso / Math.sin(alpa * Math.PI / 180);
    let diametroRodillo = valores[cadena].rollerDia * 25.4;
    let diamteroBase = diametroPrimitivo - diametroRodillo;
    let anchoDiente = 0;
    
    switch (numeroHileras) {
        case 1:
            anchoDiente = valores[cadena].hileras.sencillo * 25.4;
            
            break;
        case 2|3:
            anchoDiente = valores[cadena].hileras.dobleYTriple * 25.4;
               
            break;
        default:
            anchoDiente = valores[cadena].hileras.cuadrupleYMayor * 25.4;
            break;
    }
  
    // asignación de los calculos
    dDientes.innerText = numeroDientes || '';
    dPaso.innerText = paso.toFixed(2) || '';
    dDiametroExterior.innerText = diametroExterior.toFixed(3) || '';
    dDiametroPrimitivo.innerText = diametroPrimitivo.toFixed(3) || '';
    dDiametroBase.innerText = diamteroBase.toFixed(3) || '';
    dDiametroRodillo.innerText = diametroRodillo.toFixed(3) || '';
    dPinionRef.innerText = pinonRef;
    dAnchoDiente.innerText = anchoDiente.toFixed(3);

    // visuallización de las tablas y encabezado
    spinner.style.display = "none";
    tablaDatos.style.display = 'flex';
    downloadButton.style.display = "block";

    cambiaImagen();
});

const valores = {
    25: {
        paso: 0.250,
        hileras: {
            sencillo: 0.110,
            dobleYTriple: 0.107,
            cuadrupleYMayor: 0.096,

        },
        rollerDia: 0.130,
    },
    35: {
        paso: 0.375,
        hileras: {
            sencillo: 0.168,
            dobleYTriple: 0.162,
            cuadrupleYMayor: 0.149,

        },
        rollerDia: 0.200,
    },
    41: {
        paso: 0.500,
        hileras: {
            sencillo: 0.227,
            dobleYTriple: 0,
            cuadrupleYMayor: 0,

        },
        rollerDia: 0.306,
    },
    40: {
        paso: 0.500,
        hileras: {
            sencillo: 0.284,
            dobleYTriple: 0.275,
            cuadrupleYMayor: 0.256,

        },
        rollerDia: 0.312,
    },
    50: {
        paso: 0.625,
        hileras: {
            sencillo: 0.343,
            dobleYTriple: 0.332,
            cuadrupleYMayor: 0.311,

        },
        rollerDia: 0.400,
    },
    60: {
        paso: 0.750,
        hileras: {
            sencillo: 0.459,
            dobleYTriple: 0.444,
            cuadrupleYMayor: 0.418,

        },
        rollerDia: 0.469,
    },
    80: {
        paso: 1.000,
        hileras: {
            sencillo: 0.575,
            dobleYTriple: 0.557,
            cuadrupleYMayor: 0.526,

        },
        rollerDia: 0.625,
    },
    100: {
        paso: 1.250,
        hileras: {
            sencillo: 0.692,
            dobleYTriple: 0.669,
            cuadrupleYMayor: 0.633,

        },
        rollerDia: 0.750,
    },
    120: {
        paso: 1.500,
        hileras: {
            sencillo: 0.924,
            dobleYTriple: 0.894,
            cuadrupleYMayor: 0.848,

        },
        rollerDia: 0.875,
    },
    140: {
        paso: 1.750,
        hileras: {
            sencillo: 0.924,
            dobleYTriple: 0.894,
            cuadrupleYMayor: 0.848,

        },
        rollerDia: 1.000,
    },
    160: {
        paso: 2.000,
        hileras: {
            sencillo: 1.156,
            dobleYTriple: 1.119,
            cuadrupleYMayor: 1.063,

        },
        rollerDia: 1.125,
    },
    180: {
        paso: 2.250,
        hileras: {
            sencillo: 1.301,
            dobleYTriple: 1.259,
            cuadrupleYMayor: 1.197,

        },
        rollerDia: 1.406,
    },
}

function validateForm() {
    console.log('llega');
    
    let valido = true;

    // Obtener valores
    const tipo = document.getElementById("tipo");
    const tipoCadena = document.getElementById("tipoCadena");
    const numHileras = document.getElementById("num_hileras");
    const numDientes = document.getElementById("num_dientes");
    const tipoPinion = document.getElementById("tipo_pinion");

    // Resetear estilos previos
    document.querySelectorAll(".has-error").forEach(campo => {
        campo.classList.remove("has-error");
    });

    // Validar "Tipo"
    if (tipo.value === "") {
        tipo.parentNode.classList.add("has-error");
        valido = false;
    }

    // Validar "Tipo de cadena"
    if (tipoCadena.value === "") {
        tipoCadena.parentNode.classList.add("has-error");
        valido = false;
    }

    // Validar "Número de hileras" (entre 1 y 5)
    if (numHileras.value < 1 || numHileras.value > 5) {
        numHileras.parentNode.classList.add("has-error");
        valido = false;
    }

    // Validar "Número de dientes" (entre 1 y 150)
    if (numDientes.value < 1 || numDientes.value > 150) {
        numDientes.parentNode.classList.add("has-error");
        valido = false;
    }

    // Validar "Tipo de piñon" (si es obligatorio)
    if (tipoPinion.value === "") {
        tipoPinion.parentNode.classList.add("has-error");
        valido = false;
    }

   return valido;
}


function descargarPDF() {
    const elemento = document.getElementById("tabla_datos");

    const opciones = {
        margin:       1,
        filename:     'plano.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },  // mejor calidad
        jsPDF:        { unit: 'mm', format: 'letter', orientation: 'landscape' },
        pagebreak:    { mode: ['avoid-all', 'css', 'legacy'] }
    
    };

    html2pdf().set(opciones).from(elemento).save();
}
