<?php
$servername = "localhost";
$username = "root";
$passward = "";
$dbname = "university management system";

$conn = new mysqli ($servername,$username,$passward,$dbname);
if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}

$student_id = $_post['student_id'];
$student_name = $_post['student_name'];
$email = $_post['email'];
$phone = $_post['phone'];
$Dept_id = $_post['Dept_id'];
$program_id = $_post['program_id'];
$enrol_id = $_post['enrol_id'];

// $conn = new mysqli('localhost','root','','university management system');
// if($conn->connect_error){
//     die('connection Failed  :'.$conn->connect_error);
// }else{
    $sql ="insert into student_registration (student_id,name,email,phone,Dept_id,program_id,enrol_id)
//     values('$student_id','$name','$email','$phone','$Dept_id','$program_id','$enrol_id')";
//     $stmt->bind_param("issiiii",$student_id,$name,$email,$phone,$Dept_id,$program_id,$enrol_id);
//     $stmt->execute();
//     echo"Registration Successfully....";
//     $stmt->close();
//     $conn->close();
// }
if($conn->query($sql)===TRUE)
{
    echo("student registered successful!");
}else{
    echo("error :".$sql."<br>".$conn->error);
}
$conn->close();
?>