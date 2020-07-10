<?php


    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $nombre = $_POST['nombre'];
    $destino = $_POST['destino'];
    $avion = $_POST['avion'];
    $sala = $_POST['sala'];
    $asiento = $_POST['asiento'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $costo = $_POST['costo'];


    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {

        $client = new SoapClient("http://54.90.84.87:8080/ws/aeropuerto.wsdl");

        $parametros = array( "nombre"=>$nombre, "destino"=>$destino,,"costo"=>$costo,
        "sala"=>$sala,"asiento"=>$asiento,"fecha"=>$fecha, "avion"=>$avion, "hora"=>$hora);
        $response = $client-> __soapCall("updPasajero", array($parametros));

        //echo $response->{'datos'};
        echo"<script>alert('" .$response->{'datos'}."');
        window.location.href='../index.html';
        </script>";

    }else{
        echo'<script>alert("No dejes campos vacios");
        window.location.href="../html/updPasajero.html";
        </script>';
    }

   
    
    
    
   

?>