<?php
require_once 'db_noticia.php';

function showNoticias(){
    require_once 'TEMPLATES/header.php';
    ?>
    <main class="container mt-5">
    <?php
    $noticias = getNoticias();
    ?>

        <section class="noticias">
            <?php foreach($noticias as $key => $noticia){?>
            <div class="card">
                <p class="m-5"><?php echo $noticia->imagen ?></p>
                <div class="card-body">
                    <h2 class="card-title"><?php echo $noticia->titulo ?></h2>
                    <p class="card-text"><?php echo $noticia->contenido ?></p>
                    <a href="noticia/<?php echo $key ?>" class="btn btn-outline-primary">Leer más...</a>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>
<?php require_once 'TEMPLATES/footer.php' ?>
<?php
}

function showNoticiasById($id){
    require_once 'TEMPLATES/header.php'; 
    $noticia = getNoticiaByID($id);
    ?>
    <main class="container mt-5">
        <div class="card">
            <p class="m-5"><?php echo $noticia->imagen ?></p>
            <div class="card-body">
                <h2 class="card-title"><?php echo $noticia->titulo ?></h2>
                <p class="card-text"><?php echo $noticia->contenido ?></p>
        </div>
    </div>
    </main>
    <?php require_once 'TEMPLATES/footer.php';
}

function show404(){
    require_once 'TEMPLATES/header.php'; 
    echo "<h1 class='text-center mt-5 mb-5'>Error - 404</h1>";
    require_once 'TEMPLATES/footer.php';
}
?>