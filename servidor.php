<?php
    function conexion(){
    $servidor="localhost";
    $usuario="root";
    $password="";
    $db="sistemasweb";
    
    return $conexion=mysqli_connect($servidor,$usuario,$password,$db);
    }

    $conexion=conexion();

    $sql = "SELECT * FROM t_tareas";
    $respuesta = mysqli_query($conexion,$sql,);
    $sql= "SELECT * FROM t_fechas";
    $resultado = mysqli_query($conexion,$sql,);

    $cadenaTabla="";
    $cadenaTabla= $cadenaTabla. '<div class="container ">
                                    <div class="row ">
                                        <div class="col ">
                                
                                <table border="1" style="border-collapse:collapse">
                                    <thead>
                                        <th>id</th>
                                        <th>fecha</th>
                                        <th>DESCRIPCION</th>
                                        <th>ESTADO</th>
                                    </thead>
                                    <tbody>';
    while($ver=mysqli_fetch_array($resultado)){
    while($mostrar=mysqli_fetch_array($respuesta)){
        $cadenaTabla=$cadenaTabla. '<tr>
                                        <td>'.$mostrar['id_tarea'] .'</td>'.
                                        
                                        '<td>'.$ver['fecha'].'</td>'.
                                            
                                        //<td>'.$ver['fecha'].'</td>
                                        '<td>'.$mostrar['tarea'] .'</td>
                                        <td>'.$mostrar['estado'] .'</td>
                                    </tr>';
    };};
    $cadenaTabla =$cadenaTabla. '</tbody></table> </div> </div> </div>';

    $navbar='<nav class="navbar navbar-light nava">
    <a class="navbar-brand mx-auto" href="#"><h2>Esto es una prueba de Concatenaciones y mi primer tag nabvar</h2></a>
    </nav>';

    $form =' <form>
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control rounded-pill" name="nombre" placeholder="ingresa tu nombre" required pattern="[A-Za-z]{4,15}"
                <label for="apellidoP">Apellido Paterno</label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoP" placeholder="Apellido Paterno" required pattern="[A-Za-z]{4,15}">
            </form>';

    $descripcion ='<div class="jumbotron">
    <h1 class="display-4">este es mi segundo tag</h1>
    <p class="lead">para porbar que sirve</p>
    <hr class="my-4">
    <p>aca seguimos en el jumbotron.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">solo se tenia que poner</a>
  </div>';

    $carrucel='<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>';

    echo $navbar. $carrucel. $descripcion . $cadenaTabla . $form ;
?>