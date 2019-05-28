<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/usuarios.php';
 
// instantiate database and game object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$product = new Product($db);
// query products
$stmt = $product->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){
    $products_arr=array();
    $products_arr["records"]=array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $product_item=array(
            "idUsuario" => $idUsuario, 
            "name" => $name,
            "email" => $email,
            "create_time" => $create_time
        );
        array_push($products_arr["records"], $product_item);
    } 
    // set response code - 200 OK
    http_response_code(200);
    // show products data in json format
    echo json_encode($products_arr);
}