$(document).ready(function(){
//Crear el menú según los parametros el api PHP (Service_key.php)
    $.ajax({
    type: "POST",
    url: "../Api.php",
    headers : {
        "Token-Metodo" :"16078059225fd52be2cdf14",
        "Class" : "90491e9849509d78f448471a8bb2a96d5e935a0f",
    },
    data : {datos : null},
    success: function (response) {
        //console.log(response);
        let json = JSON.parse(response);
        //console.log(json);
        let keys = Object.keys(json["Datos"]);
        //console.log(keys);
        keys.forEach(id => {
            if (id!="Logo") {
                $(".navbar-nav").append('<li class="nav-item">\
                                         <a class="nav-link text-light" href="'+json["Datos"][id]["URL"]+'">'+json["Datos"][id]["Nombre"]+'</a>\
                                     </li>');

                $(".list-unstyled").append('<li class="mb-5">\
                                            <a href="'+json["Datos"][id]["movil"]["Nombre"]+'" class= "display-4 text-light">'+json["Datos"][id]["movil"]["Nombre"]+'</a>\
                                            </li>');
            }else{
                $(".navbar-brand").html(json["Datos"][id]["Nombre"]);
                $(".modal-title").html(json["Datos"][id]["movil"]["Nombre"]);
            }
            
        });
    
        
    }
    });
//Crear el footer según los parametros el api PHP (Service_key.php)
    $.ajax({
    type: "POST",
    url: "../Api.php",
    headers : {
        "Token-Metodo" :"16081436425fda531ad8d24",
        "Class" : "624eaad320dda865fe4be2d739580bcfda39f430",
    },
    data: {datos: null},
    success: function (response) {
        //console.log(response);
        let json = JSON.parse(response);
        for(id in json["Datos"]){
            $('.pie_pagina').append(json["Datos"][id]);
        }
        
    }
    });
     //Crear las imagenes de la pagina index.html según los parametros el api PHP (Service_key.php)
     $.ajax({
        type: "POST",
        url: "../Api.php",
        headers :{
            "Token-Metodo" :"16082548745fdc059aa44ec",
            "Class" : "c54a62a8207fd545db45c6558589b3c5307c5691",
        },
        data: {datos: null},
        success: function (response) {
            let json = JSON.parse(response);
            //console.log(json);
            for(id in json["Datos"]){
                $(".carousel-inner").append(json["Datos"][id]["URL"]);
            }
            
        }
    });
    //Crear las sessiones de la pagina index.html según los parametros el api PHP (Service_key.php)
    let URL = ['<a href="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html" class="btn btn-primary">Regresar</a>'];    
    $.ajax({
            type: "POST",
            url: "../Api.php",
            headers :{
                "Token-Metodo" :"16082548745fdc059aa4654",
                "Class" : "f26dc23b038f9537200af51aa747872b4e4490a9",
            },
            data: {URL},
            success: function (response) {
                console.log(response);
                let json = JSON.parse(response);
                //console.log(json);
                $('.hero-content').append(json["Datos"]["Titulo"]);
                $('.hero-content').append(json["Datos"]["Parrafo"]);
                $('.hero-content').append(json["Plantilla"]["Boton"]);
                
            }
        });
});