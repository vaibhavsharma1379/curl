<?php
require_once "./config/config.php";
function getUsers($url){
    global $ch;
    curl_setopt($ch,CURLOPT_URL,$url);
    $response=curl_exec($ch);
    curl_close($ch);
    $data=json_decode($response,true);
    return $data;
}
function createRecord($url){
    global $ch;
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($_POST));
    $response=curl_exec($ch);
    $status_code=curl_getinfo($ch,CURLINFO_RESPONSE_CODE);
    curl_close($ch);
    $data=json_decode($response,true);
    $recordData=json_decode(array_keys($data)[0],true);
    if($status_code===422){
        echo "Invalid data:";
        print_r($data["errors"]);
        exit;
    }
    if ($status_code !== 201) {
    
        echo "Unexpected status code: $status_code";
        var_dump($data);    
        exit;
    }
    // echo "<pre>"; print_r($recordData);
   return $recordData;
}
?>