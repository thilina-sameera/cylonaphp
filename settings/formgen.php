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
    //store source code of form
    public $html = "<form ";
    public $name = array();
    public static $i = 0;
    public $actionPage;
    //open a form in html
    function __construct($actionpage) {
        $html .='action="'.$actionpage.'" method="post">';
        $this->actionPage = $actionpage;
    }
    
    //add a text field to a form
    public function addTextFiled($title,$name){
        $html .= $title." : <br>";
        $html .= '<input type="text" name="'.$name.'"><br>';
        $this->name[$i] = $name;
        $i++;
    }
    
    //add a password field to a form
    public function addPasswordFiled($title,$name){
        $html .= $title." : <br>";
        $html .= '<input type="password" name="'.$name.'"><br>';
        $this->name[$i] = $name;
        $i++;
    }
    
    
    //add a textarea to a form
    public function addTextArea($title,$name,$cols,$rows){
        $html .= $title." : <br>";
        $html .= '<textarea name="'.$name.'" rows="'.$rows.'" cols="'.$cols.'">';
        $html .= '</textarea>';
        $this->name[$i] = $name;
        $i++;
    }
    
    //add a dropdown box for code
    public function addDropdown($title, $name, $options = array()){
        $html .= $title." :<br>";
        $html .= '<select name="'.$name.'">';
        
        foreach ($options as $item){
            $html .= '<option value="'.$item.'">'.$item.'"</option><br>';
        }
        
        $html .= '</select>';
        
        //for use of action listener page
        $this->name[$i] = $name;
        $i++;
    }
    
    //form action handle page
    public function writeActionsPage(){
        
    }
    
    public function headActions(){
        
        $postPhp = 'if(isset(';
        $values ="";
        foreach($this->name as $val){
            $values .= '$_POST["'.$val.'"] &&';
        }
        //remove last && signs
        $values = substr($values, 0,-2);
        
        //continue code genarating
        $postPhp .= ')){'
                . '//add your code here'
                . '}';
        
        return $postPhp;
    }
    
    public function writeFormPostFile(){
        $page = "<?php ";
        $page .= $this->headActions();
        $page .= "?>";
        
        filewritter::write($this->actionPage, $page);
    }


        //finalize form
    public function fetchForm($btnName){
        $html .= '<input type="submit" value="'.$btnName.'">';
        $html .= '</form>';
        return $html;
    }
    
  
    
}
