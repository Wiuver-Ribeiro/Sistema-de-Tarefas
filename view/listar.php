<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container border p-4 mt-4 rounded">

    
    <h1 class="text-center">Lista de tarefas</h1>
    <table class="table table-responsive bordered">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Descrição</th>
                <th>Data de início</th>
                <th>Data de fim</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
                <tr>
                    <td><?= $tarefa['sigla'] ?></td>
                    <td><?= $tarefa['descricao'] ?></td>
                    <td><?= $tarefa['data_inicio'] ?></td>
                    <td><?= $tarefa['data_fim'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-success" href="index.php">Nova tarefa</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
