<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of info
 *
 * @author Thilina
 */
class info {
    //put your code here
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "";
    public $port = "";
    public $socket = "";
    
    function __construct() {
        
    }
    
    //fill database connection details inside db array
    public function getDbDetails(){
        $db = array(
            "servername" => $this->servername,
            "username" => $this->username,
            "password" => $this->password,
            "databaseName" => $this->database,
            "port" => $this->port,
            "socket" => $this->socket                
        ); 
        
        return $db;
    }
    
    
    //put your queries to sqlQuery array 
    public function getQuery(){
        $sqlQuery = array(
            "test" => "select * from customers"
        );
        
        return $sqlQuery;
    }    
}