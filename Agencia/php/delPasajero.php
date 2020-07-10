<?php


    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $id = $_POST['id'];

    if(isset($_POST['id']) && !empty($_POST['id'])){
        $client = new SoapClient("http://54.90.84.87:8080/ws/aeropuerto.wsdl");

        $parametros = array( "idBoleto"=>$id);
        $response = $client-> __soapCall("delPasajero", array($parametros));

        //echo $response->{'datos'};
        echo"<script>alert('" .$response->{'datos'}."');
        window.location.href='../index.html';
        </script>";
    
    }else{
        echo"<script>alert('Ingresa el Nombre del Pasajero');
        window.location.href='../html/delPasajero.html';
        </script>";
    
    }

    
    
    
   

?>