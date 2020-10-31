<?php

    include("BaseDatos.php");

    if (isset($_POST["botonEnvio"])){
        
        //recibir los datos desde la vista (interfaz de usuario)
        $nombre = $_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero =$_POST["genero"];

        //crear una copia de la clase BaseDatos
        //crear un objete de la clase BaseDatos
        $transaccion=new BaseDatos();
        $transaccion->conectarBD();

        
    }


?>