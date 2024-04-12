<?php

class Viaje
{
    private $codigo;
    private $destino;
    private $cantidadMaxPasajeros;
    private $pasajeros = array();

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }


    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function getDestino()
    {
        return $this->destino;
    }


    public function setCantidadPasajeros($cantidadPasajeros)
    {
        $this->cantidadMaxPasajeros = $cantidadPasajeros;
    }

    public function getMaxCantidadPasajeros()
    {
        return $this->cantidadMaxPasajeros;
    }


    public function addPasajeros($pasajero)
    {
        array_push($this->pasajeros,$pasajero);
        var_dump($this->pasajeros);
    }

    public function buscaPasajero($dni)
    {
        foreach ($this->pasajeros as $pasajero) {
            if($pasajero->getDni() == $dni)
            {
                return $pasajero;
            }
        }
    }


    public function getPasajeros()
    {
        foreach ($this->pasajeros as $pasajero) {
           echo "Nombre: ". $pasajero->getNombre() . "\n";
           echo "Apellido: ". $pasajero->getApellido(). "\n";
           echo "Dni: ". $pasajero->getDni(). "\n";
           echo "Telefono: ". $pasajero->getTelefono(). "\n";

           echo "\n";
        }
       
    }
    
}

?>