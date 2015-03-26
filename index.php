<?php
//process request via URL
header("Content-Type:application/json");
include("functions.php");
if(!empty($_GET['name'])){
    $name = $_GET['name'];
    $contact=get_contact($name);
    
    if(empty($contact)){
        deliver_response(200, "contact not found",NULL);
    }else{
        deliver_response(200,"contact found",$contact);
    }
}else{
    deliver_response(400,"Invalid Request",NULL);
}

function deliver_response($status,$status_message,$data){
    header("HTTP/1.1 $status $status_message");
    
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;
    
    $json_response = json_encode($response);
    echo $json_response;
}
?>