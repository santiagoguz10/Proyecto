<?php
$estudiante = new persona(); //Definicion de una persona como estudiante
$grafico1 = new nutricion(); //Se define un grafico de nutricion
$grafico1->setPersona($estudiante); //Se define el objeto estudiante en una propiedad de la clase
$estudiante->setSexo(‘F’); //Se define el sexo del estidiante desde la clase estudiante
echo $estudiante->getSexo(); //Se obtiene el sexo del estudiante desde el objeto estudiante
echo "<br>";
echo $grafico1->persona->getSexo();
?>