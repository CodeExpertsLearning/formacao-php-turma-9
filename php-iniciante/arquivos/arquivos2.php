<?php 

    $pasta   =  __DIR__ . '/storage';
    $arquivo = $pasta . '/texto.txt';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $texto   = $_POST['texto'] . PHP_EOL;

        if(!is_dir($pasta)) {
            mkdir($pasta);
        } 

        $arquivoF = fopen($arquivo, 'a+');

        fwrite($arquivoF, $texto);

        fclose($arquivoF);
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
                $arquivoF = fopen($arquivo, 'r');
                
                $conteudo = '';

                while(!feof($arquivoF)) {
                    $conteudo .= fgets($arquivoF) . '<br>';
                }

                print $conteudo;

                fclose($arquivoF);
            ?>
        </p>

    </body>
</html>