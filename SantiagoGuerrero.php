<!DOCTYPE html>
<html>
<body>

<?php

Class Basketbolista{

// atributos
var $Tenis;
var $Medias;
var $Balon;
var $Cancha;

//constructor
function Basketbolista($TNS, $MDS,$BLN,$Cancha){
  $this-> Tenis=$TNS;
  $this-> Medias=$MDS;
  $this-> Balon=$BLN;
  $this-> Cancha=$Cancha;
 }

//Metodo

function Puntos(){
$PuntosTotal= ($this->Balon*10);
echo "La cantidad total de puntos hechos por su majestad es de: ".$PuntosTotal;
}

function CanchaJuego(){
$PlayGround=($this->Cancha);
echo "La cancha donde se lesionen es".$PlayGround;
}

function TamanoPie(){
$Tamano=($this->Tenis."Con medias de color".$this->Medias);
echo "Sus tennis son talla".$Tamano;
}

}

$objeto1 = new Basketbolista(null,null,10,null);
$objeto1 ->Puntos();

$Obejto2 = new Basketbolista(43,"Azules",2,"Niños");
$Obejto2-> CanchaJuego();
$Obejto2->TamanoPie();


?>
</body>
</html>