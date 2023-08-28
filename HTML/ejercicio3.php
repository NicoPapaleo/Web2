<div class="contenedor">
    <h2>Ejercicio 3</h2>
    <form action="ejercicio3.php" method="GET">
        <input required type="text" name="nombre" placeholder="Nombre">
        <input required type="text" name="apellido" placeholder="Apellido">
        <input required type="text" name="edad" placeholder="Edad">
        <input required type="submit">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET" 
        && isset($_GET['nombre']) && !empty($_GET['nombre'])
        && isset($_GET['apellido']) && !empty($_GET['apellido'])
        && isset($_GET['edad']) && !empty($_GET['edad'])){
            $nombreForm = $_GET["nombre"];
            echo $nombreForm . " ";
            $apellidoForm = $_GET["apellido"];
            echo $apellidoForm . " ";
            $edadForm = $_GET["edad"];
            echo $edadForm . " - ";
        }
    ?>
</div>