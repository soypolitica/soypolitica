<?php

function ip_search(array $x){
$ips = array_column($x, 'ip');
$ip = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119");
            $a = false;
            for($i = 0;$i < count($ips); $i++) {
                if(str_contains($ips[$i], $ip)){$a = true;}
            }
            return $a;
}


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["file"])) { if($_POST["file"] === "rtwo") {
        $jsonData = file_get_contents("./mod/sub/rtwo.json");
        echo $jsonData;}
}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["body"]) && isset($_POST["faction"]) && isset($_POST["board"]) && $_POST["board"] == "party") {
    if(empty($_POST["body"]) || empty($_POST["faction"]) )  {
        echo "<script>alert('POSTING IS LOCKED!')</script>";
    }
    else {
    $write = Array( 
"body" => substr(addslashes($_POST["body"]) ,0, 3000),
"faction" => substr(addslashes($_POST["faction"]) ,0, 50),
'ip' => $encryption = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119")
);
$test = file_get_contents("./mod/sub/bibisi.json");
if(empty($test)) {
$json = json_encode($write);
}
else {
    
    $json = file_get_contents("./mod/sub/bibisi.json") . "," . json_encode($write);
}
if(empty(json_decode($test, TRUE)) === false){
if(ip_search(json_decode($test, TRUE)) == false ) {
file_put_contents("./mod/sub/bibisi.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");
}
else {
    echo "<script>alert('only 1 post per IP on this page')</script>";
}
}
else{
    file_put_contents("./mod/sub/bibisi.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");
}
header("Location: https://politica.soyja.cc/party.html");
}}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["body"]) && isset($_POST["faction"]) && isset($_POST["board"]) && $_POST["board"] == "Bills" && isset($_POST["poll"])) {
    if(empty($_POST["body"]) || empty($_POST["faction"]) || empty($_POST["poll"]|| str_contains($_POST["poll"], "strawpoll.com") == false))  {
        echo "<script>alert('No content')</script>";
    }
    else {
    $write = Array( 
"body" => substr(addslashes($_POST["body"]) ,0, 3000),
"faction" => substr(addslashes($_POST["faction"]) ,0, 50) . " ## " . substr($encryption = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119"), 0, 7),
'ip' => $encryption = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119"),
            'poll' => $_POST["poll"]
);
$test = file_get_contents("./mod/sub/bills.json");
if(empty($test)) {
$json = json_encode($write);
}
else {
    
    $json = file_get_contents("./mod/sub/bills.json") . "," . json_encode($write);
}


file_put_contents("./mod/sub/bills.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");

header("Location: https://politica.soyja.cc/bills.html");
}}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["file"])) {
    if($_POST["file"] === "party.html") {
    echo file_get_contents("./mod/sub/bibisi.json");
    }
        if($_POST["file"] === "Bills") {
    echo file_get_contents("./mod/sub/bills.json");
    }
}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["body"]) && isset($_POST["faction"]) && isset($_POST["board"]) && $_POST["board"] == "policy") {
    if(empty($_POST["body"]) || empty($_POST["faction"]))  {
        echo "<script>alert('No content')</script>";
    }
    else {
    $write = Array( 
"body" => substr(addslashes($_POST["body"]) ,0, 3000),
"faction" => substr(addslashes($_POST["faction"]) ,0, 50) . " ## " . substr(openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119"),0,7),
'ip' => $encryption = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119")
);
$test = file_get_contents("./mod/sub/policies.json");
if(empty($test)) {
$json = json_encode($write);
}
else {
    
    $json = file_get_contents("./mod/sub/policies.json") . "," . json_encode($write);
}


file_put_contents("./mod/sub/policies.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");

header("Location: https://politica.soyja.cc/policies.html");
}}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["body"]) && isset($_POST["faction"]) && isset($_POST["board"]) && $_POST["board"] == "speeches") {
    if(empty($_POST["body"]) || empty($_POST["faction"]))  {
        echo "<script>alert('No content')</script>";
    }
    else {
    $write = Array( 
"body" => substr(addslashes($_POST["body"]) ,0, 3000),
"faction" => substr(addslashes($_POST["faction"]) ,0, 100),
'ip' => $encryption = openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119")
);
$test = file_get_contents("./mod/sub/speeches.json");
if(empty($test)) {
$json = json_encode($write);
}
else {
    
    $json = file_get_contents("./mod/sub/speeches.json") . "," . json_encode($write);
}


file_put_contents("./mod/sub/speeches.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");

header("Location: https://politica.soyja.cc/speech.html");
}}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["link"]) && isset($_POST["party"]) && isset($_POST["board"]) && $_POST["board"] == "rtwo") {
    if(empty($_POST["link"]) || empty($_POST["party"]))  {
        echo "<script>alert('No content')</script>";
    }
    else {
    $write = Array( 
"body" => $_POST["link"],
"faction" => $_POST["party"]

);
$test = file_get_contents("./mod/sub/rtwo.json");
if(empty($test)) {
$json = json_encode($write);
}
else {
    
    $json = file_get_contents("./mod/sub/rtwo.json") . "," . json_encode($write);
}


file_put_contents("./mod/sub/rtwo.json", "[". str_replace("]"," ",str_replace("["," ",$json))."]");

header("Location: https://politica.soyja.cc/round2.html");
}}
?>