<?php
     include("webpage_header.php");
?>
<?php
include "connection.php";

    if(isset($_POST['submit']))
    {
       // $id=$_POST['f_id'];
        //var_dump($id);exit();
    $funame = mysql_real_escape_string($_POST['f_username']);
    $password = mysql_real_escape_string($_POST['f_password']);
    //echo $uname;
    if ($funame != "" && $password != "")
    {

        $sql_query = "select * from farmer where f_username='".$funame."' and f_password='".$password."'";
       // var_dump($sql_query);exit;
        $result = mysql_query($sql_query);
    
        $numrec=mysql_num_rows($result);  
        while ($row=mysql_fetch_assoc($result)) 
        {
            $a=$row["f_id"];
            $_SESSION['far']=$row["f_name"];
            //echo $_SESSION['far'];exit;
        
                
        }     

      if($numrec > 0)
        { 

             session_start();
                 $_SESSION['funame']=$funame;
                 $_SESSION['fid']=$a;
                header('Location: Home.php');
        }
        else
        { 
                     header('Location: farmerlogin.php?err=1');
        }
    }

} 
?>

<?php
     include("webpage_footer.php");
?>