<?php

include 'C:/Users/User/Desktop/MEATBONES/CRUD.PHP';


$id = $_GET['id'] ?? null;

$request = $_SERVER['REQUEST_METHOD']; 

switch ($request) {


case "POST"  : create($conn,$request,$input      );

break;

case "GET"   : read($conn,$request               ); 

break;
 
case "PUT"   : update($conn,$request,$input,$id  ); 

break;

case "PATCH" : patch($conn,$request,$input,$id   ); 

break;

case "DELETE": delete($conn,$request,$id         ); 

break;

default: echo json_encode("You input is invalid.");

                    };

?>