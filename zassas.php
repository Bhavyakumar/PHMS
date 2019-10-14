if (!isset($_SESSION['tnm']))
	{
   	 	echo "";
   	 	//$_SESSION['tnm']=0;
	}
	else
	{

		$sql = "SELECT * from faq where (s_type='".$_SESSION['tnm']."' && status=0 )";
		//echo $sql;
       $result = mysql_query($sql);
       $i=0;
       while($row =mysql_fetch_assoc($result))
       {
       $i++;
       }
       //echo $i;
       $_SESSION["ntf"]=$i;
       
	}



	include "connection.php";
	//session_start();
	if (!isset($_SESSION['tnm']))
	{
   	 	echo "";
   	 	//$_SESSION['tnm']=0;
	}
	else
	{

		$sql = "SELECT * from faq_answer where (s_type='".$_SESSION['tnm']."' && status=0 )";
		//echo $sql;
       $result = mysql_query($sql);
       $i=0;
       while($row =mysql_fetch_assoc($result))
       {
       $i++;
       }
       //echo $i;
       $_SESSION["not"]=$i;
       
	}
*/