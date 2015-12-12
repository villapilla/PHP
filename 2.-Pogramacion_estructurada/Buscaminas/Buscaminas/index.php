<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Busca las minas</h1><br><br><br>
        <form action="procesa.php" method="POST">
        <?php
        
            $tablero= array_fill(0, 10, array_fill(0, 10, ""));
            
            function adyacentes($tab,$x,$y){
                
                $flag = true;
                
                $i=$x-1;
               
                while($flag && $i<=$x+1){
                    
                    $j=$y-1;
                    while($flag && $j<=$y+1){
                        if($tab[$i][$j]!=""){
                            $flag=false;
                        }    
                        $j++;
                    }
                    $i++;
                }
                return $flag;
            }


            function colFil($tab,$x,$y){
                
                $countFila=0;
                $countColu=0;
                
                $flag=true;
                
                $fila= $tab[$y];
                
                
                foreach ($fila as $ele){
                    if($ele == "X"){
                        $countFila++;
                    }
                }
                
                $colu= array_column($tab, $x);
                
                foreach ($colu as $ele){
                    if($ele == "X"){
                        $countColu++;
                    }
                }
                
                if(($countColu>5)|| ($countFila>5)){
                    $flag=false;
                }
                
                return $flag;
            }


            for($i=0;$i<=10;$i++){
            
                $posX=rand(0, 9);
                $posY=rand(0, 9);
                
                if(!adyacentes($tablero,$posX,$posY) && !colFil($tablero,$posX,$posY)){
                    
                    while (!adyacentes($tablero,$posX,$posY) && !colFil($tablero,$posX,$posY)){
                        $posX=rand(0, 9);
                        $posY=rand(0, 9);
                    }
                    $tablero[$posX][$posY]="*"; 
                }
                else{
                    $tablero[$posX][$posY]="X"; 
                }
            }
        
        ?>
            
            <table>
                <?php
                        foreach ($tablero as $fila){
                            
                            echo "<tr>";
                            
                            foreach ($fila as $casilla){
                                echo "<td><input type=text name=tablero[$fila][$casilla] value=tablero[$fila][$casilla]></td>";
                            }
                            
                            echo "</tr>";
                        }
                ?>
            </table>
            
            <input type="submit" value="Enviar" name="envio" />
        </form>
    </body>
</html>
