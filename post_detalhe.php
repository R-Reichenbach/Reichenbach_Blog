<?php
// Including necessary files and initializing variables
require_once 'includes/funcoes.php';
require_once 'core/conexao_mysql.php';
require_once 'core/sql.php';
require_once 'core/mysql.php';

// Looping through parameters from the URL
foreach ($_GET as $indice => $dado) {
    $$indice = limparDados($dado); // Cleaning and assigning data to variables
}

// Querying the database to retrieve post details
$posts = buscar(
    'post',
    [
        'titulo',
        'data_postagem',
        'texto',
        '(SELECT nome
            FROM usuario
            WHERE usuario.id = post.usuario_id) AS nome',
    ],
    [
        ['id', '=', $post],
    ]
);

// Extracting data for the displayed post
$post = $posts[0];
$data_post = date_create($post['data_postagem']);
$data_post = date_format($data_post, 'Y/m/d H:i:s');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $post['titulo']; ?></title>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Creating a container for the page content -->
    <div class="container">
        <!-- Header section -->
        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/topo.php'; ?> <!-- Including header content -->
            </div>
        </div>

        <!-- Main content section -->
        <div class="row" style="min-height: 500px;">
            <div class="col-md-12">
                <?php include 'includes/menu.php'; ?> <!-- Including navigation menu -->
            </div>
            <div class="col-md-10" style="padding-top: 50px;">
                <div class="card-body">
                    <!-- Displaying post title -->
                    <h5 class="card-title"><?php echo $post['titulo']; ?></h5>
                    <!-- Displaying post date and author -->
                    <h5 class="card-subtitle mb-2 text-muted">
                        <?php echo $data_post; ?> Por <?php echo $post['nome']; ?>
                    </h5>
                    <!-- Displaying post text -->
                    <div class="card-text">
                        <?php echo html_entity_decode($post['texto']); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer section -->
        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/rodape.php'; ?> <!-- Including footer content -->
            </div>
        </div>
    </div>
    <!-- Including Bootstrap JavaScript library -->
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>
</html>