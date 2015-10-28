<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Thilina
 */
class database {
    //put your code here
    public $info;
    
    function __construct() {
        $this->info = new info();        
    }
    
    public function connectDB(){
        $conn = mysqli_connect(
                $this->info->servername,
                $this->info->username,
                $this->info->password, 
                $this->info->database, 
                $this->info->port, 
                $this->info->socket
                );
        return $conn;
        
        }
   
}
