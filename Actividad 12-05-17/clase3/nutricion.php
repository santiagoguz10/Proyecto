<?php
class nutricion
{
var $tituloY2;
var $persona;
function setTituloY2 ($titulos)
{
$this->tituloY2 = $titulos;
}
function getTituloY2 ()
{
return($this->tituloY2);
}
function setPersona($persona)
{
$this->persona = $persona;
}
function getPersona()
{
return($this->persona);
}
}
?>