<?php

require_once("new_config.php");


class Database {


    public $conn;

    //when you create an instance, PHP automatically calls the constructor method
    //constructor initializes the properties of the object
    //by assigning its values
    function __construct(){
        $this->open_db_connection();
    }

    public function open_db_connection(){

        //DB connection
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(mysqli_connect_errno()){

            die("Database connection failed badly" . mysqli_error());
        }

    }


    public function query($sql){

        $result = mysqli_query($this->conn, $sql);
      

        return $result;
    }

    private function confirm_query($result){
        if($result){
            die("Query Failed");
        }

    }

    public function escape_string($string){

        $escaped_string = mysqli_real_escape_string($this->conn, $string);
        return $escaped_string;
    }

}

$database = new Database();










?>