<div class="contenedor">
    <h2>Ejercicio 7</h2>
    <h4>Calculador de intereses</h4>
    <form action="indexDinamico.php" method="GET">
        <input type="text" name="dinero" placeholder="Ingrese dinero a invertir" required>
        <input type="text" name="porcentaje" placeholder="Ingrese porcentaje mensual" required>
        <input type="submit">
    </form>

    <table>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="GET"
                && isset($_GET['dinero']) && !empty($_GET['dinero'])
                && isset($_GET['porcentaje']) && !empty($_GET['porcentaje'])){
                    //--------------
                    $dinero = (double)$_GET['dinero'];
                    $porcentaje = ((double)$_GET['porcentaje']/100)+1;
                    $total = $dinero*$porcentaje;
                    //echo $total;
                    $inversion = $dinero;
                    ?>
                    <tr>
                    <?php 
                    for($i=1;$i<=12;$i++){
                        echo "<td> Mes: " . $i . "</td>";
                    }
                    ?>
                    </tr>
                    <tr>
                    <?php
                    for($i=0;$i<12;$i++){
                        $inversion=$inversion*$porcentaje;
                        echo "<td>" . round($inversion,2) . "</td>";
                    }
                    ?>
                    </tr>
                    <?php
                }
            ?>
    </table>

</div>