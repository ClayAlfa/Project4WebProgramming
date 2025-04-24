
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("file.txt", "r") or die("Tidak dapat membuka file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</body>
</html>
