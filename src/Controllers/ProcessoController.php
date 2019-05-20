<?php
require "../Util/FabricaConnection.php";
require "../DAO/ProcessoDAO.php";
require_once "../Models/Processo.php";


$dao = new ProcessoDAO();

$json = (isset($_POST['dados'])) ? $_POST['dados'] : $_GET['dados'];

if($json['tipo'] == 'total')
{
    $valor = $dao->pegaTotal();
    echo json_encode($valor[0]);
}
if($json['tipo'] == 'obter')
{
    $objeto = $dao->obter($json['numero']);
    $jsonResposta = [
        'id' => $objeto['ID'],
        'nome' => $objeto['NOME'],
        'numero' => $objeto['NUMERO'],
        'ef' => $objeto['EF'],
        'data_debito' => $objeto['DATA_DEBITO'],
        'valor_originario' => $objeto['VALOR_ORIGINARIO'],
        'valor_atualizado' => $objeto['VALOR_ATUALIZADO']
    ];
    echo json_encode(utf8_converter($jsonResposta));
}
if($json['tipo'] == 'cadastrar')
{
    $processo = new Processo(
        $json['nome'],
        $json['numero'],
        $json['ef'],
        $json['data_debito'],
        $json['valor_original'],
        $json['valor_atualizado']
    );
    $dao->cadastrar($processo);

}
function utf8_converter($array)
{
    array_walk_recursive($array, 'cv');
    return $array;
}
function cv(&$item, $key)
{
   // $encodeUtf8 = mb_detect_encoding($item, 'utf-8', true);
    $item = utf8_encode($item);
}


?>