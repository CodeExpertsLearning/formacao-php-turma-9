<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $imagens = $_FILES['imagens'];
        $pasta = __DIR__ . '/imagens';

        for($i = 0; $i < count($imagens['name']); $i++)
        {
            if(!is_dir($pasta)) {
                mkdir($pasta);
            }    

            $imagemTemp = $imagens['tmp_name'][$i];
            $nomeImagem = $imagens['name'][$i];

            $ext = strrchr($nomeImagem, '.');
            $novoNome   = md5($nomeImagem . uniqid()) . $ext;

            if(move_uploaded_file($imagemTemp, $pasta . '/' . $novoNome)) 
            {

                print $imagens['name'][$i] . '<br>';
            }
        }

        die;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload de Arquivos</title>
    </head>
    <body>

        <form action="" method="post" enctype="multipart/form-data">
            
            <p>
                <label>Upload de arquivos</label>
                <input type="file" name="imagens[]" multiple>
            </p>

            <button type="submit">Enviar Arquivo</button>

        </form>

    </body>
</html>