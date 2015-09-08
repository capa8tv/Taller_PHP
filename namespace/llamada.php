<?php
require_once("clases/persona.php");
use Capa8Tv\Persona as pp;
$p=new pp("Cesar Cancino","yo@cesarcancino.com");
echo $p->getNombre();
