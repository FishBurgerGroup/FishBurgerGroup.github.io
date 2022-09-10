
<?php
		
	$user["lijun"]="123456";
	$user["Leo"]="080707";
	$user["Guest"]="hello";
	
	if($user[$_POST["fname"]] == $_POST["fpas"]){
		echo  "<h1> Welcome to here!</h1>";
	}	
	else{
		echo "<script>alert('用户或密码错误')</script>";
		Header("Location:login.html?ErrorCode=1");
	}	

?>