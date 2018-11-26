<?php

class conexion {

    var $servername = "localhost";
    var $username = "root";
    var $password = "123456";
    var $database="id6475911_simulador";
    var $conn;

    function conexion() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    function consulta($query){
        $this->conn->set_charset('utf8');
        return $this->conn->query($query);
        
        
    }
    function cerrarConexion(){
        $this->conn=null;
    }

}


?>