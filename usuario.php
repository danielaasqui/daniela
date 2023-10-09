<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>documentacion</title>

    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 
    <!-- Favicon -->
    <link href="img/logo_a.jpg" rel="icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

 
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

</head>

<?php
    include_once "model/conexion.php"; //llamada al archivo que conecta al servidor

    //logica para una consulta simple (sin parametros) de MYSQL en PHP
    $sentencia = $bd -> query("SELECT id, usuario, nombres, estado FROM usuarios;"); //query es consulta simple
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Inicio Encabezado -->    

    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">UEA</h1>            
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <img class="img-fluid mb-4" src="img/logo_a.jpg">
                <p class="text-white"><b>Unidad Educativa Ancón</b>
                <br>NUEVO LOOK
                <br>FASHION DE ANDREA</p>
            </div>
            <a href="Untitled-1.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">UEA</h1>
            </a>
            <div class="navbar-nav mr-auto py-0"> 
                <a href="#forma" class="nav-item nav-link">MERCADERIA</a>
                <a href="#tabla" class="nav-item nav-link">CLIENTES</a>
                <a href="#table" class="nav-item nav-link">MERCADERIA</a>
                <a href="#about" class="nav-item nav-link">PROVEDORES</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 pb-4">
        <div class="row"> <!-- la clase del DIV es ROW que es fila -->
            <div class="col-lg-1" >
            </div>
            <div class="col-lg-1" > <!-- col es Columna -->
            <img class="img-fluid mb-1" src="img/logo_g.jpg"> <!-- mb es el alto de la imagen -->
            </div> 
            <div class="col-lg-8" align="center"> <!--el numero de ancho de la columnas del ROW no puede ser mas de 12. -->
            <h1>TIENDA</h1> <!--titulo diseñado en CSS -->
            <h2>FASHION DE ANDREA</h2> <!--titulo diseñado en CSS -->
            <h3>Maquetación</h3> <!--titulo diseñado en CSS -->
            </div> 
            <div class="col-lg-1" > <!-- col es Columna -->
            <img class="img-fluid mb-1" src="img/logo_g.jpg"> <!-- mb es el alto de la imagen -->
            </div>  
        </div> 
    </div> 
    <!-- Fin Encabezado -->
    
    <div class="container-fluid bg-dark text-white" style="margin-top: 5px;">
        <div class="row pt-2">
            <div class="col-6 ">
                <h2 style="color:white">Formulario</h2>
                <p>Un formulario HTML es una caja de texto que puede contener casillas de verificación, botones y campos alfanuméricos. Suelen encontrarse en los sitios web para recolectar los datos personales de los usuarios interesados en la oferta del sitio. Estos datos posteriormente se envían a una base de datos para ser procesados.</p>            
                <br>
                <p>En HTML cada tabla está asociado a un elemento table, dentro de este elemento se indican las filas mediante el elemento tr y dentro de cada fila se indican las celdas mediante elementos td.
                En HTML 5 las etiquetas table y tr no tienen atributos, aunque hay atributos, como por ejemplo el atributo border, que reconocen los navegadores por estar presentes en versiones anteriores de HTML. Es, como siempre, el lenguaje CSS el que determina la apariencia y formato de la tabla.</p>
        
            </div>
            <div class="col-6 mb-4 px-4">
                <img class="img-fluid" src="img/code.jpg" alt="">
            </div>
        </div>    
    </div>
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-4">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Unidad Educativa Ancón</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">FASHION DE<br>ANDREA</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="Untitled-1,html">documentacion</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Programación y Base de Datos</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Empleados</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="usuario.php">Ir a</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
     
    <div class="container-fluid" id="forma">
    <div class="row"> <!--justifica la fila en el centro del ancho la pagina -->
        <div class="col-md-4" style="background-color:whitesmoke;"> <!--columna mide 3 -->
        
        <form class="p-4" method="POST" action="model/registral"> 
            <h2>Empleados</h2>               
            <!--es metodo POST y llama a model/registrar.php -->            
            <div class="mb-3">
                <label class="form-label">Usuario: </label> <!--todo input debe acompañarse con un label -->
                <input type="text" class="form-control" name="txtUsuario" required>
            </div>   
            <div class="mb-3">
                <label class="form-label">Nombres: </label>
                <input type="text" class="form-control" name="txtNombre" required>
            </div>
            <div class="mb-3">
                    <label class="form-label">Estado: </label><br>
                    <!--se puede seleccionar solo uno entre los TIPE RADIO   -->                                  
                    <input type="radio" name="rEstado" value="1" checked> Habilitado                            
                    <input type="radio" name="rEstado" value="0"> Inhabilitado                       
                    <br>
                </div>            
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1"> <!--valor de validacion oculto. -->
                <input type="submit" class="btn btn-primary" value="Registrar"> 
                <!--input para enviar a model/registrar.php -->
            </div>        
        </form>

        </div>    

        <div class="col-md-7"> <!--columna mide 8, 4+8=12. -->
            <img class="img-fluid" src="img/form.jpg" alt="">
        </div>
        
        <div class="col-lg-1 align-items-center">
                    <br>
                        <a class="btn btn-outline-primary btn-square mb-1" href="#">
                        <i class="fab fa-twitter"></i>
                        </a>
                    <br><br>
                        <a class="btn btn-outline-primary btn-square mb-1" href="#">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    <br><br>
                        <a class="btn btn-outline-primary btn-square mb-1" href="#">
                        <i class="fab fa-instagram"></i>
                        </a>                                       
        </div>
            
    </div>    
    </div>    
    
    <div class="container-fluid py-5" id="tabla">
    <div class="row"> <!--justifica la fila en el centro del ancho la pagina -->
        <div class="col-md-4" style="background-color:whitesmoke;"> <!--columna mide 3 -->
            <img class="img-fluid" src="img/edificio.jpg" alt="">
        </div> 

        <div class="col-md-8" style="background-color:lightcyan;"> <!--columna mide 8, 4+8=12. -->
            <!--letreros de alerta
            letrero de registrat -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){ //si viene (GET) entonces
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
           </div>
            <?php 
                }
            ?>   
            <!--letrero de error -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            </div>
            <?php 
                }
            ?> 
            <!--letrero de eliminado -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            </div>
            <?php 
                }
            ?> 

            <h2>Tabla</h2>
            <table class="table table-bordered"> 
            <thead>
                <th>Id</th>
                <th>Usuario</th>                               
                <th>Nombres</th>
                <th>Estado</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                <?php 
                    foreach($persona as $dato){ 
                    //de la variable $persona extrae una fila en dato
                ?>
                <tr><!-- se declara primero la fila-->
                    <td scope="row"><?php echo $dato->id; ?></td> <!-- luego declaramos la columna-->
                    <td><?php echo $dato->usuario; ?></td>
                    <td><?php echo $dato->nombres; ?></td>
                    <td><?php if ($dato->estado == 1){ ?>
                        <i class="bi-check-circle-fill"></i>
                        <?php }else{?>
                            <i class="bi-check-circle"></i>
                        <?php }; ?></td> 
                    <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" 
                        href="model/eliminar.php?id=<?php echo $dato->id; ?>">
                        <i class="bi bi-trash"></i></a></td>                                                               
                </tr>

                <?php 
                    }
                ?>
            </tbody>
            </table>
            <div class="row">
                <!-- texto -->
            </div>
        </div>    
    </div>    
    </div>
    <!-- Footer Start -->
       
    
    <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .05) !important;">
        <p class="m-0 text-white">Pagina Web diseñada por Tahily Bermello, 2023</p>
    </div>
    <!-- Footer End -->

</body>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</html>