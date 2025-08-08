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
});