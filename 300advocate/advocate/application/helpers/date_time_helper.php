<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function date_time_convert($str){
    $CI = get_instance();
    $CI->load->model('setting_model');
    $settings = $CI->setting_model->get_setting();
    
    if($settings->date_format){
        return $str = date("".$settings->date_format." h:i a",strtotime($str));        
    } else {
        return $str;
    }
    
}

function date_convert($str){
    
    $CI = get_instance();
    $CI->load->model('setting_model');
    $settings = $CI->setting_model->get_setting();

    if($settings->date_format){
        return $str = date("".$settings->date_format."",strtotime($str));        
    } else {
        return $str;
    }

}

?>