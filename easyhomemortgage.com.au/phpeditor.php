<?php

$file = $_POST['file'];
$script = $_POST['script'];
      if($file&&$script) {
      $fp=fopen($file, "w");
      fwrite($fp,$script);
      fclose($fp);
   }
?>
<form action="phpeditor.php" method="post">
<input name="file" value="<?=$file;?>">
<br>
<?php
   if($file) {
?>
<textarea colls="80" rows="40" name="script">
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
<input type="submit">
</form> 