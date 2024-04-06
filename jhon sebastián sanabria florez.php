<?php
class Ciclista {
    // Atributos
    public $nombre;
    public $edad;
    public $genero;
    public $equipo;
    
    // Constructor
    function __construct($nombre, $edad, $genero, $equipo) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
        $this->equipo = $equipo;
    }
    
    // Método para imprimir información del ciclista
    function imprimirInformacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Género: " . $this->genero . "<br>";
        echo "Equipo: " . $this->equipo . "<br>";
    }
    
    // Método para determinar si el ciclista es mayor de edad
    function esMayorEdad() {
        if ($this->edad >= 18) {
            echo $this->nombre . " es mayor de edad.<br>";
        } else {
            echo $this->nombre . " no es mayor de edad.<br>";
        }
    }
    
    // Método para cambiar el equipo del ciclista
    function cambiarEquipo($nuevoEquipo) {
        $this->equipo = $nuevoEquipo;
        echo $this->nombre . " ha cambiado al equipo " . $nuevoEquipo . ".<br>";
    }
}

// Crear objetos
$ciclista1 = new Ciclista("Juan", 25, "Masculino", "Equipo A");
$ciclista2 = new Ciclista("Maria", 22, "Femenino", "Equipo B");

// Imprimir información de los ciclistas
echo "Información del Ciclista 1:<br>";
$ciclista1->imprimirInformacion();
echo "<br>Información del Ciclista 2:<br>";
$ciclista2->imprimirInformacion();

// Verificar si los ciclistas son mayores de edad
$ciclista1->esMayorEdad();
$ciclista2->esMayorEdad();

// Cambiar el equipo del segundo ciclista
$ciclista2->cambiarEquipo("Equipo C");
?>