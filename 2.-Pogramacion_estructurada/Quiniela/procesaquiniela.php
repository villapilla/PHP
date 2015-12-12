<?php

    function meteGoles($partido) {
        $golL = rand(0, 5);
        $golV = rand(0, 5);
        $res = "";

        if ($golL > $golV) {
            $res = "1";
        } else if ($golL < $golV) {
            $res = "2";
        } else {
            $res = "X";
        }
        return $res;
    }


    if(!isset($_POST['botonenvio'])) {
        header("Location: /");
    } else {
        $resultados = $_POST['res'];
        $equipos = $_POST['equipos'];
        $aciertos = 0;
        $resultadosReales = [];
        
        foreach ($resultados as $numPartido => $res) {
            $resultadoFinal = meteGoles($numPartido);
            if($resultadoFinal === $res) {
                $aciertos++;
            }
            $resultadosReales[$numPartido] = $resultadoFinal;
        }
        
        include "vistas/resultado.php";
    }
?>