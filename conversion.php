<?php 


    if(isset($_POST["btncalcular"])){
     require_once 'Moneda.php';

      $objmoneda = new Moneda();
        
        $valor = $_POST["txtvalorpesos"];
        $objmoneda ->setValorpesos($valor);

     //  echo "lo que hay en el atributo de valorpesos es" . 
      // $objmoneda->getValorpesos();
      echo " la conversion de " . $valor. "  es  " .
         $objmoneda->calcularConversion() . " Euros";  

    }else{
        echo "Eres un hacker, he capturado tu ip.";
    }

 


?>