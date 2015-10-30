<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tableGen
 *
 * @author Thilina
 */
class tableGen {
    
    //table code
    public $table;
    
    function __construct(){
        
    } 
    
    //create table code
    public function createTable($tableName, $columns = array(), $rows= array()){
        $table .= "<table>";
        
        //get rows and columns count
        $colCount = count($columns);
        $rowCount = count($rows);
        
        //check table rows and cols count are equal
        if($colCount != $rowCount){
            return "";
        }
        
        $table .= "<tr>";
        foreach ($columns as $cols){
            $table .= "<td>";
                $table .= "<h6>".$cols."</h6>";
            $table .= "</td>";
        }
        $table .= "</tr>";

        $i = 0; //column itterater
        foreach ($rows as $row){
            
            //start table row when itterator 0
            if($i == 0){
                $table .= "<tr>";
            }
            $table .= "<td>";
                $table .= "".$row."";
            $table .= "</td>";
            
            $i++;
            
            //end table row when iterator equal to column end
            if($i == $colCount){
                $table .= "</tr>";
                $i =0;
            }
            
  
        }
              
        $table .= "</table>";
        
        return $table;
    }
}
