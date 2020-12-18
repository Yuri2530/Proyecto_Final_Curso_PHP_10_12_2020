<?php
interface Clases{
    const token_class = array(
        "Service_usuario" => "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        "Service_menu" => "90491e9849509d78f448471a8bb2a96d5e935a0f",
        "Service_footer" => "624eaad320dda865fe4be2d739580bcfda39f430",
        "Service_imagenes" => "c54a62a8207fd545db45c6558589b3c5307c5691",
        "Service_session" => "f26dc23b038f9537200af51aa747872b4e4490a9"
    
    );
}
interface Metodos{
    const token_methodo = array(
        "16075688805fd18df09ff8a" => array(
            "id" => "Saludar",
            "Datos" => array(
                "Mensaje" => "Como Estas Sistemas"
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        ),
        "16078059225fd52be2cdf14" => array(
            "id" => "Menu",
            "Datos" => array(
                "Menu_1" => array(
                    "Archivo" => "index.html",
                    "Nombre" => "INICIO",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html",
                    "movil" => array(
                    "Archivo" => "index.html",
                    "Nombre" => "INICIO",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html"
                    
                    )
                ),
                "Menu_2" => array(
                    "Archivo" => "curso.html",
                    "Nombre" => "CURSO",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/Vistas/curso.html",
                    "movil" => array(
                    "Archivo" => "curso.html",
                    "Nombre" => "CURSO",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html"
                    
                    )
                ),
                "Menu_3" => array(
                    "Archivo" => "hobbies.html",
                    "Nombre" => "HOBBIES",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/Vistas/hobbies.html",
                    "movil" => array(
                    "Archivo" => "hobbies.html",
                    "Nombre" => "PASATIEMPOS",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html"
                    
                    )
                ),
                "Menu_4" => array(
                    "Archivo" => "perfil.html",
                    "Nombre" => "PERFIL",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/Vistas/perfil.html",
                    "movil" => array(
                    "Archivo" => "perfil.html",
                    "Nombre" => "INF. PERSONAL",
                    "URL" => "http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/index.html"
                    
                    )
                ),
                "Logo" =>array(
                    "Nombre" => '<span class="font-weight-bold">Yuri</span> Sanguino',
                    "movil" => array(
                        "Nombre" => "Opc. Navegación",
                       
                        
                        )
                ),
            ),
            "Plantilla" => array()
    
        ),
        "16081436425fda531ad8d24" => array(
            "id" => "Informacion",
            "Datos" => array(
                "Experiencia" => '<h2 class="mb-3">Desarrolladora de Software desde hace 5 años bajo plataforma Filemaker (algo que nadie conoce jejejejeje)</h2>',
                "Como_Me_Entere_Curso" => '<p class="lead text-white-50 mb-8">Por medio de la empresa donde trabajo.</p>'
            ),
            "Plantilla" => array()
        ),
        "16081640555fdaa2d728391" => array(
            "id" => "Imagenes_index",
            "Datos" => array(
                "Imagen_1" => array(
                    "URL" => ' <div class="carousel-item active">
                                    <h1 class="img-1 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">LEER</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img1.jpg">
                                </div>'
                ), 
                "Imagen_2" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-2 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">COCINAR</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img2.jpg">
                                </div>'
                ),
                "Imagen_3" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-3 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">MÚSICA</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img4.jpg">
                                </div>'
                )

            ),
            "Plantilla" => array( )
        ),
        "16082488535fdbee15dc136" => array(
            "id" => "Imagenes_curso",
            "Datos" => array(
                "Imagen_1" => array(
                    "URL" => ' <div class="carousel-item active">
                                    <h1 class="img-1 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">ECONOMIA SOLIDARIA</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img5.jpg">
                                </div>'
                ), 
                "Imagen_2" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-2 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">FILEMAKER</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img6.jpg">
                                </div>'
                ),
                "Imagen_3" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-3 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">INGLÉS</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img7.jpg">
                                </div>'
                )

            ),
            "Plantilla" => array( )
        ),
        "16082548745fdc059aa44ec" => array(
            "id" => "Imagenes_perfil",
            "Datos" => array(
                "Imagen_1" => array(
                    "URL" => ' <div class="carousel-item active">
                                    <h1 class="img-1 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">COMPARTIR</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img8.jpg">
                                </div>'
                ), 
                "Imagen_2" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-2 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">COMPRAS</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img9.jpg">
                                </div>'
                ),
                "Imagen_3" => array(
                    "URL" => ' <div class="carousel-item ">
                                    <h1 class="img-3 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">VIAJAR</h1>
                                <img class="d-block w-100" src="http://localhost/Proyecto_Final_Curso_PHP_10_12_2020/img/img10.png">
                                </div>'
                )

            ),
            "Plantilla" => array( )
        ),
        "16082490785fdbeef6a7541" => array(
            "id" => "session_index",
            "Datos" => array(
                "Titulo" => '<h1 class="mb-3">Estos son mis pasatiempos</h1>',
                "Parrafo" => '<p class="lead mb-3">Me gusta leer, cocinar y compartir con mi familia.</p>'
            ),
            "Plantilla" => array(
                "Boton"
            ) 
        ),
        "16082490785fdbeef6a7041" => array(
            "id" => "session_curso",
            "Datos" => array(
                "Titulo" => '<h1 class="mb-3">Estos son mis cursos</h1>',
                "Parrafo" => '<p class="lead mb-3">Cada curso pertenece a Economia Solidaria, FILEMAKER e Inglés. </p>'
            ),
            "Plantilla" => array(
                "Boton"
            ) 
        ),
        "16082548745fdc059aa4654" => array(
            "id" => "session_perfil",
            "Datos" => array(
                "Titulo" => '<h1 class="mb-3">Con este perfil me identifico</h1>',
                "Parrafo" => '<p class="lead mb-3">Me gusta compartir con amigos, me gusta salir de comprar y me encanta viajar. </p>'
            ),
            "Plantilla" => array(
                "Boton"
            ) 
        ),
        
        
    );
} 
interface Mensajes{
    const Clases_Methodo = array(
        "Clase_Negativa" => "No existe la Clase",
        "Methodo_Negativa" => "El metodo no existe"
    );
}
?>