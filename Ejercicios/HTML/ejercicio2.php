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