<?php
class db
{
    private $host = "localhost";         
    private $user = "root"; 
    private $port=80;             
    private $pass = "";               
    private $dbname = "testdb";         
    private $charset = 'utf8';          
    private $options=[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];                                  

    private $conn;                  
    public function connect_pdo()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->host."; 
                                    port=$this->port;
                                    dbname=" . $this->dbname.";
                                    charset=".$this->charset,  
                                    $this->user, $this->pass,$this->options);

        } catch(PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }
        return $this->conn;
    }


    public function close_connect()
    {
        $this->conn = null;
    }

    public function getInfoPDO()
    {
        return $this->conn;
    }
}
