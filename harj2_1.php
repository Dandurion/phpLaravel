<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Page Title</title>
</head>
<body>

<?php
if (isset($_GET['buttonpress'])){
if(!empty($_GET['operator'])){
	foreach($_GET['operator'] as $selected){
  echo $selected ." ". "ankarasti" . "<br>";
}
}
}


?>


<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
<br>
<input type="checkbox" name="operator[]" value="vasy" <?php if(isset($_GET['operator']) && is_array($_GET['operator']) && in_array('vasy', $_GET['operator'])) echo 'checked="checked"'; ?>> vasy<br>
<input type="checkbox" name="operator[]" value="perjantai" <?php if(isset($_GET['operator']) && is_array($_GET['operator']) && in_array('perjantai', $_GET['operator'])) echo 'checked="checked"'; ?>> perjantai<br>
<input type="checkbox" name="operator[]" value="paa pipi" <?php if(isset($_GET['operator']) && is_array($_GET['operator']) && in_array('paa pipi', $_GET['operator'])) echo 'checked="checked"'; ?>> paa pipi<br>
<input type="submit" name="buttonpress" value="Calculate">
</form>



</body>
</html>




