
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("file.txt", "r") or die("Tidak dapat membuka file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
?>

</body>
</html>
