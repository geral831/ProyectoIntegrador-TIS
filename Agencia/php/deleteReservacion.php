<?php
    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $noReservacion = $_POST['noReservacion'];
  

    if(isset($_POST['noReservacion']) && !empty($_POST['noReservacion'])){

        $client = new SoapClient("http://3.87.203.171:9191/crucero.wsdl");

        $parametros = array( "noReservacion"=>$noReservacion);
        $response = $client-> __soapCall("EliminarReservacion", array($parametros));

        echo $response->{'resultadoReservacion'};
        echo'<script type="text/javascript">
            alert("La Reservacion se canceló...");
            window.location.href="../index.html";
            </script>';

    }else{
        //echo "Debe introducir el No. de Reservacion para poder eliminarla";
        echo'<script type="text/javascript">
            alert("Introduce el No. Reservacion");
            window.location.href="../html/EliminarReservacion.html";
            </script>';
    }

   
    
    
   

?>