<?php

include 'Connection.php';
$db = new Connection();
$con = $db->connect();

$response = array();

switch ($_GET['view']) {


    case 'get_customers':
        $sql=  mysqli_query($con,"SELECT * FROM customer");
        while($customer =mysqli_fetch_assoc($sql)){
            array_push($response, $customer);
        }
        break;

    case 'register':
        $register = mysqli_query($con,"INSERT INTO customer(customer_name,customer_password,customer_phone) VALUES ('$_POST[name]','$_POST[password]','$_POST[phone]') ");
        $response['success'] = $register;
        break;


    

    default:
        $response = array();
        $response['success'] = false;



}

echo json_encode($response);

?>