<?php
require_once 'model/TarefaModel.php';

class TarefaController
{
    public static function exibirFormulario()
    {
        require_once 'view/form.php';
    }

    public static function listar()
    {
        $tarefas = TarefaModel::listar();
        require_once 'view/listar.php';
    }

    public static function salvar()
    {
        $sigla = $_POST['sigla'];
        $descricao = $_POST['descricao'];
        $dataInicio = $_POST['data_inicio'];
        $dataFim = $_POST['data_fim'];

        TarefaModel::inserir($sigla, $descricao, $dataInicio, $dataFim);

        self::listar();
    }
}
