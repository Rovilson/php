<html>
<body>
<?php
 $con = mssql_connect ("192.168.1.101", "sa", "x9xvUVvn3");
 mssql_select_db ("SDBP11", $con);
 $sql= "SELECT * FROM SRB050";
 $rs= mssql_query ($sql, $con);
 echo "<pre>";
 while ($row = mssql_fetch_array($rs)) {
  print_r ($row);
 }
 mssql_close ($con);
?>
</body>
</html>
