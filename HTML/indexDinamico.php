<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Titulo Pagina</h1>
    </header>
    <div class="contenedor">
        <h2>Ejercicio 2</h2>
        <?php
        $nombres = array("Nico","Pancho","Juan");
        ?>
        
        <ul>
            <?php
                for($i=0 ; $i < count($nombres) ; $i++){
                    echo "<li>  $nombres[$i]  </li>";
                }
            ?>
        </ul>
    </div>

    <div class="contenedor">
        <h2>Ejercicio 3</h2>
        <form action="indexDinamico.php" method="GET">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido">
                <input type="text" name="edad" placeholder="Edad">
                <input type="text" name="altura" placeholder="Altura en CM">
                <input type="text" name="peso" placeholder="Peso">
                <input type="submit">
                <h4>Calculador de Indice de Masa Corporal</h4>
        </form>
            <!-- PHP -->
                <?php
                if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET['peso'])){
                    $nombreForm = $_GET["nombre"];
                    echo $nombreForm . " ";
                    $apellidoForm = $_GET["apellido"];
                    echo $apellidoForm . " ";
                    $edadForm = $_GET["edad"];
                    echo $edadForm . " - ";
                //-------------
                    $peso = (double)$_GET["peso"];
                    $altura = (double)$_GET["altura"];
                    
                    $imc = $peso / ($altura * $altura);
                    echo "Su IMC es: " . round($imc,4) . " - ";
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
            <!-- --- -->
    </div>
</body>
    </html>