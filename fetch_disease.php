<?php

include("connection.php");
include("webpage_header.php");

if(isset($_POST['submit']))
{
	if (isset($_POST['plantType']) && $_POST['plantName'] && $_POST['plantNamess']== '' ) 
	{
   echo 'Error, select an options';
   exit;
	}
			//echo $sy_iid=$_POST["plantNamess"];	
			 $pt=$_POST['plantType'];
			 $pn=$_POST['plantName'];
			$ps=$_POST['plantNamess'];
			$query="select *from symptoms where sy_id=".$ps;
			$aa=mysql_query($query);
				while($row=mysql_fetch_assoc($aa))
				{
					$sy= $row['p_symptoms'];
				}		
			
}			 // echo"</div>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<a href="disease_getinfo.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"> પાછા જાઓ</span></button></a>
	<br><br>
	<table class="table table-hover table-bordered table-dark table-striped info" style="text-align: center;">
		<tr class="info"><td colspan="2"><center>રોગની માહિતી</center></td></tr>
		<tr>
			<td width="500px">પાકનો પ્રકાર પસંદ</td>
			<td>
				<?php
				$ptype="select type_name from  planttype where type_id='$pt'";
			$qry=mysql_query($ptype);
			while($ptyperresult=mysql_fetch_assoc($qry))
			{
				foreach ($ptyperresult as $value) {
					echo $value;
				}
			}
			?>
			</td>
		</tr>
		<tr>
			<td>પાકનુ નામ</td>
			<td><?php echo $pn; ?></td>
		</tr>
		<tr>
			<td>પાકના લક્ષણ</td>
			<td><?php  echo $sy; ?></td>
		</tr>
		<tr>
			<td>રોગનું નામ</td>
			<?php
				$qr="select * from  diseases where sy_id=".$ps;
				$qry=mysql_query($qr);
				while($ar=mysql_fetch_assoc($qry))
			  	{
			  	
				
				?>

			<td><?php echo $ar["d_name"]; ?></td>
		</tr>
		<tr>
			<td>રોગનું વર્ણન</td>
			<td><?php echo $ar["d_discription"]; ?></td>
			<?php
			  	}
			?>
		</tr>
	</table>
</body>
</html>
<?php
include("webpage_footer.php");
?>