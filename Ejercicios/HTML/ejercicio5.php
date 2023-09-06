<div class="contenedor">
    <h2>Ejercicio 5</h2>
    <h4>Calculador de Indice de Masa Corporal</h4>
    <form action="indexDinamico.php" method="GET">
        <input required type="text" name="altura" placeholder="Altura en CM">
        <input required type="text" name="peso" placeholder="Peso">
        <input required type="submit">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET" 
        && isset($_GET['peso']) && !empty($_GET['peso'])
        && isset($_GET['altura']) && !empty($_GET['altura'])){
        //-------------
            $peso = (double)$_GET["peso"];
            $altura = (double)$_GET["altura"];
            
            $imc = $peso / ($altura * $altura);
            echo "Su IMC es: " . round($imc,4) . " <br> ";
        //-------------
        $diagnostico = "";
        if($imc<18.5)
            $diagnostico = "Bajo peso";
        elseif($imc<=24.99)
            $diagnostico = "Normal";
        elseif($imc<=30)
            $diagnostico = "Sobrepeso";
        else
            $diagnostico = "Obesidad";
        echo "Su diagnostico de IMC es: " . $diagnostico;
        }
    ?>
</div>

