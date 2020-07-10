<?php
    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $noReservacion = $_POST['noReservacion'];
  
    $nombreRuta = $_POST['nombreRuta'];
    $fechaSalida = $_POST['fechaSalida'];
    $horaSalida = $_POST['horaSalida'];
    
    if(isset($_POST['noReservacion']) && !empty($_POST['noReservacion'])){

        $client = new SoapClient("http://3.87.203.171:9191/crucero.wsdl");

        $parametros = array( "noReservacion"=>$noReservacion,  "nombreRuta"=>$nombreRuta, 
        "fechaSalida"=>$fechaSalida, "horaSalida"=>$horaSalida);
        $response = $client-> __soapCall("EditarReservacion", array($parametros));

        //echo $response->{'resultadoReservacion'};
        echo'<script type="text/javascript">
            alert("La Reservacion se actualizó...");
            window.location.href="../index.html";
            </script>';

    }else{
        //echo "Introduce tu No. de reservacion para hacer la actualizacion";
        echo'<script type="text/javascript">
            alert("Introduce tu No. de reservacion para hacer la actualizacion"");
            window.location.href="../html/EditarReservacion.html";
            </script>';
    }


?>