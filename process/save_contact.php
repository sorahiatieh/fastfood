<?php
	$output=array(
		"Status"=>0,
		"Text"=>''
	);

	if(isset(
		$_POST['txtName'],
		$_POST['txtMail'],
		$_POST['txtSelect'],
		$_POST['txtPhone'],
		$_POST['txtmessage']
	))
	{
		$name=$_POST['txtName'];
		$email=$_POST['txtMail'];
		$select=$_POST['txtSelect'];
		$phone=$_POST['txtPhone'];
		$message=$_POST['txtmessage'];

	}

	if($name==''){
		$output['Text']="Input Name!";
		exit(json_encode($output));
	}
	if($email==''){
		$output['Text']="Input Email!";
		exit(json_encode($output));
	}
	if($select==''){
		$output['Text']="select value!";
		exit(json_encode($output));
	}
	if($phone==''){
		$output['Text']="insert phone!";
		exit(json_encode($output));
	}
	if($message==''){
		$output['Text']="Input your message!";
		exit(json_encode($output));
	}


	$output["Status"]=1;
	$output["Text"]="Successful send contact";
?>