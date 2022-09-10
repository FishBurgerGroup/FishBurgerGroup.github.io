
<?php
		
	$user["lijun"]="123456";
	$user["Leo"]="080707";
	$user["Guest"]="hello";
	
	if($user[$_POST["fname"]] == $_POST["fpas"]){
		Header("CFRCCAindex.html"); 
	}	
	else{
		echo "<script>alert('用户和密码错误')</script>";
		Header("Location:login.html");
	}	

?>