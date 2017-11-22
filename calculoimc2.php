<?php 

    $peso   = $_POST['pesoimc'];
    $altura = $_POST['alturaimc'];
    $imc = round( ( $peso / pow($altura, 2) ), 2 );

    echo "Seu IMC é: <strong>" . $imc . "</strong>";

    if( $imc < 16.9 ) {
        echo "<br/>";
        echo "Classificação: <strong>Muito abaixo do peso</strong>.";
    } elseif ( $imc >= 17 && $imc < 18.4 ) {
        echo "<br/>";
        echo "Classificação: <strong>Abaixo do peso</strong>.";
    } elseif ( $imc >= 18.5 && $imc < 24.9 ) {
        echo "<br/>";
        echo "Classificação: <strong>Peso normal</strong>.";
    } elseif ( $imc >= 25 && $imc < 29.9 ) {
        echo "<br/>";
        echo "Classificação: <strong>Acima do peso</strong>.";
    } elseif ( $imc >= 30 && $imc < 34.9 ) {
        echo "<br/>";
        echo "Classificação: <strong>Obesidade Grau I</strong>.";
    } elseif ( $imc >= 35 && $imc < 40 ) {
        echo "<br/>";
        echo "Classificação: <strong>Obesidade Grau II</strong>.";
    } else {
        echo "<br/>";
        echo "Classificação: <strong>Obesidade Grau III</strong>.";
    }



 ?>