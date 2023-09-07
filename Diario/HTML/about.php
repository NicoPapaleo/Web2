<?php 
require_once 'db_devs.php'; 



function showAbout($id = null){
    require_once 'TEMPLATES/header.php'; ?>

    <main class="container mt-5">
        <?php 
            //obtengo el arreglo de developers
            $developers = getDevelopers();
        ?>

        <h1>About</h1>

        <div class="row">
            <div class="col">
                <div class="list-group">
                    <?php foreach ($developers as $developer) { ?>
                        <a class="list-group-item list-group-item-action" href="about/<?php echo $developer->id?>">
                            <?php echo $developer->name?>
                        </a>
                    <?php }?>
                </div>
            </div>

            <div class="col">
                <?php
                if(!empty($id)){
                    $developer = getDeveloperById($id);
                ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $developer->name ?></h5>
                        <h5 class="card-subtitle"><?php echo $developer->role ?></h5>
                        <p><?php echo $developer->email ?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>


    </main>
    <?php require_once 'TEMPLATES/footer.php'; 
}