
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("file.txt", "r") or die("tidak dapat membuka file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

</body>
</html>
