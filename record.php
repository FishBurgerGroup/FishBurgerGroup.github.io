<h1>欢迎登录！</h1>
<style>
body
{
	text-align:center;
}
.inf
{
	font-size:200%;
	color:green;
}
.hidden
{
	display:none;
}
</style>
<meta charset="UTF-8">
<body>

<?php
   $file_users = "data/users/loginsec_toga_user_/".$_POST["fname"].".txt";

if(file_exists($file_users))
{
    if(file_get_contents($file_users)==$_POST["fpas"])
	{
		
	}	
	else
	{
		echo ("
	<script>
	alert('用户名或密码错误');
     window.location = 'loginbad.html';
	 </script>"
	 );
	}
}
else
{
	echo ("
	<script>
	alert('用户名或密码错误');
     window.location = 'loginbad.html';
	 </script>"
	 );
}
    date_default_timezone_set('PRC');
    $file = fopen("data/login_record.txt","a");
	fwrite($file,"<br>[");
	fwrite($file,date("Y-m-d H:i:s"));
	fwrite($file,"]\r\n<p>");
	fwrite($file,"用户：");
	fwrite($file,$_POST["fname"]);
	fwrite($file,"<br>密码：");
	
	fwrite($file,$_POST["fpas"]);
	fwrite($file,"\r\n</p>");
	fclose($file);
	$iden1 = date("YmdHis") ;
	$iden2 = rand(100,999) ;
echo("<hr>登录ID分配:");
	
	
	echo ("<p id='loginid' class='inf'>");echo ($iden1);echo ("-");echo ($_POST["fname"]."-".$iden2);echo ("</p>");
	$file1_0  ="data/users/loginid/";
	$file1_1 =".txt";
	$file1_2=$file1_0.$_POST["fname"].$file1_1;
	$file1 = fopen($file1_2,"w");
	fwrite($file1,$iden1);fwrite($file1,"-");fwrite($file1,$_POST["fname"]."-".$iden2);
	//echo($file1_2);
	echo("用户名:");echo ("<p id='user' class='inf'>");
	echo($_POST["fname"]);echo ("</p>");
	echo("<span clsaa='hidden' id='newf'>".file_get_contents("data/users/logindata/".$_POST["fname"]."/newf.txt")."</span>");
	?>
	<!--echo("密码:");echo ("<p id='sec' class='inf'>");
	echo($_POST["fpas"]);echo ("</p>");-->

<script>
var iden_chart = document.getElementById("loginid");
localStorage["reportid"] = iden_chart.innerHTML;
//document.write(localStorage["reportid"]);
//localStorage.removeItem("reportid");
//	document.write(localStorage["reportid"]);	
var iden_chart_1 = document.getElementById("user");
localStorage["userid"] = iden_chart_1.innerHTML;
var iden_chart_2 = document.getElementById("newf");
localStorage["newf"] = iden_chart_2.innerHTML;

setTimeout(function(){ window.location = "html/chat/chat.html"; }, 2000);

</script>
</body>

