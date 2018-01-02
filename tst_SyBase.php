<html>
<body>
<?php
 $con = sybase_connect ("192.168.1.101", "sa", "x9xvUVvn3");
 sybase_select_db ("SDBP11", $con);
 $sql= "SELECT * FROM SRB050";
 $rs= sybase_query ($sql, $con);
 echo "<pre>";
 while ($row = sybase_fetch_array($rs)) {
  print_r ($row);
 }
 sybase_close ($con);
?>
</body>
</html>
