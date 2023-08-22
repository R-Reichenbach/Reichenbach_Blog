case 'status':
$id = (int)$id;
$valor - (int)$valor;

Sdados = [
 ‘ativo’ => $valor
];

Scriterio - [
 [‘id’, ‘=’, $id]
];


atualiza(
‘usuario’,
$dados,
$criterio
);

header (*Location: ../usuarios.php');
exit;
break;
case ‘adm’:
$id = (int)$id;
$valor = (int)$valor;

Sdados = [
‘adm' => $valor
];

$criterio - [
 [‘id’, ‘=’, $id
];

atualiza(
‘usuario’,
$dados,
$criterio

);

header ('Location: ../usuarios.php');
exit;

break 
}
header (‘Location: ../index.php');
?>
