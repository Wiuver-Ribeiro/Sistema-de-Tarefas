<?php
require_once 'config/database.php';

class TarefaModel
{
    public static function inserir($sigla, $descricao, $dataInicio, $dataFim)
    {
        $conn = getConnection();

        $stmt = $conn->prepare("INSERT INTO tarefas (sigla, descricao, data_inicio, data_fim) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $sigla);
        $stmt->bindParam(2, $descricao);
        $stmt->bindParam(3, $dataInicio);
        $stmt->bindParam(4, $dataFim);
        $stmt->execute();

        $conn = null;
    }

    public static function listar()
    {
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM tarefas ORDER BY data_fim DESC");
        $stmt->execute();
        $result = $stmt->fetchAll();

        $conn = null;

        return $result;
    }
}
