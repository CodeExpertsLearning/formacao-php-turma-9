<?php 
    $helloWorld = 'Hello World';

    $postagens = [
        [
            'titulo' => 'Titulo: ',
            'conteudo' => '<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis asperiores earum veniam sequi tempora mollitia maiores quia! Voluptas quod, veritatis tenetur, aliquid quam qui dolore, atque corporis eligendi saepe dolorem.</p>'
        ],
        [
            'titulo' => 'Titulo: ',
            'conteudo' => '<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis asperiores earum veniam sequi tempora mollitia maiores quia! Voluptas quod, veritatis tenetur, aliquid quam qui dolore, atque corporis eligendi saepe dolorem.</p>'
        ],
        [
            'titulo' => 'Titulo: ',
            'conteudo' => '<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis asperiores earum veniam sequi tempora mollitia maiores quia! Voluptas quod, veritatis tenetur, aliquid quam qui dolore, atque corporis eligendi saepe dolorem.</p>'
        ],
    ];
?>
<html>
    <head></head>
    <body>
        <h1><?=$helloWorld;?></h1>
        <!-- -->
        <?php foreach($postagens as $key => $p): ?>
            <h2><?=$p['titulo'];?> <?=$key;?></h2>
            <?=$p['conteudo'];?>
        <?php endforeach; ?>
    </body>
</html>