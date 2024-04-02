<?php

class Conexion {
    
    public static function con() {
        $host = 'localhost';
        $dbname = 'Proyect'; // Corregí el nombre de la base de datos
        $user = 'root';
        $password = ''; // Coloca la contraseña de tu base de datos aquí
        
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
           // echo "Conexión establecida correctamente.";
        } catch(Exception $e) {
            echo "No se pudo conectar, error: " . $e->getMessage();
        }
        
        return $conexion; // Devolvemos la conexión
    }
    
}

?>
