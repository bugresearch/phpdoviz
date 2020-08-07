<?php
function doviz($base, $to, $quantity = 1){
    $apiurl = "https://api.exchangeratesapi.io/latest?base=".$base;
    $content = file_get_contents($apiurl);
    $obj = json_decode($content);
    $result = $obj->rates->$to;
    return $result*$quantity;
}
?>
