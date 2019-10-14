<?php
include("webpage_header.php");
include "connection.php";
    $flag=0;
    $unm=$_POST["s_username"];
    $pwd=$_POST["s_password"];

    $qry="select * from scientist where status=1";
    $data=mysql_query($qry);
    while($arr=mysql_fetch_assoc($data))
    {

        $arr["s_username"];
        $arr["s_password"];
        $arr['type_id'];
        $arr['s_type'];
        $arr['s_id'];
        $arr['s_name'];

        if($unm==$arr["s_username"] && $pwd==$arr["s_password"])
        {
            $flag++;
            session_start();
            $_SESSION['suname']=$unm;
            $_SESSION['tid']=$arr['type_id'];
            $_SESSION['snm']=$arr['s_name'];
            $_SESSION['tnm']=$arr['s_type'];
            $_SESSION['sid']=$arr['s_id'];
            header("location:home.php");
        }
    }
    if($flag==0)
    {

        header("location:scientistlogin.php?arr=1");
    }



     include("webpage_footer.php");
?>