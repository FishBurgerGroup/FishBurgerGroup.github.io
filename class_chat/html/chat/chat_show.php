
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="600">
<meta charset="utf-8">
<title>聊天吧！</title>
<!--<script>
function onGetMessage(context) 
{
msg.innerHTML+=context;
msg_end.scrollIntoView(); 
} 
</script>-->
<style>
p.timeprint
	{	
		font-size:50%;
		width:100px;
		height:10px;
		color:white;
		background-color:gray;
		
		border-radius: 5px;
		
		margin-left: 45%;
		padding-left: -50px;
		text-align: center;
	}
	.timein
	{
		margin-top: -5px;
		
	}
	span.name
	{
		color:gray;
		font-size:70%;
	}
</style>
</head>
<body>


<!--<script>
function add()
{
var div = document.getElementById('cshow');

div.scrollTop = div.scrollHeight+100;

}
add();
</script>-->

<?php
echo("<div id='cshow'>");
	echo file_get_contents("../../data/chat.txt");
	echo ("<span id='end'></span>");
echo("</div>");

?>


 





</body>
</html>