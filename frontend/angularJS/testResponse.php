<?php
$data1 = file_get_contents("php://input");
$data = $_POST;
$dataGet = $_GET;
if (isset($data['error']) && $data['error']){
    http_response_code(501);
    die();
}
if ($dataGet){
    echo 'get ' . implode(' ', array_values($dataGet));
    die();
}
echo implode(' ', array_values($data));

