<!DOCTYPE html>
<html>
<body>

<?php

class Planeta {
    
    // Atributos
    var $anillos;
    var $cohete;
    var $nubes;
    var $estrellas;

    // Constructor
    function Planeta($anillos, $cohete, $nubes, $estrellas){
        $this->anillos = $anillos;
        $this->cohete = $cohete;
        $this->nubes = $nubes;
        $this->estrellas = $estrellas;
    }

    function DescripcionPlaneta() {
        echo "Atributos del planeta: ".
        $this->anillos.$this->cohete.$this->nubes.$this->estrellas;
    }

    // Métodos
    function AgregarNuevoCohete($nuevoCohete) {
        $this->cohete = $nuevoCohete;
    }

    
    function ContarNubes() {
        
        $nubesSeparadas = explode(" ", $this->nubes);
        return count($nubesSeparadas);
    }
}


$objeto = new Planeta("Anillos- ", "Cohete - ", "Nubes - ", "Estrellas ");
$objeto->DescripcionPlaneta();


$objeto->AgregarNuevoCohete("Nuevo Cohete - ");


$totalNubes = $objeto->ContarNubes();



?>

</body>
</html>