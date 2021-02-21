<?php

header('Content-type: application/json');

require_once '../config/connect.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
// $address = $_POST['address'];
// $email = $_POST['email'];
$regno = $_POST['reg'];
$desc = $_POST['desc'];

$date = $_POST['date'];
$date = str_replace('/', '-', $date);
$dt = date ("yyyy-mm-dd", strtotime($date));

$kilo = $_POST['dist'];
$values = $_POST['values'];
$pickdrop = "no";
// $password = $_POST['date'];

// echo $values;
$response_array['status']=$date;
$response_array['status']=$dt;

// $chk_app_sql = mysqli_query($connect,"select * from appointments where date='$dt' and vehicle_id in (select vehicle_id from vehicles where vehicle_registered_no='$regno')");

$cust_sql = mysqli_query($connect,"select customer_id from customers where customer_phno='$contact'");

if(mysqli_num_rows($cust_sql) > 0){

    $cust_data=mysqli_fetch_array($cust_sql);
    $c_id = $cust_data['customer_id'];
    
    $veh_sql = mysqli_query($connect,"select vehicle_id from vehicles where vehicle_registration_no='$regno' and customer_id='$c_id'");
    if(mysqli_num_rows($veh_sql) > 0){
        
        $veh_data = mysqli_fetch_array($veh_sql);
        $v_id = $veh_data['vehicle_id'];
        // $apptmt_sql = mysqli_query($connect,"insert into appointment values('','$c_id','$v_id','$dt','$kilo','$pickdrop','$desc')");
        // if($apptmt_sql){
        //     for($i=0; $i < count($values); $i++){
        //         $ser_tmp = $values[$i];
        //         $get_ser_sql = mysqli_query($connect,"select service_id from services_offered where service_name='$ser_tmp'");
        //         $get_app_sql = mysqli_query($connect,"select appointment_id from appointments where customer_id in (select customer_id from customers where customer_phno='$contact')");
        //         if(mysqli_num_rows($get_ser_sql) > 0){
        //             if(mysqli_num_rows($get_app_sql) > 0){
        //                 {
    
        //                     $ser_data = mysqli_fetch_array($get_ser_sql);
        //                     $s_id = $ser_data['service_id'];
        //                     $app_data = mysqli_fetch_array($get_app_sql);
        //                     $a_id = $app_data['appointment_id'];
        //                     $services_sql = mysqli_query($connect,"insert into opted_services values('$a_id','$s_id')");
        //                     if($services_sql){
        //                         $response_array['status']='success';
        //                     }
        //                     else{
        //                         $response_array['status']='err_4';
        //                     }
        
        //                 }
        //             }
        //             else{
        //                 $response_array['status']='err_3';
        //             }
        //         } 
        //         else{
        //             $response_array['status']='err_2';
        //         }
        //     }
        // }
        // else{
        //     $response_array['status']='err_1';
        // }
    }
    else{
        $response_array['status']='veh';
    }


}
else{
    $response_array['status']='cust';
}


echo json_encode($response_array);

?>