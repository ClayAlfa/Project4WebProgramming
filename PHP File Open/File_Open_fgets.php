
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("file.txt", "r") or die("Tidak dapat membuka file!");
echo fgets($myfile);
fclose($myfile);
?>

</body>
</html>
