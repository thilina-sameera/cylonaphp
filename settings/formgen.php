<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formgen
 *
 * @author Thilina
 */
class formgen {
    //put your code here
    public $html = "<form ";
    public $name = array();
    public static $i = 0;
    
    function __construct() {
        $html .='action="./formactionpage.php" method="post">';
    }
    
    public function addTextFiled($title,$name){
        $html .= $title." : <br>";
        $html .= '<input type="text" name="'.$name.'"><br>';
        $this->name[$i] = $name;
        $i++;
    }
    
    public function addDropdown($title, $name, $options = array()){
        
    }
    
    public function writeActionsPage(){
        
    }


    public function fetchForm(){
        $html .= '</form>';
        return $html;
    }
    
  
    
}
