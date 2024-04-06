<!DOCTYPE html>
<html>
<body>

<?php

class ArbolDeNavidad{

    // atributos
    var $Estrella;
    var $Esferas;
    var $Ramas;
    var $Tronco;

    //constructor
    function ArbolDeNavidad($Est,$Esf,$R,$T){
        $this->Estrella = $Est;
        $this->Esferas = $Esf;
        $this->Ramas = $R;
        $this->Tronco = $T; 
    }

    // Metodo para describir el arbol 
    function DescripcionArbol(){
        echo "El arbol de navidad tiene: ".$this->Estrella.$this->Esferas.$this->Ramas.$this->Tronco;
    }

    // Metodo para agregar una nueva esfera al árbol
    function AgregarEsfera($nuevaEsfera){
        $this->Esferas .= $nuevaEsfera;
    }

    // Metodo para contar el total de esferas en el árbol
    function ContarEsferas(){
        // Contamos las esferas separadas por el espacio
        $esferasSeparadas = explode(" ", $this->Esferas);
        return count($esferasSeparadas);
    }
}


$objeto = new ArbolDeNavidad("Estrella ", "Esferas ", "Ramas ", "Tronco ");
$objeto->DescripcionArbol();

// Llamar al método para agregar una nueva esfera
$objeto->AgregarEsfera("NuevaEsfera ");

// Llamar al método para contar el total de esferas
$totalEsferas = $objeto->ContarEsferas();
echo "<br>Total de esferas: " . $totalEsferas;

?>
</body>
</html>