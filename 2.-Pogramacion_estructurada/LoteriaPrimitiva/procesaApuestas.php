<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/boleto.css"/>
        <title>Loteria Primitiva</title>
    </head>
    <body>
        <div id="contenedor">
        <?php
            if(isset($_POST['posicion'])) {
                //Array con los números ganadores
                $ganadora = $_POST['ganadora'];
                //Array con las jugadas
                $boletos = $_POST['posicion'];

                //Números Agraciados
                echo "<h1>Numeros Agraciados: ".implode("-", $ganadora)."</h1>";

                //Creamos los arrays que estan vacios, para no invalidar esa apuesta
                for ($i = 0; $i<4; $i++) {
                    if(!isset($boletos[$i])) {
                        $boletos[$i] = [];
                    }
                }
                ksort($boletos);

                //Información de los boletos
                foreach ($boletos as $key => $apuesta) {
                    $aciertos = 0;
                    echo "<div><h3>Boleto ".($key+1)."</h3>";
                    //Apuestas con de 0 a 6 aciertos
                    if(count($apuesta) <= 6){
                        echo "<p>Has introducido: ".count($apuesta)." numeros</p>";
                        foreach ($ganadora as $numero) {
                            if(array_key_exists($numero, $apuesta)) {
                               $aciertos++;
                           }
                        }
                        echo "<p>Has acertado: $aciertos numeros</p></div>";
                    } else { 
                        echo "<p>Apuesta Invalida - ".count($apuesta)."- son demasiadas apuestas</p></div>";   
                    }
                }
            } else {
                header('Location:localhost:8000');
            }
            ?>
            <form action="index.php" method="get">
                <input type="submit" name="botonenvio" value="Apostar de nuevo"/>
            </form>
        </div>    
    </body>
