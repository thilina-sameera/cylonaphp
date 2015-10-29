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
    
    public function insertQuery($tableName, $values = Array()){
        
        //template query
        $sql = "insert into ".$tableName."(";
        $columns = "";
        $values = "";
        
        
        //append columns and values to a string format 
        foreach ($valuesArray as $key => $values) {
            $columns .= $key.",";
            $values  .= $valuesArray.", ";
        }
               
        //remove last "," mark from boths columns and values strings
        $columns = substr($columns, 0, -1);
        $values = substr($values, 0,-1);
        
        $sql .=$columns.") values (".$values.");";
        //return insert query
        return $sql;
        
    }
    
    
    
}
