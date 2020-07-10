<?php


    session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
    $nombre_cliente = $_POST['nombre_cliente'];
    $num_tarjeta = $_POST['num_tarjeta'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $codigo_cvc = $_POST['codigo_cvc'];
    $cantidad = $_POST['cantidad'];

    if(isset($_POST['num_tarjeta']) && !empty($_POST['num_tarjeta']) ){
        if(isset($_POST['codigo_cvc']) && !empty($_POST['codigo_cvc'])){

            $client = new SoapClient("http://3.87.203.171:8080/banco.wsdl");

            $parametros = array( "nombre_cliente"=>$nombre_cliente, "num_tarjeta"=>$num_tarjeta, "fecha_vencimiento"=>$fecha_vencimiento, "codigo_cvc"=>$codigo_cvc, "cantidad"=>$cantidad);
            $response = $client-> __soapCall("RealizarCobro", array($parametros));
        
            //echo $response->{'pago_realizado'};
            echo'<script type="text/javascript">
            alert("Tu pago ha sido exitoso...");
            window.location.href="../index.html";
            </script>';
           
        }else{
            echo'<script type="text/javascript">
            alert("Introduce el codigo cvc ...");
            window.location.href="../html/RealizarPago.html";
            </script>';
        }
    }else{
        echo'<script type="text/javascript">
            alert("Introduce el numero de Tarjeta ...");
            window.location.href="../html/RealizarPago.html";
            </script>';
    }

   
    
?>