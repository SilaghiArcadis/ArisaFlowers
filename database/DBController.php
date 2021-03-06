<?php


class DBController
{
    //DataBase Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password ='';
    protected $database = "arisaFlowers";

    //connection property
    public $con = null;

    // call constructor
    public function __construct(){
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail to connect to the database".$this->con->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    //for MySQL closing connection
    protected  function closeConnection(){
        if($this->con!= null){
            $this->con->close();
            $this->con=null;
        }
    }
}

