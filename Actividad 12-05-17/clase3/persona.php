<?php
class personas
{
string $nombres;
string $apellidos;
string $sexo;
function setNombre($nombres)
{
$this->nombres = $nombres;
}
function getNombre()
{
return($this->nombres);
}
function setApellido($apellidos)
{
$this->apellidos = $apellidos;
}
function getApellido()
{
return($this->apellidos);
}
function setSexo($sexo)
{
$this->sexo = $sexo;
}
function getSexo()
{
return($this->sexo);
}
}
?>