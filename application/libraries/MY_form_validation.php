<?php
class MY_Form_validation extends CI_Form_validation {
    public function thai_character($input) 
    {
        $this->set_message('thai_character', '{field}, โปรดกรอกภาษาไทยเท่านั้น');
        // if (preg_match("/^[ก-๙]+$/", $input)) {
        // if (preg_match("/^[A-Za-zก-๙]+$/", $input)) {                               
            return true;
        // }
    
        
    }
    public function thai_en_character($input) 
    {
        $this->set_message('thai_en_character', '{field}, โปรดกรอกภาษาไทยหรือภาษาอังกฤษเท่านั้น');
        // if (preg_match("/^[ก-๙]+$/", $input)) {
        // if (preg_match("/[A-Za-zก-๙]+$/", $input)) {                               
            return true;
        // }
    
    }
}