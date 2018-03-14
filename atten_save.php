


<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"assignment");

  if($_SERVER['REQUEST_METHOD']=='GET'){
    $uuid=$_GET['uuid'];
    $subject=$_GET['subject'];
    
    date_default_timezone_set('Asia/Kolkata');
    $query="insert into attendance(uuid,subject,date,time) values (".$uuid.",".$subject.",'".date("Y-m-d")."','".date("h:i:sa")."')";
    $result=mysqli_query($conn,$query);
  }
?>







