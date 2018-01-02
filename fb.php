<?php
  include './conect_fb.php';
 
  $dbh = ibase_connect ($host, $user, $pwd) or die ('<p>Código do erro: ' . ibase_errcode() . '</p><p>Mensagem de erro: ' . ibase_errmsg() . "</p>");

  if ($dbh) {
     echo "Conectou...".$host." ".$user." ". $pwd."\n";
  }

  $stmt = "select * from CM_CUSU order by NOME asc";
  $sth = ibase_query ($dbh, $stmt);

  while ($row = ibase_fetch_row ($sth)) {
        echo $row[0]."\t -> ".$row[2]."\n";
  }

  ibase_free_result($sth);
  ibase_close($dbh);
?>
