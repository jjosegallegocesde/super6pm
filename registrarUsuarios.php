<?php

    include("BaseDatos.php");

    if (isset($_POST["botonEnvio"])){
        
        //1. recibir los datos desde la vista (interfaz de usuario)
        $nombre = $_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero =$_POST["genero"];
        $foto=$_POST["foto"];

        //2. crear una copia de la clase BaseDatos
        //crear un objete de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3. Crear una consulta SQL para agregar datos
        $consultaSQL="INSERT INTO usuarios(nombre,apellido,descripcion,genero,foto) VALUES ('$nombre','$apellido','$descripcion','$genero', '$foto')";

        //4. Utilizar la funcion para insertar datos de 
        // la clase BaseDatos
        $transaccion->agregarDatos($consultaSQL);


        //5. REDIRECCION
        header("location:formularioRegistro.php");


        

        
    }


?>