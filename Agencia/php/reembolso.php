<?php

    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    
    $num_tarjeta = $_POST['num_tarjeta'];
    $pago_por_reservacion = $_POST['pago_por_reservacion'];
    
    if(isset($_POST['num_tarjeta']) && !empty($_POST['num_tarjeta']) ){
        if(isset($_POST['pago_por_reservacion']) && !empty($_POST['pago_por_reservacion'])){

            $client = new SoapClient("http://3.87.203.171:8080/banco.wsdl");

            $parametros = array( "num_tarjeta"=>$num_tarjeta, "pago_por_reservacion"=>$pago_por_reservacion);
            $response = $client-> __soapCall("Reembolso", array($parametros));

            echo $response->{'reembolso_realizado'};

            echo'<script type="text/javascript">
            alert("El reembolso ha sido exitoso...");
            window.location.href="../index.html";
            </script>';

        }else{
            echo'<script type="text/javascript">
            alert("Introduce el monto a pagar ...");
            window.location.href="../html/RealizarReembolso.html";
            </script>';
        }

    }else{
        echo'<script type="text/javascript">
            alert("Introduce el monto a pagar ...");
            window.location.href="../html/RealizarReembolso.html";
            </script>';
    }
    

?>