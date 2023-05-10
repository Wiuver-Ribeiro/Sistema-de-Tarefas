<?php
// Inclui o arquivo de controlador
require_once 'controller/TarefaController.php';

// Define as rotas do sistema
function route()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['action']) && $_GET['action'] === 'listar') {
            TarefaController::listar();
        } else {
            TarefaController::exibirFormulario();
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        TarefaController::salvar();
    }
}
