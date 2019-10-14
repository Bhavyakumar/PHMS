<?php
	include("webpage_header.php");
?>
<form class="form-horizontal" action="forgot_password(2).php" method="POST">
	<div class="row">
		<div class="col-lg-offset-1 col-lg-6">
			<div>
				<h4>પાસવર્ડ મેળવવા</h4><hr>
			</div>
			<div>
				<?php 
				if (isset($_GET["error"]))
				{
				 		
				 		if($_GET["error"]==0)
				 		{
				 		echo "<font color=red>તમે  વપરાશકર્તા  નથી.</font>";
				 		}
				 		else if($_GET["error"]==1)
				 		{
				 			echo "<font color=green>ઈમેલ મોકલાય ગયો છે.</font>";	
				 		}
				}
				?>
			</div>
			<div class="form-group">
			<label>ઈમેલ:</label>
			<div>
				<input type="text" name="txtmail" class="form-control">	
			</div><br>
			<input type="submit" name="s1" value="મોકલો" class="btn btn-success">
			</div>
		</div>
	</div>
</form>

<?php
	include ("webpage_footer.php");
?>