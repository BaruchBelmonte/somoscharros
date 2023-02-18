<?php
 session_start(); // Inicia la sesión
    if(isset($_SESSION['user'])){ // Si la sesión está iniciada, redirige a registro.php
        header("Location: registro.php"); // Redirige a registro.php
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Si el método de envío es POST
        $nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING); // Convierte a minúsculas y elimina caracteres especiales
        $aPaterno = filter_var(strtolower($_POST['aPaterno']), FILTER_SANITIZE_STRING); // Convierte a minúsculas y elimina caracteres especiales
        $aMaterno = filter_var(strtolower($_POST['aMaterno']), FILTER_SANITIZE_STRING); // Convierte a minúsculas y elimina caracteres especiales
        $telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING); // Convierte a minúsculas y elimina caracteres especiales
        $email = $_POST['email']; // No se convierte a minúsculas ni se eliminan caracteres especiales

        $errores = ''; // Variable para almacenar los errores

        try{ // Intenta conectarse a la base de datos
            $conexion = new PDO('mysql:host=localhost; dbname=id20192818_registroasistentes','id20192818_root','Teclas99._.9'); // Conexión a la base de datos
        }catch(PDOException $e){ // Si no se puede conectar, muestra el error
            echo "Error: " . $e->getMessage(); // Muestra el error
        }

        $statement = $conexion->prepare('SELECT * FROM `asistente` WHERE email = :email LIMIT 1'); // Prepara la consulta
        $statement->execute(array(':email' => $email)); // Ejecuta la consulta
        $resultado = $statement->fetch(); // Almacena el resultado de la consulta

        if($resultado != false){ // Si el resultado es diferente de false, es decir, si el correo ya existe
            header('Location: mensajeMalo.php'); // Agrega el error a la variable $errores
        }

        if($errores == ''){ // Si no hay errores
            //INSERT into `asistente`(IdCliente, Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, Email) values (NULL, 'Vanessa', 'Morales', 'Jimenez', '5516782314', 'vanessaMorales@gmail.com')
            $statement = $conexion->prepare('INSERT INTO `asistente`(IdCliente, Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, Email) VALUES (null, :nombre, :aPaterno, :aMaterno, :telefono, :email)'); // Prepara la consulta
            $statement->execute(array( //   Ejecuta la consulta
                ':nombre' => $nombre, 
                ':aPaterno' => $aPaterno,
                ':aMaterno' => $aMaterno,
                ':telefono' => $telefono,
                ':email' => $email
            ));

            header('Location: mensajeBueno.php'); // Redirige a registro.php
        }
    }