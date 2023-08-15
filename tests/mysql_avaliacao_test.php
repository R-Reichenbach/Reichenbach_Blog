<?php
require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

// Example data
$nota = 5;
$comentario = 'Good';
$usuario_id = 1;
$post_id = 2;
$data_criacao = '2023-08-15';

insert_avaliacao($nota, $comentario, $usuario_id, $post_id, $data_criacao);
update_avaliacao();
delete_avaliacao(1, 'Deleted', 'Rafael', 'r.reichenbach@aluno.ifsp.edu.br', 'ratin1234', '2023-08-15');
busca_avaliacao();

//Teste inserção banco de dados
function insert_avaliacao($nota, $comentario, $usuario_id, $post_id, $data_criacao): void{
    $dados = [
        'nota' => $nota,
        'comentario' => $comentario,
        'usuario_id' => $usuario_id,
        'post_id' => $post_id,
        'data_criacao' => $data_criacao
    ]; 
    insere('avaliacao', $dados); // Assuming 'avaliacao' is the correct table name
}

//Teste select banco de dados
function update_avaliacao(): void{
    $avaliacoes = buscar('avaliacao', ['id', 'nota', 'comentario', 'usuario_id', 'post_id', 'data_criacao'], [], '');
    print_r($avaliacoes);
}

//Teste delete banco de dados
function delete_avaliacao($id, $nota, $comentario, $usuario_id, $post_id, $data_criacao): void{
    $dados = [
        'nota' => $nota,
        'comentario' => $comentario,
        'usuario_id' => $usuario_id,
        'post_id' => $post_id,
        'data_criacao' => $data_criacao
    ]; 
    $criterio = [['id', '=', $id]];
    deleta('avaliacao', $dados, $criterio); // Assuming 'avaliacao' is the correct table name
}

//Teste busca banco de dados
function busca_avaliacao(): void{
    $avaliacoes = buscar('avaliacao', ['id', 'nota', 'comentario', 'usuario_id', 'post_id', 'data_criacao'], [], '');
    print_r($avaliacoes);
}
?>
