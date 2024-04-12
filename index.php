<?php


// Realice la implementación de la clase Viaje e implemente los métodos
// necesarios para modificar los atributos de dicha clase (incluso los datos
// de los pasajeros).
// Utilice clases y arreglos  para   almacenar la información
// correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”,
// “apellido” y “numero de documento”.

class Viaje
{
    private $codigo;
    private $destino;
    private $cantidadMaxPasajeros;
    private $pasajeros;
    // private $pasajeros2;

    public function __construct($codigo, $destino, $cantidadMaxPasajeros) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMaxPasajeros = $cantidadMaxPasajeros;
        $this->pasajeros = array("Nombre" => "Carlos", "Apellido" => "Hernandez", "DNI" => 36); // array unico
        // $this->pasajeros = array(
        //     array("Nombre" => "Carlos", "Apellido" => "Hernandez", "DNI" => 36),
        //     array("Nombre" => "Juan", "Apellido" => "Perez", "DNI" => 40),
        // );
        // $this->pasajeros2 = $arrayPasajeros;

        
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function getMaxCantidadPasajeros()
    {
        return $this->cantidadMaxPasajeros;
    }

    public function getPasajeros()
    {

        // para leer un solo array asociativo
        foreach ($this->pasajeros as $key => $value) {
            echo " " . $key . ": " . $value;
        }

    }

    //mostrar un array de arrays

    public function getPasajerosIngresadosPorFuera()
    {

        foreach ($this->pasajeros2 as $array) {

            foreach ($array as $key => $value) {
                echo " " . $key . ": " . $value;
            }
            echo "\n";
        }
    }
    
}

// $array = array(
//     array("Nombre" => "Ezequiel", "Apellido" => "Zeta", "DNI" => 36),
//     array("Nombre" => "Pedro", "Apellido" => "Gomez", "DNI" => 40));
$viaje1 = new Viaje(1,"Buenos Aires", 3);

echo "El codigo del viaje es: ", $viaje1->getCodigo();
echo "\n El destino del viaje es: ", $viaje1->getDestino();
echo "\n La cantidad maxima de pasajeros es: ", $viaje1->getMaxCantidadPasajeros() . "\n";
echo  $viaje1->getPasajeros();
// echo $viaje1->getPasajerosIngresadosPorFuera();



?>