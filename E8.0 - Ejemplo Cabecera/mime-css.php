<!-- <p><img src="svg-con-mime.php" alt="ERROR No puedo mostrar la
imagen"></p> -->

<?php
header("Content-type: image/svg+xml");
$c1 = rand(0, 255);
$c2 = rand(0, 255);
$c3 = rand(0, 255);
print "<svg version=\"1.1\"
xmlns=\"http://www.w3.org/2000/svg\" "   . "    width=\"100\"
height=\"100\" viewBox=\"-5 -5 100 100\">";
print " <rect fill=\"rgb($c1, $c2, $c3)\" x=\"0\" y=\"0\"
width=\"90\" height=\"90\" />";
print "</svg>";
?>
