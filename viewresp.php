<?php
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "firaol", "pwd" => "{0915532504rR}", "Database" => "webapplicationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationstp045150.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

 if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
