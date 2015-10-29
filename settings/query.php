<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of query
 *
 * @author Thilina
 */
class query {
    //query manager
    public $connection;
    
    //get database connection
    function __construct() {
        $conn = new database();
        $this->connection = $conn->connectDB();
    }
    
    public function runquery($queryName){
        
        //get database details and setup connection to database
        $dbConnection = new database();
        $conn = $dbConnection->connectDB();
        
        //get all queries
        $queryList = new info();
        $listQueries = $queryList->getQuery();
        
        //sql query to execute
        $sqlquery;
        
        //select query by name
        foreach ($query as $key => $value) {
            if($key == $queryName){
                $sqlquery = $query;
                break;
            }
        }
        
        //execute selected query
        $result = mysql_query($sqlquery);
        
        //return result set
        return $result;
    }
    
    
    
}
