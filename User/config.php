<?php
define('host','localhost');
define('username','root');
define('password','');
define('dbname','furniture');

$conn=mysqli_connect(host,username,password,dbname);
if(!$conn)
{?>
   <script> alert ("connection not created");</script>
<?php
}
?>