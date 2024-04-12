<?php

//include "viaje2.php"; //incluye el archivo y si no encuentra el archivo es que te tira una advertencia y el programa sigue corriendo


require "viaje2.php"; //incluye el archivo y si no encuentra el archivo te tira un error y se detiene el programa
require "pasajero.php";

$exit = false;
$exitEdicion = false;
$exitEditarPasajero = false;
$viaje = new Viaje;


do {

    echo "### Menu ###" . "\n";
    echo "1- Agregar datos del viaje" . "\n";
    echo "2- Modificar los datos del viaje" . "\n";
    echo "3- Mostrar la informacion del viaje" . "\n";
    echo "4- Salir" . "\n";
    
    echo "ingresa una opcion: ";
    $opcion = trim(fgets(STDIN));
    
        switch ($opcion) {
            case '1':
                echo "### Agrega los datos del viaje ###" . "\n"."\n";;
                
    
                echo "Agrega el codigo de viaje: " . "\n";
    
                $codigoViaje = trim(fgets(STDIN));
                $codigoViaje += 0;
                $viaje->setCodigo($codigoViaje);
        
                echo "Agrega el destino de viaje: " . "\n";
    
                $destino = trim(fgets(STDIN));
                $viaje->setDestino($destino);
    
                echo "Agrega la cantidad maxima de pasajeros: " . "\n";
                
                $maxCantidadPasajeros = trim(fgets(STDIN));
                $maxCantidadPasajeros += 0;
                $viaje->setCantidadPasajeros($maxCantidadPasajeros);
                
                $pasajerosCargados = false;
                do {
                echo "¿Cuantos pasajeros quieres ingresar?";
                $cantPasajeros = readline();
                $cantPasajeros += 0;
                var_dump($cantPasajeros);

                if($cantPasajeros > $viaje->getMaxCantidadPasajeros())
                {
                    echo "La cantidad solicitada para ingresar excede los limites del viaje. Vuelve a ingresar un valor";
                }else{
                    $contador = 0;
                    while($contador < $cantPasajeros)
                    {
                        echo "Agrega los datos del pasajero: " . "\n" . "\n";


                        echo "Nombre del pasajero: ";
                        $nombrePasajero = readline();

                        echo "Apellido del pasajero: ";
                        $apellidoPasajero = readline();


                        echo "Dni del pasajero: ";
                        $dniPasajero = readline();

                        echo "Telefono del pasajero: ";
                        $telefonoPasajero = readline();


                        $pasajero = new Pasajero($nombrePasajero,$apellidoPasajero,$dniPasajero,$telefonoPasajero);
                        $viaje->addPasajeros($pasajero);
                        echo "Pasajeros agregados" . "\n";
                        $contador++;
                    }

                    $pasajerosCargados = true;
                }

                } while (!$pasajerosCargados);

                break;
            case '2':

                do {
                echo "### Selecciona que quieres modificar #### " . "\n" . "\n";;
                echo "1- Modificar el codigo de viaje". "\n";
                echo "2- Modificar el destino". "\n";
                echo "3- Modificar la cantidad maxima de pasajeros de pasajeros". "\n";
                echo "4- Modificar los datos de un pasajero". "\n";
                echo "5- Salir de la edicion". "\n";

                $opcionModificar = readline();

                switch ($opcionModificar) {
                    case '1':
                        echo "1- Ingresa un nuevo codigo de viaje";

                        $nuevoCodigo = readline();
                        $nuevoCodigo += 0;
        
                        $viaje->setCodigo($nuevoCodigo);
                        break;

                    case '2':
                        
                        echo "2- Modifica el destino";
                        $nuevoDestino = readline();
                        $viaje->setDestino($nuevoDestino);
                         break;

                    case '3':
                        
                        echo "Modificar la cantidad maxima de pasajeros de pasajeros";
                        $nuevoMaximo = readline();
                        $viaje->setDestino($nuevoMaximo);
                        break;

                    case '4':
                        echo "4- Modificar los datos de un pasajero";

                        echo "ingresa el dni del pasajero a cambiar los datos: ". "\n";
                        $dni = readline();
                        $pasajero = $viaje->buscaPasajero($dni);
                        if($pasajero)
                        {
                            do {
                                echo "Seleccione que desea cambiar del pasajero: ". "\n";

                                echo "1- Cambiar nombre: ". "\n";
                                echo "2- Cambiar apellido: " . "\n";
                                echo "3- Cambiar Dni: " . "\n";
                                echo "4- Cambiar telefono: " . "\n";
                                echo "5- Salir" . "\n";


                                $opcionEditarPasajero = readLine();
    
                                switch ($opcionEditarPasajero) {
                                    case '1':
                                        echo "Ingreese un nuevo nombre para el pasajero: ". "\n";
                                        $nuevoNombre = readline(); 
                                        $pasajero->setNombre($nuevoNombre);
                                        echo "El nombre ha sido cambiado" . "\n";
                                        break;
                                    case '2':
                                        echo "Ingreese un nuevo apellido para el pasajero: ". "\n";
                                        $nuevoApellido = readline(); 
                                        $pasajero->setApellido($nuevoApellido);
                                        echo "El apellido ha sido cambiado" . "\n";
                                        break;
                                    case '3':
                                        echo "Ingrese un nuevo dni para el pasajero: ". "\n";
                                        $nuevoDni = readline(); 
                                        $pasajero->setDni($nuevoDni);
                                        echo "El dni ha sido cambiado" . "\n";
                                        break;
                                    case '4':
                                        echo "Ingrese un nuevo telefono para el pasajero: ". "\n";
                                        $nuevoTelefono = readline(); 
                                        $pasajero->setTelefono($nuevoTelefono);
                                        echo "El telefono ha sido cambiado" . "\n";
                                        break;
                                    case '5':
                                        echo "saliendo de la edicion de pasajeros";
                                        $exitEditarPasajero = true;
                                    default:
                                        echo "opcion no valida";
                                        break;
                                }
                            } while (!$exitEditarPasajero);
                            
                        }else{
                            echo "El dni no coincide";
                        }



                        break;
                    case '5':
                        echo "Saliendo de la edicion...";
                        $exitEdicion = true;
                        break;
                    default:
                        echo "Opcion no valida";
                        break;
                }
                } while (!$exitEdicion);
                break;
            case '3':
        
                echo "\n" . "\n" . "### Los datos del viaje son ###" . "\n" . "\n";
                echo "El codigo del viaje es: ", $viaje->getCodigo();
                echo "\n El destino del viaje es: ", $viaje->getDestino();
                echo "\n La cantidad maxima de pasajeros es: ", $viaje->getMaxCantidadPasajeros() . "\n";
                echo "Los pasajeros del viaje son: " . "\n"; 
                $viaje->getPasajeros();
                break;
            case '4':
                echo "Saliendo...";
                $exit = true;
                break;
            default:
                echo "opcion no valida";
        }
    } while (!$exit);
    

?>