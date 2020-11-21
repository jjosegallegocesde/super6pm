<?php 

    include("BaseDatos.php");

    //1.Capturar el id del usuario a editar
    $id=$_GET["id"];
    
    //2. recibo los datos a editar
    if (isset($_POST["botonEditar"])){

        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];

        //3. UTILIZAR O CERAR UN OBJETO DE LA CLASE BASEDATOS
        $transaccion=new BaseDatos();

        //4. Crear una consulta SQL para editar datos
        $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

        //5. Utilizar el metodo editarDdatos
        $transaccion->editarDatos($consultaSQL);

        //6.REDIRECCION
        header("location:listaUsuarios.php");


    }








?>