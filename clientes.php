<?php
$persona = array(
    'datos' => array(
    'nombre' => 'Edwin Hernández',
    'correo' => 'fonsihernández8@gmail.com',
    'asunto' => 'Mas Información sobre TeContrato.com',
    'msg' => 'Se requiere mayor información sobre el funcionamiento de su página',
    'fono' => '5930996434838'
    )
);
include ('conexion.php'); 
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <title>Contrata un servicio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/imagenes/minilogo.PNG" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
        <div class="container">
            <a class="masthead-subheading text-uppercase" href="index.php">TECONTRATO.COM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="calificarusuario" href="">calificar
                            usuario</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="clientes.php">
                            Servicios</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="top.php">TOP 10</a>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="sugerencias.html">Sugerencias</a>
                    </li>




                </ul>

            </div>
    </nav>



    <div class="container-fluid bg-dark py-4 bt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="pt-5" src="assets/img/imagenes/logo.png">

                </div>
                <div class="col-sm-12">
                    <div class="container text-white">
                        <p class="lead">Encuentra al profesional ideal que te puede ayudar. Navega mediante nuestros
                            diversos filtros
                            para que encuentres exactamente a quien necesites.
                        </p>
                        <b>
                            <p>
                                Si deseas ver a nuestros usuarios TOP 10 da <a href="top.php">Click Aquí</a>
                            </p>
                        </b>

                    </div>
                </div>
            </div>


        </div>

    </div>





    <div class="container-fluid">
        <div id="contratar">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <nav class="" id="sidebar">
                        <div class="p-4 pt-5">
                            <h5 style="color: black;">Filtros de Búsqueda:</h5>
                            <ul class="list-unstyled components mb-5">
                                <li>
                                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="true"
                                        class="dropdown-toggle">Tipo de Servicio</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                                        <li><a href="" id="albanil"><span class="fa fa-chevron-right mr-2"></span>
                                                Albañilería</a></li>
                                        <li><a href="" id="carpinteria"><span class="fa fa-chevron-right mr-2"></span>
                                                Carpintería</a></li>
                                        <li><a href="" id='plomeria'><span class="fa fa-chevron-right mr-2"></span>
                                                Plomería</a></li>
                                        <li><a href="" id="transportacion"><span
                                                    class="fa fa-chevron-right mr-2"></span> Transportación</a></li>
                                        <li><a href="" id="cuidado"><span class="fa fa-chevron-right mr-2"></span>
                                                Cuidado de Niños</a></li>
                                        <li><a href="" id="soporte"><span class="fa fa-chevron-right mr-2"></span>
                                                Soporte Técnico</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false"
                                        class="dropdown-toggle">Años de Experiencia</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                                        <li><a href="" id='baja'><span class="fa fa-chevron-right mr-2"></span>1-3
                                                años</a></li>
                                        <li><a href="" id='media'><span class="fa fa-chevron-right mr-2"></span>4-8
                                                años</a></li>
                                        <li><a href="" id='alta'><span class="fa fa-chevron-right mr-2"></span>+8
                                                años</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false"
                                        class="dropdown-toggle">Lugar</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                                        <li><a href="" id='quito'><span
                                                    class="fa fa-chevron-right mr-2"></span>Quito</a></li>
                                        <li><a href="" id='guayaquil'><span
                                                    class="fa fa-chevron-right mr-2"></span>Guayaquil</a></li>
                                        <li><a href="" id='cuenca'><span
                                                    class="fa fa-chevron-right mr-2"></span>Cuenca</a></li>
                                        <li><a href="" id='ambato'><span
                                                    class="fa fa-chevron-right mr-2"></span>Ambato</a></li>
                                    </ul>
                                </li>
                            </ul>


                        </div>
                    </nav>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h1 class="display-4 text-center"><b>Contrata un servicio</b></h1>
                    <div class="card-deck p-4 pt-5 " style="color: white;">
                        <div class="row">
                            <?php
                            $query = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA'";
                            
                            $llenarPaneles = mysqli_query($conexion,$query);
                            $result = mysqli_num_rows($llenarPaneles);
                            if($result >0){
                                
                                while($data = mysqli_fetch_array($llenarPaneles)){
                                    ?>
                            <div class="col-md-6 col-lg-4 col-12 mb-5">
                                <div class="card align-items-center pt-4 bg-dark">
                                    <img class="rounded-circle" <?php if ($data['FOTO']==null) {
                                        $link="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" ; } else {
                                        $link=$data['FOTO']; } ?>
                                    src="
                                    <?php echo $link ?>"
                                    alt="Generic placeholder image" width="140" height="140">

                                    <div class="card-body text-justify">
                                        <h5 class="card-title">
                                            <?php echo $data['NOMBRE'] ?>
                                        </h5>
                                        <p class="card-text">
                                            <b>Servicio: </b>
                                            <?php echo $data['NOMBRE_SERVICIO'] ?><br>
                                            <b>Ciudad: </b>
                                            <?php echo $data['nombre_lugar'] ?> <br>

                                            <?php 
                                            if($data['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data['DESCRIPCION'];
                                            }
                                            ?>
                                        </p>
                                        <div class="text-center">
                                            <a class="btn btn-primary " style="color: black;"
                                                href="perfil.php?id=<?php echo $data['ID_PERSONA'];?>">Ir a Perfil</a>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    Calificación:
                                                </div>
                                                <div class="col-md-6">
                                                    <b>
                                                        <p>
                                                            <?php
                                                $identificador = $data['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                        </p>
                                                    </b>

                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php        
                                }
                            }
                            ?>



                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div id="calificar">
            <div class="container">
                <h1 class="display-4 text-center"><b>Calificar usuarios</b></h1>
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA'";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>

                                    <div class="row">
                                        <div class="col-md-6 pt-3">
                                            Tu calificación:
                                        </div>
                                        <div class="col-md-6">
                                            <form method='POST'>
                                                <p class="clasificacion">
                                                    <input type="submit" value="Enviar" name="envio_nota">
                                                    <input type="number" name="calificacion" placeholder=1 min=1 max=5>
                                                    <input type="hidden" name="id_persona"
                                                        value="<?php echo $data2['ID_PERSONA'] ?>">

                                                </p>
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="nav-link"
                                                href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ver trabajos
                                                Realizados</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="alba">
            <div class="container">
                <h1 class="display-4 text-center"><b>Albañilería</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 1";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="carp">
            <div class="container">
                <h1 class="display-4 text-center"><b>Carpintería</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 2";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="plom">
            <div class="container">
                <h1 class="display-4 text-center"><b>Plomería</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 3";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="trans">
            <div class="container">
                <h1 class="display-4 text-center"><b>Transportación</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 4";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="cuid">
            <div class="container">
                <h1 class="display-4 text-center"><b>Cuidado de Niños</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 5";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="sop">
            <div class="container">
                <h1 class="display-4 text-center"><b>Soporte Técnico</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT ID_TIPO, s.NOMBRE_SERVICIO,s.ID_SERVICIOS,l.ID_LUGAR,l.nombre_lugar,NOMBRE,CORREO,EDAD,TELEFONO,CELULAR,AN_EXPERIENCIA,FOTO,FACEBOOK,INSTAGRAM,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND s.ID_SERVICIOS = 6";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="uio">
            <div class="container">
                <h1 class="display-4 text-center"><b>Usuarios en Quito:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND l.ID_LUGAR = 1";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="gye">
            <div class="container">
                <h1 class="display-4 text-center"><b>Usuarios en Guayaquil:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND l.ID_LUGAR = 2";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="cue">
            <div class="container">
                <h1 class="display-4 text-center"><b>Usuarios en Cuenca:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND l.ID_LUGAR = 3";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="amb">
            <div class="container">
                <h1 class="display-4 text-center"><b>Usuarios en Ambato:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND l.ID_LUGAR = 4";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="expb">
            <div class="container">
                <h1 class="display-4 text-center"><b>De 1 a 3 años de Experiencia:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND AN_EXPERIENCIA >=1 AND AN_EXPERIENCIA <=3 ";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>
                                        <b>Experiencia: </b>
                                        <?php echo $data2['AN_EXPERIENCIA'] ?> AÑOS <br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="expm">
            <div class="container">
                <h1 class="display-4 text-center"><b>De 4 a 8 años de Experiencia:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND AN_EXPERIENCIA >=4 AND AN_EXPERIENCIA <=8 ";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>
                                        <b>Experiencia: </b>
                                        <?php echo $data2['AN_EXPERIENCIA'] ?> AÑOS<br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>
        <div id="expa">
            <div class="container">
                <h1 class="display-4 text-center"><b>Más de 8 años de Experiencia:</b></h1>
                <a href="clientes.php" class="btn btn-sm bg-dark text-warning"><i class="fas fa-chevron-left"></i> Regresar</a>                          
              
                <div class="card-deck pb-5 " style="color: white;">
                    <div class="row">
                        <?php
                            $query2 = "SELECT s.NOMBRE_SERVICIO,l.ID_LUGAR,l.nombre_lugar,NOMBRE,AN_EXPERIENCIA,FOTO,ID_PERSONA,DESCRIPCION FROM usuario, servicios s,lugar l 
                             WHERE usuario.ID_SERVICIOS = s.ID_SERVICIOS AND usuario.ID_LUGAR = l.ID_LUGAR  AND ESTATUS = 1 
                             AND usuario.NOMBRE != 'ADMINISTRADOR DEL SISTEMA' AND AN_EXPERIENCIA >8 ";
                            $llenarPaneles2 = mysqli_query($conexion,$query2);
                            $result2 = mysqli_num_rows($llenarPaneles2);
                             if($result2 >0){
                                while($data2 = mysqli_fetch_array($llenarPaneles2)){
                                    ?>
                        <div class="col-md-6 col-lg-4 col-12 mb-5 mt-5">
                            <div class="card align-items-center pt-4  bg-dark ">
                                <img class="rounded-circle" <?php if ($data2['FOTO']==null) {
                                    $link2="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    ; } else { $link2=$data2['FOTO']; } ?>
                                src="
                                <?php echo $link2 ?>"
                                alt="Generic placeholder image" width="140" height="140">

                                <div class="card-body text-justify">
                                    <h5 class="card-title">
                                        <?php echo $data2['NOMBRE'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <b>Servicio: </b>
                                        <?php echo $data2['NOMBRE_SERVICIO'] ?><br>
                                        <b>Ciudad: </b>
                                        <?php echo $data2['nombre_lugar'] ?> <br>
                                        <b>Experiencia: </b>
                                        <?php echo $data2['AN_EXPERIENCIA'] ?> AÑOS<br>

                                        <?php 
                                            if($data2['DESCRIPCION']==null){
                                                echo "El usuario no ha agregado su descripción personal";
                                            }else{
                                                echo $data2['DESCRIPCION'];
                                            }
                                            ?>
                                    </p>
                                    <div class="text-center">
                                        <a class="btn btn-primary " style="color: black;"
                                            href="perfil.php?id=<?php echo $data2['ID_PERSONA'];?>">Ir a Perfil</a>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                Calificación:
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                    <p>
                                                        <?php
                                                $identificador = $data2['ID_PERSONA'];
                                                $promedio = "SELECT ROUND(AVG(CALIFICACION),1) FROM calificacion WHERE ID_PERSONA = $identificador";
                                                $obtenerPromedio = mysqli_query($conexion,$promedio);
                                                $datos = mysqli_fetch_array($obtenerPromedio);
                                                if($datos[0]==null){
                                                    echo "Sin calificaciones";
                                                }else{
                                                    echo $datos[0];
                                                    echo (" / 5");
                                                }

                                                ?>
                                                    </p>
                                                </b>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                }

                             }
                                
                                
                            ?>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <?php
                           if(isset($_POST['envio_nota'])){
                            $nota = $_POST["calificacion"];
                            $ID = $_POST["id_persona"];
                            $ingresar_nota = "INSERT INTO calificacion VALUES ('$ID','$nota') ";
                            include 'conexion.php';
                            $ingresar = mysqli_query($conexion,$ingresar_nota);

                            if($ingresar == TRUE){                               
                                echo '<script> 
                                    alert("Calificacion guardada correctamente");
                                    window.location = "clientes.php";

                                </script>';
                            } 
                            else {
                                echo '<script> 


                                    alert("Error.");


                                </script>';
                            } 
                            
                        }
    ?>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-3 col-md-4 col-lg-4 text-lg-left">Copyright © TeContrato.com 2021</div>
                <div class="col-sm-6 col-md-4 col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="mailto:
                <?php echo $persona[" datos"]["correo"]; ?>
                        ?subject=
                        <?php echo $persona["datos"]["asunto"]; ?>
                        &body=
                        <?php echo $persona["datos"]["msg"]; ?>
                        "><i class="fas fa-envelope-open-text"></i>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=
                    <?php echo $persona[" datos"]["fono"]; ?>&text=
                        <?php echo $persona["datos"]["msg"]; ?>" target="_blank"><i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Políticas de Privacidad</a>
                    <a href="#!">Términos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
</body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="js/contenidos.js"></script>

</html>