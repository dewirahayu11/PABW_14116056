<h1>Mengurutkan data Ascending</h1>
<?php
$kata=array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
sort($kata);

$clength=count($kata);
for($x=0;$x<$clength;$x++)
   {
   echo $kata[$x];
   echo "<br>";
   }
?>