<?php
class db{
    private $host ="localhost";
    private $user ="root";
    private $pwd ="";
    private $db_name ="tb-users";
    protected $conn;
    
    protected function connect()
    {
        $this->conn=new mysqli($this->host,$this->user,$this->pwd,$this->db_name);
        if($this->conn->connect_error){
            die("conection failed:" . $this->conn->connect_error);
        }
        return $this->conn;
    }
 protected function closeconnection(){
     if ($this->conn){
        $this->conn->close();
     }
 }
}
?>