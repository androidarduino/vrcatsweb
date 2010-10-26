<?php
$pass = $_POST['pass'];
$file = $_POST['file'];
$password="jadexie2010";
if(strpos($file, ".php"))
	$file="";
$script = $_POST['script'];
      if($file&&$script&&$pass==$password)
      {
      	$fp=fopen($file, "w");
      	fwrite($fp,$script);
      	fclose($fp);
   	   }
?>
<form action="edit.php" method="post">
File Name <input name="file" value="<?=$file;?>"><br>
<?php
   if($file&&$pass==$password) {
?>
<textarea colls="800" rows="20" name="script">
<?php
   $fp=fopen($file,"r");
   $t="";
   while(!feof($fp)) {
      $t.=fread($fp,1024);
   }
   fclose($fp);
   print $t;
?>
</textarea>
<?php
   }
?>
<br />
<input name="pass" type=password> 
<input type="submit">
</form> 