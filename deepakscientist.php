<?php
     include("webpage_header.php");
?>
<?php
include "connection.php";

    if(isset($_POST['submit']))
    {

    $uname = mysql_real_escape_string($_POST['s_username']);
    $password = mysql_real_escape_string($_POST['s_password']);
    //echo $uname;
    if ($uname != "" && $password != "" && $status !="0")
    {

        $sql_query = "select * from scientist where s_username='".$uname."' and s_password='".$password."' and status=1";
        //var_dump($sql_query);exit;
        $result = mysql_query($sql_query);

        while ($row=mysql_fetch_assoc($result)) 
        {
           // var_dump($row);exit;
            $tid=$row['type_id'];
            $tnm=$row['s_type'];

            //echo $ttd; exit;
        }
       
        if($rw=mysql_num_rows($result) > 0)
        { 
            //var_dump($rw);exit;
		     session_start(); 
            $_SESSION['suname']=$uname;
            $_SESSION['tid']=$tid;
            $_SESSION['tnm']=$tnm;
                header('Location: Home.php');
        }
        else
        { 
	                 header('Location: scientistlogin.php?arr=1');
        }

    }

} 
?>

<?php
     include("webpage_footer.php");
?>