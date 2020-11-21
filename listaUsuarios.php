<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php 

        include("BaseDatos.php");

        //1. Crear un objeto de la clase BaseDatos
        $transaccion= new BaseDatos();

        //2. Crear la consulta SQL para buscar datos
        $consultaSQL="SELECT * FROM usuarios WHERE 1";

        //3. Utilizar el metodo para consultarDatos()
        $usuarios=$transaccion->consultarDatos($consultaSQL);

        print_r($usuarios);

    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($usuarios as $usuario):?>

                <div class="col mb-4">
                    
                    <div class="card h-100">
                        <img src="<?php echo($usuario["foto"])?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo($usuario["nombre"]) ?></h3>
                            <p class="card-text"><?php echo($usuario["descripcion"]) ?></p>
                            <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["idUsuario"])?>">    
                                Editar
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo($usuario["idUsuario"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICIÓN DE USUARIO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" method="POST">
                                        <div class="form-group">
                                            <label>nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($usuario["nombre"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descripcionEditar"> <?php echo($usuario["descripcion"])?>  </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                </div>

            <?php endforeach?>

        </div>
    
    
    </div>



    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>