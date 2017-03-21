<?PHP 
echo "Hola Mundo"."<br>";


// ej. 6
// 1_constructor
//2_[0]
//3_Push()


$Array = array(
    rand(0,100),
    rand(0,100),
    rand(0,100),
    rand(0,100),
    rand(0,100),
);

$Sumador;

for ($i=0 ; $i < count($Array) ; $i++)  { 
    
    $Sumador =+ $Array[$i]; 
}

$Promedio = $Sumador / count($Array); 
echo "Suma de Arrays: ".$Sumador."<br>";
echo "Promedio de Arrays: ".$Promedio."<br>";



if($Promedio > 6)
{ echo "El promedio es mayor a 6 : ".$Promedio. "<br>";}
if($Promedio < 6)
{echo "El promedio es menor a 6 : ".$Promedio. "<br>";}
if($Promedio == 6)
{echo "El promedio es igual a 6 : ".$Promedio. "<br>";}


/*
switch($Promedio)
{ case $Promedio > 6:
        echo "El promedio es mayor a 6 : ".$Promedio. "<br>";
        break;
  case $Promedio < 6:
        echo "El promedio es menor a 6 : ".$Promedio. "<br>";
        break;      
  case $Promedio == 6:
        echo "El promedio es igual a 6 : ".$Promedio. "<br>";
        break;
}


var_dump($Array);

*/
?>