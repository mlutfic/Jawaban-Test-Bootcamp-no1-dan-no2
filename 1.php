<?php 
	function peserta(){
		if(!isset($obj))
		$obj = new stdClass();
		$obj->name=(string)"Lutfi";
		$obj->age=(int)23;
		$obj->Address=(string)"perum alam tirta lestari";
		$obj->hobbies=(array)"badminton";
		$obj->is_married=(boolean)false;
		$obj->list_school=(array)"Lutfi,2014,2015,ilmukomputasi";
		$obj->interest_in_coding=(boolean)true;
		$object = json_encode($obj);
		return $object;
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>jawban no.1</title>
</head>
<body>

<?php 
	echo peserta();
?>

</body>
</html>