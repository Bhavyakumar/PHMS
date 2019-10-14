
<?php
	include_once "webpage_header.php";	
?>

<script type="text/javascript">
google.load("elements", "1", {packages: "transliteration"});
</script> 
<script type="text/javascript">
 
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
 
      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.GUJARATI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
 
        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);
 
        // Enable transliteration in the editable DIV with id
        // 'transliterateDiv'.
         if($("#ans").length){
            control.makeTransliteratable(['ans']);
        }
		/*if($("#fquestion").length){
            control.makeTransliteratable(['fquestion']);
        }
        if($("#s_pincode").length){
            control.makeTransliteratable(['s_pincode']);
        }
        if($("#s_phoneno").length){
            control.makeTransliteratable(['s_phoneno']);
        }
        if($("#s_username").length){
            control.makeTransliteratable(['s_username']);
        }*/
       
      }
      google.setOnLoadCallback(onLoad);
    </script>
<form  action="add_answer.php" method="post">
	
<?php
//include "webpage_header.php";
include "connection.php";
	//session_start();
    $qid=$_GET["qid"];

	$_SESSION["qid"]=$qid;

	$qry="select * from faq where q_id='".$_GET["qid"]."'";

	$suc=mysql_query($qry);
	//$count=0;
	echo"<table class='fq table table-bordered' style='padding-left:600px;padding-top:200px'>";	
while($row=mysql_fetch_assoc($suc))
			  {
			  	//$count++;
			  	$type=$row["s_type"];
			  	$pnm=$row["p_name"];
				$que=$row["f_question"];
				$qid=$row["q_id"];
				//$img=$im;
				$fid=$row['f_id'];
			  	$a=$row["image"];
			  	//echo $a;
				$im="<img src=$a width='100' height='100' />";
				$aa=$im;
				echo"<tbody>";
				
				//echo"<td>".$ar["type_id"]."</td>";
				echo"<tr><th>પાકનો પ્રકાર</th><td>".$row["s_type"]."</td></tr>";
				echo"<tr><th>પાકનુ નામ</th><td>".$row["p_name"]."</td></tr>";
				echo"<tr><th>પ્રશ્ન</th><td>".$row["f_question"]."</td></tr>";
				echo"<tr><th>ફોટો</th><td>".$im."</td></tr>";
				//echo"<tr><td><th>answer</th></td><td>
				//<input type='text' name='ans'>
				//</td></tr>";
				echo"<tr><th>જવાબ</th>
				<td>
				<input type='text' id='ans' class='form-control' name='ans'>			
				</td></tr>";
				//echo "<td><a href='question_answer.php?qid=".$row["q_id"]."'>જવાબ</a></td>";
				/*echo"<td><a href='deletescientist.php?id=".$ar["s_id"]."'>Reject</a></td>";
				*/
					echo"</tbody>";
				//setcookie('type','".$row["s_type"]."');
			  }

			  echo"</table>";	

?>
	<!--<a href='add_answer.php?type=$type&que=$qid&fid=$fid' class='btn btn-info' role='button'>Ans</a>-->
	
	<button type="submit" name="s1" class="btn btn-info">મોકલો</button>

</form>
	