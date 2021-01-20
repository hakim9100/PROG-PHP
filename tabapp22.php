<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php

$months  = array (

"janvier" => "01",
"fevrier" => "02",
"mars" => "03",
"avril" => "04",
"mai" => "05",
"juin" => "06",
"juillet" => "07",
"aout" => "08",
"septembre" => "09",
"octobre" => "10",
"novembre" => "11",
"décembre" => "12",

);

echo '<table border="1">';
foreach ($months as $key => $value) {
	echo '<tr>';
	echo '<td>' .$key. '</td>' ;
	echo '<td>' .$value. '</td>';
	echo '</tr>';

}
 echo '</table>';


 ?>

 </body>
</html>