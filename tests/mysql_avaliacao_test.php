<?php
require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_avaliacao('Rafael', 'r.reichenbach@aluno.ifsp.edu.br', 'ratin1234');
update_avaliacao(20, 'maia', 'maia@gmail.com');
delete_avaliacao();
busca_avaliacao();

//Teste inserção banco de dados
function insert_avaliacao($nota, $comentario, $usuario_id, $post_id, $data_criacao): void{

    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id,
     'post_id' => $post_id, 'data_criacao' => $data_criacao]; 
    insere ('usuario_id', $dados);
}

//Teste select banco de dados
function update_avaliacao(): void{
    $usuarios = buscar('usuario_id',['id', 'nota', 'comentario',
     'usuario_id', 'post_id', 'data_criacao'], [], '');
    print_r($usuarios);
}

//Teste delete banco de dados

function delete_avaliacao($id, $nota, $comentario, $usuario_id, $post_id, $data_criacao): void{

    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id,
     'post_id' => $post_id, 'data_criacao' => $data_criacao]; 
    $criterio = [['id', '=', $id]];
    deleta('usuario', $dados, $criterio);
}

//Teste busca banco de dados

function busca_avaliacao($id, $nota, $comentario, $usuario_id, $post_id, $data_criacao): void{

    function buscar_teste(): void{
        $usuarios = buscar('usuario',['id', 'nome', 'email'], [], '');
        print_r($usuarios);
    }
}

?>