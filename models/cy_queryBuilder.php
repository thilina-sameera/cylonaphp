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
    public function table($tableName){
        $select =  "select * from ".$tableName."";
        $this->cus = $select;
        return $this;
    }
    
    public function find($colmn, $value){
        $find = " where ".$colmn."=".$value."";
        return $this->cus.$find;
    }
    
    
    
    
  
    
}
