<?php


<form action='config.php' method=post> //GETS DATA FROM DATABASE
<select name="SEX">
  <option value=" ">--select--</option>
  <option value="male" <?php if($SEX == "male"){?> selected="selected" <?php }?>>male</option>
  <option value="female" <?php if($SEX == "female"){?> selected="selected" <?php }?>>female</option>
</select>
<input type=submit>
</form>
	
?>