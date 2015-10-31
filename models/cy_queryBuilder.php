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
    
    public function selectTableOnly($tableName){
        $select =  "select * from ".$tableName."";
        return $select;
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
    
    public function selectCustomTableOnly($tablename, $columnNames = array()){
        //get columnName array values to a formated string 
        $select = "select ";
        foreach ($columnNames as $col){
            $select .= $col.", ";
        }
        //remove last , symbol
        $select = substr($select, 0, -2);
        $query = $select." from ".$tablename." ";
        return $query;
    }
    
    /*
     * genarate where sql queries
     * return query to selected column and value
     */
    public function find($colmn, $value){
        if(defined("ORclause")){
            $find = " ".$colmn."=".$value."";
            return $this->cus.$find;
        }else{
            $find = " where ".$colmn."=".$value."";
            return $this->cus.$find;
        }
    }
    
    /*
     * genarate where sql queries
     * return query to selected column and value
     * Support OR
     */
    public function findOR($colmn, $value){
        define("ORclause","true");
        $find = " Where ".$colmn."=".$value." OR ";
        $this->cus .= $find;
        return $this;
    }
    
    /*
     * Genarate where sql queries
     * where query with < > => =< opereators
     */
    public function where($colmn, $operator, $value){
        
        if(defined("WhereOR")){
            $where = " ".$colmn." ".$operator." ".$value." ";
            return $this->cus.$where;
        }else{
            $where = " where ".$colmn." ".$operator." ".$value." ";
            return $this->cus.$where;
        }
    }
    
    /*
     * Where OR function
     * use to join two where caluese
     */
    public function whereOR($colmn, $operator, $value){
        define("WhereOR", "true");
        $where = " where ".$colmn." ".$operator." ".$value." OR ";
        $this->cus .= $where;
        return $this;
    }
    
  
    
}
