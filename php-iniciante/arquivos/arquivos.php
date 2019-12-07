<?php 

    $pasta   =  __DIR__ . '/storage';
    $arquivo = $pasta . '/texto.txt';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $texto   = $_POST['texto'] . PHP_EOL;

        if(!is_dir($pasta)) {
            mkdir($pasta);
        } 

        file_put_contents($arquivo, $texto, FILE_APPEND);
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Escrevendo em Arquivos</title>
    </head>
    <body>

        <form action="" method="post">
            
            <p>
                <label>Texto</label>
                <input type="text" name="texto">
            </p>

            <button type="submit">Escrever</button>

        </form>

        <p>
            <?php 
                if(file_exists($arquivo)) {
                    $texto = file_get_contents($arquivo);
                    print $texto;
                }
            ?>
        </p>

    </body>
</html>