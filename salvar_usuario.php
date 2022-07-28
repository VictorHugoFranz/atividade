<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $aDados = getValoresTela();
        $sSql = "INSERT INTO usuario (nome, email, senha, idade)
                 VALUE('{$aDados['nome']}','
                        {$aDados['email']}','
                        {$aDados['senha']}','
                        {$aDados['idade']}')";   
        break;
    case 'alterar':
        $aDados = getValoresTela();
        break;
    case 'deletar':
        $aDados = getValoresTela();
        $sSql = "DELETE FROM usuario WHERE '{$aDados['codigo']}'";
        break;
}

/**
 * Busca os valores da tela e coloca num array
 */
function getValoresTela() {
    $aDados = [
        'codigo' => $_POST['codigo'],
        'nome'   => $_POST['nome'],
        'email'  => $_POST['email'],
        'senha'  => $_POST['senha'],
        'idade'  => $_POST['idade']
    ];
    return $aDados;
}