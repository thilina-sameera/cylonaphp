<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filewritter
 *
 * @author Thilina
 */
class filewritter {
    //put your code here
    function __construct() {
        
    }
    
    //write given file is not available
    public static function write($filename, $content){
        //return TRUE if file is not exist
        if(!is_file($filename)){
            $file = fopen($filename, "w");
            fwrite($file, $content);
            fclose($file);            
        }
    }
}
