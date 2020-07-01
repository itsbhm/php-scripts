<?php

$req_method = $_SERVER['REQUEST_METHOD'];
$db_resp = array();

switch($req_method){
    case "GET":
        resp(doGet());
    break;
    case "POST":
        resp(doPost());
    break;
    case "DELETE":
        resp(doDelete());
    break;
    case "PUT":
        resp(doPut());
    break;
}

function doGet(){

    if(@$_GET['id']){
        @$id = $_GET['id'];
        $where = "WHERE `id` =".$id;
    }else{
        $id = 0;
        $where = "";
    }

    // Start of Database Connection
    try{
        $connection = new PDO("mysql:host=localhost;dbname=restAPI", 'admin', 'admin');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Database Connection Success';
    }catch(PDOException $ex_msg){
        // echo "Error: ". $ex_msg->getMessage();
    }
    // End of Database Connection

    $sth = $connection->prepare("SELECT id, emp_name FROM emp ". $where);
    $sth->execute();
    $db_resp = array();
    while ($data = $sth->fetch(PDO::FETCH_ASSOC)){
        $emp_id = $data["id"];
        $emp_name = $data["emp_name"];

        $db_resp[] = array("emp_id" => $emp_id, "emp_name" => $emp_name);
    }
    return $db_resp;
}

function doPost(){
    if ($_POST) {
        // Start of Database Connection
        try{
            $connection = new PDO("mysql:host=localhost;dbname=restAPI", 'admin', 'admin');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database Connection Success';
        }catch(PDOException $ex_msg){
            // echo "Error: ". $ex_msg->getMessage();
        }
        // End of Database Connection

        $emp_name = $_POST['emp_name'];
        $emp_status = $_POST['emp_status'];
        
        $sth = $connection->prepare("INSERT INTO emp (emp_name, emp_status) VALUES (:emp_name, :emp_status)"); 

        $sth->bindParam(':emp_name', $emp_name);
        $sth->bindParam(':emp_status', $emp_status);
        if($sth->execute()){
            $db_resp[] = array("db_resp"=>"Row Inserted"); 	
        }else{
            $db_resp[] = array("db_resp"=>"fail");
        }
    }
    return $db_resp;
}

function doDelete(){
    if ($_GET['id']) {
        // Start of Database Connection
        try{
            $connection = new PDO("mysql:host=localhost;dbname=restAPI", 'admin', 'admin');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database Connection Success';
        }catch(PDOException $ex_msg){
            // echo "Error: ". $ex_msg->getMessage();
        }
        // End of Database Connection

        $sth = $connection->prepare("DELETE FROM `emp` WHERE `id` = ".$_GET['id']);

        if($sth->execute()){
            $db_resp[] = array("db_resp"=>"Row Deleted"); 	
        }else{
            $db_resp[] = array("db_resp"=>"fail");
        }
    }
    return $db_resp;
}

function doPut(){

    parse_str(file_get_contents('php://input'), $_PUT);

    if ($_PUT) {
        // Start of Database Connection
        try{
            $connection = new PDO("mysql:host=localhost;dbname=restAPI", 'admin', 'admin');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database Connection Success';
        }catch(PDOException $ex_msg){
            // echo "Error: ". $ex_msg->getMessage();
        }
        // End of Database Connection

        $emp_name = $_PUT['emp_name'];
        $emp_status = $_PUT['emp_status'];

        $sth = $connection->prepare("UPDATE `emp` SET `emp_name`= :db_emp_name,`emp_status`= :db_emp_status WHERE `id` = ' ".$_GET['id']." ' ");
        $sth->bindParam(':db_emp_name', $emp_name);
        $sth->bindParam(':db_emp_status', $emp_status);
        //$sth->execute();

        if($sth->execute()){
            $db_resp[] = array("db_resp"=>"Row Updated"); 	
        }else{
            $db_resp[] = array("db_resp"=>"fail");
        }
    }
    return $db_resp;
}
    
function resp($db_resp){
    echo json_encode(array("status"=>"200", "data"=>$db_resp));
}
?>