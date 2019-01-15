<?php

    class Conexion {
        public static function conectarDb() {
            try {
                $usuario = "root";
                $pass = "";
                $db = new PDO("mysql:host=localhost;dbname=sistema1",
                            $usuario,$pass);
                $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
                echo "Conectado";
                return($db);

            } catch (PDOException $ex) {
                print "<p>Error no se pudo conectar a la base de datos</p>";
                print "<p>Error: " . $ex->getMessage() . "</p>";
                exit();
            }
        }
    }



?>