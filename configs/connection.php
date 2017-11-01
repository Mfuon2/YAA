<?php

class connection
{
    public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bmgf";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "success";
        return $conn;
    }
}

$ourConnection = new connection();

?>