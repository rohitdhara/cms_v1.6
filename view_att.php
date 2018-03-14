
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>

    <div class="btn_pos">
        <form method="post">
            <input type="text" name="searchtxt" class="input_box_pos form-control" placeholder="Search name.." />
            <div class="btn_pos_search">
            <input type="submit" class="btn btn-primary btn-large" value="Search"/>&nbsp;&nbsp;
            <input type="text" name="date1" class="input_box_pos form-control" placeholder="Date.." />
            <input type="submit" class="btn btn-primary " name="date1" value="date"/>
           
            </div>


        </form>
    </div><br><br>
    
<br />
<div class="table_margin">
<table class="table table-bordered">
        <thead>
         <tr>
            <th style="text-align: center;">sl no</th>
            <th style="text-align: center;">RFID tag number</th>
            <th style="text-align: center;">subject</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Time</th>
        </tr>
        </thead>

        <?php 
            mysql_connect("localhost","root", "") or die("No Connection");
            mysql_select_db("assignment") or die("No Database connected!");
         $key="";
    if(isset($_POST['searchtxt']))
        $key=$_POST['searchtxt'];

         $ky="";
    if(isset($_POST['date1']))
        $ky=$_POST['date1'];

    
    if($key !="")
        $sql_sel=mysql_query("SELECT * FROM attendance WHERE uuid  like '%$key%' or subject like '%$key%'");
    else
        $sql_sel=mysql_query("SELECT * FROM attendance");

    if($ky !="")
        $sql_sel=mysql_query("SELECT * FROM attendance WHERE date like '%$ky%'");
   // else
    //   $sql_sel=mysql_query("SELECT * FROM attendance");

        
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    ?>
      <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['uuid'];?></td>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['time'];?></td>
            
      </tr>
    <?php   
    }
    ?>
    </table>
</div>
</body>
</html>
