<?php

class cy_queryBuilder {
    
    public $cus;
    
   
    /*
     *Easy Query Genarater 
     * 
     */
    function __construct() {
        
    }
    
    /*
     * get table name from static method
     * 
     */
    public function selectTable($tableName){
        $select =  "select * from ".$tableName."";
        $this->cus = $select;
        return $this;
    }
    
    /*
     * Select only selected columns in query
     * selecting columns are pass by array call columnName 
     * 
     */
    public function selectCustomTable($tablename, $columnNames = array()){
        //get columnName array values to a formated string 
        $select = "select ";
        foreach ($columnNames as $col){
            $select .= $col.", ";
        }
        //remove last , symbol
        $select = substr($select, 0, -2);
        $this->cus = $select." from ".$tablename." ";
        return $this;
    }
    
    /*
     * genarate where sql queries
     * return query to selected column and value
     */
    public function find($colmn, $value){
        $find = " where ".$colmn."=".$value."";
        return $this->cus.$find;
    }
    
    /*
     * Genarate where sql queries
     * where query with < > => =< opereators
     */
    public function where($colmn, $operator, $value){
        $where = " where ".$colmn." ".$operator." ".$value." ";
        return $this->cus.$where;
    }
    
    
    
  
    
}
