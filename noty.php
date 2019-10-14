<?php
	include "connection.php";
	session_start();
	$sql = "SELECT * from faq where (s_type='".$_SESSION['tnm']."' && status=0 )";
	echo $sql;
       $result = mysql_query($sql);
       $i=0;
       while($row =mysql_fetch_assoc($result))
       {
       $i++;
       }
       echo $i;
       $_SESSION["ntf"]=$i;
       if($i>0)
       {       
       		echo"more than zero";
       }
       else
       {
       	echo"more than zero";
       }

?>