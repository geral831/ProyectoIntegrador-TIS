<?php
    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $noReservacion = $_POST['noReservacion'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $nombreRuta = $_POST['nombreRuta'];
    $fechaSalida = $_POST['fechaSalida'];
    $horaSalida = $_POST['horaSalida'];
    $costo = $_POST['costo'];

    if(isset($_POST['noReservacion']) && !empty($_POST['noReservacion'])){

        $client = new SoapClient("http://3.87.203.171:9191/crucero.wsdl");

        $parametros = array( "noReservacion"=>$noReservacion, "nombreUsuario"=>$nombreUsuario, "nombreRuta"=>$nombreRuta, 
        "fechaSalida"=>$fechaSalida, "horaSalida"=>$horaSalida, "costo"=>$costo );
        $response = $client-> __soapCall("Reservacion", array($parametros));

        //echo $response->{'resultadoReservacion'};
        echo'<script type="text/javascript">
        alert("La Reservacion se ha Registrado...");
        window.location.href="../html/RealizarPago.html";
        </script>';

    
    }else{
        //echo "No debe dejar el No. Reservacion vacio";
        echo'<script>alert("No debe dejar el No. Reservacion vacio");
        window.location.href="../html/Crucero.html";
        </script>';
    }
   

?>