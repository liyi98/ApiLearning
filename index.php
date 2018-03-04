<?php

include 'Connection.php';
$db = new Connection();
$con = $db->connect();

$response = array();

switch ($_GET['view']) {


    case 'get_customers':
        $response['success'] = true;
        $response['customers'] = array();
        $sql=  mysqli_query($con,"SELECT * FROM customer");
        while($customer =mysqli_fetch_assoc($sql)){
            array_push($response['customers'], $customer);
        }
        break;


    default:
        $response = array();
        $response['success'] = false;


}

echo json_encode($response);

?>