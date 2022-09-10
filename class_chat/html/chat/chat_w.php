<h1>成功！</h1>

<?php
    
    date_default_timezone_set('PRC');
    $file = fopen("../../data/chat.txt","a");
	fwrite($file,"<br><p class='timeprint'><span class ='timein'>[");
	fwrite($file,date("Y-m-d H:i:s"));
	fwrite($file,"]</span></p>\n<p>");
	fwrite($file,"<span class='name'>".$_POST["fname"]."</span>"."<br>");
	
	
	fwrite($file,$_POST["says"]);
	fwrite($file,"</p>\n");
	fclose($file);
?>
<script>
window.location.replace("chat.html");
</script>
