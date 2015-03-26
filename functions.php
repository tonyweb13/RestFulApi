<?php
function get_contact($find){
    
    $contact = array(
        "first"=>"Tony",
        "last"=>"Juntila",
        "middle"=>"Decena",
        "gender"=>"Male",
        "current"=>"Manila",
        "job"=>"Developer"
    );
    
    foreach ($contact as $con=>$display){
        
        if($con==$find){
            return $display;
            break;
        }
        
    }
    
}
?>