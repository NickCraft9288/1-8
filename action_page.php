<html>
    <link rel="stylesjeet" href="style.css">
<?php

$a[0] = "rob";
$a[1] = "jan";
$a = array("rob", "jan", "piet");

echo $a[1];



echo '<table border="1" width="200"  >';

foreach($a as $value){
    echo "<tr><td>";
    echo "$value <br>";
    echo "</td> </tr>";
}

echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";







echo "<br>";
/*var_dump($_POST);*/
/*echo "<p>hello world</p>";*/
/*print username*/
/*echo $_POST["fname"];*/
echo "<br>";

echo "<br>";
/*echo $_POST["pwd"];
*/
echo '<table border="1" width="200"  >';

foreach($_POST as $_POST){
    echo "<tr><td>";
    echo "$_POST     <br>";
    echo "</td> </tr>";
}



?>
<br><br><a href="database.php">Database</a>
</html>
