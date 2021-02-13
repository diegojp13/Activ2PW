
<?php 
function areaOctagon($side) 
{ 
    return (2 * (1 + sqrt(2)) *  
            $side * $side); 
} 
  
$lados = preg_replace("/[^0-9.]/", '', $_POST["lados"]); 
echo round(areaOctagon($lados), 2);
?>