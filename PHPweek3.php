<?php
//deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
array_push($myArray, 'scooter', 'jet');
print_r($myArray);
//deel 2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArrayTelling = count($myArray);
echo "Het Array heeft ". $myArrayTelling . " Elementen";
array_push($myArray, 'jet');
echo "<br>";
$myArrayTelling = count($myArray);
echo "Het Array heeft ". $myArrayTelling . " Elementen";
//deel 3
$array = array("foo", "Ik", "hello", "world"); echo $array[1];
$array = array (1,2,"Gideon","Heet",5);
echo $array[3];
$cars = array( "Volvo", "BMW", "Toyota");
echo $array[2];
echo count($cars);
$array = [ "IkBen", 4, 3, 2, 1 ];
echo $array[0];
$numbers [0]="one";
$numbers [1]="two";
$numbers [2]="three";
$numbers [3]="four";
$numbers [4]="Zestien";
echo $numbers [count ($numbers)-1];
// deel 4
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = array_sum($cijfersPHP) / count($cijfersPHP);
$afgerondGemiddelde = round($gemiddelde, 2);
echo "Gemiddelde is: " . $afgerondGemiddelde;
// Deel 4B
// Waarom ik het slimmer vind om de code gewoon zo te houden zonder verandering
// is, als je bijvoorbeeld een nieuwe programmeur bent is het makkelijker
// om de code te begrijpen, Maar als je al geadvanceerd bent en gewoon snel je code wilt typen
// dan is de tweede methode veel beter.
?>

