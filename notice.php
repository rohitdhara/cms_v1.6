<!DOCTYPE html>
<html>
<head>
		<title>notice</title>
</head>
<body>
   <?php
    require("conection/connect.php");
    $key=1;
    $sql_sel=mysql_query("SELECT * FROM notice WHERE id like '%$key%' ");
    $row=mysql_fetch_array($sql_sel);
    $msg=$row[1];
    $msg1=$row[2];
    echo "<marquee>{$msg}  &nbsp date: {$msg1} </marquee>";  
     // use wordwrap() if lines are longer than 70 characters
     $msg = wordwrap($msg,70);
    // send email
    //mail("dhara.rohit@gmail.com","Notice OmDayal group of Institutions ",$msg);
   ?>
</body>
</html>



