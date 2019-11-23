<?php 
//Arrays Superglobais: Pontos de acesso disponiveis
//para toda aplicação, dois deles trazem as informações
//vindas no corpo da requisição: $_GET & $_POST
$dadosDoContato = $_POST;

//var_dump($dadosDoContato);
//print $dadosDoContato['email'];

//Conexão com banco...
//PDO (PHP Data Object)
$conexao = new PDO('mysql:host=localhost;dbname=contatos_nove', 'root', '');


$queryInserirContato = '
    INSERT INTO usuarios(nome, email, celular, criado_em, atualizado_em)
    VALUES(:nome, :email, :celular, NOW(), NOW())
';

//print $conexao->query($queryInserirContato);

//Prepared Statements
$inserir = $conexao->prepare($queryInserirContato);

$inserir->bindValue(':nome', $dadosDoContato['nome'], PDO::PARAM_STR);
$inserir->bindValue(':email', $dadosDoContato['email'], PDO::PARAM_STR);
$inserir->bindValue(':celular', $dadosDoContato['celular'], PDO::PARAM_INT);

$inserir->execute();

$ultimoUsuarioInserido = $conexao->lastInsertId();

//$buscarUsuario = 'SELECT * FROM usuarios';
//$buscarUsuario = 'SELECT * FROM usuarios WHERE id = ' . $ultimoUsuarioInserido;

$buscarUsuario = 'SELECT * FROM usuarios WHERE id = :id';

//$resultadoBuscaUsuario = $conexao->query($buscarUsuario);
$selecionar = $conexao->prepare($buscarUsuario);
$selecionar->bindValue(':id', $ultimoUsuarioInserido, PDO::PARAM_INT);
$selecionar->execute();

//Só um dado retornado você usa o fetch... 
var_dump($selecionar->fetchAll(PDO::FETCH_ASSOC));


$atualizarUsuario = 'UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id';

$atualizar = $conexao->prepare($atualizarUsuario);

$atualizar->bindValue(':nome', 'João', PDO::PARAM_STR);
$atualizar->bindValue(':email', 'outro@email.com', PDO::PARAM_STR);
$atualizar->bindValue(':id', 1, PDO::PARAM_STR);

$atualizar->execute();

//Remover usuário com base no ID...
$removerUsuario = 'DELETE FROM usuarios WHERE id = :id';

$remover = $conexao->prepare($removerUsuario);

$remover->bindValue(':id', 3, PDO::PARAM_INT);

$remover->execute();