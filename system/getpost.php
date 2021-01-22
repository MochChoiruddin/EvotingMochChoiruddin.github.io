<?php
$sql=mysql_query("SELECT * FROM post ORDER BY postname ASC") or die(mysql_error());
	echo '<select name="post" id ="post">';
	echo "<option value='$pid'>";
	echo $postname;
	echo '</option>';
	while($row=mysql_fetch_array($sql)){
		$id = $row['id'];
		$postname = $row['postname'];
		echo "<option value= '$id'>$postname</option>";
	}
echo "</select>";
?>
