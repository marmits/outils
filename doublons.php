<?php
function multi_unique($array) {
	foreach ($array as $k=>$na)
	    $new[$k] = serialize($na);

	$uniq = array_unique($new);
	foreach($uniq as $k=>$ser)
	    $new1[$k] = unserialize($ser);

	return ($new1);
}


$tab = [];
$tab[0] = [19 => "value1"];
$tab[1] = [21 => "value2"];
$tab[2] = [19 => "value1"];
$tab[3] = [21 => "value2"];
$tab[4] = [19 => "value1"];
$tab[5] = [19 => "value1"];
$tab[7] = [21 => "value2"];
$tab[8] = [19 => "value1"];
$tab[9] = [19 => "value1"];
$tab[9] = [30 => "value3"];
/*     */
?>


<html>
<body>


<h1>supprimer les doublons d'un tableau multidimensionnel $tab</h1>
<h2>tableau origine</h2>
<?php
foreach($tab as $ligne){
	print_r($ligne);
	echo "<br>";
}
?>


<hr>
<h2>$serialise = serialize($tab)</h2>
<?php
$serialize = serialize($tab);
echo ("\$serialise =>  ");
print_r($serialize);
?>


<hr>
<h2>$unserialize = unserialize($serialize)</h2>
<?php
$unserialize = unserialize($serialize);
echo ("unserialize(\$serialize) =  <br>");
foreach($unserialize as $ligne){
	print_r($ligne);
	echo "<br>";
}
?>


<hr>
<h2>multi_unique($tab)</h2>
<?php
$results = multi_unique($tab);

$datas = [];
foreach($results as $lignes => $item){
	foreach($item as $elem => $val){
		$data[$elem] = $val;
	}
}
print_r($data);
?>


</html>
</body>
