<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criar nova tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container border p-4 mt-4 rounded">
        <h1 class="text-center">Criar Nova Tarefa</h1>
        <form action="index.php" method="post">
            <div class="row mb-3">
                <label for="sigla"><strong>Sigla:</strong></label>
                <input class="form-control" type="text" name="sigla" id="sigla">
            </div>
            <div class="row mb-3">
                <label for="descricao"><strong>Descrição:</strong></label>
                <textarea class="form-control" name="descricao" id="descricao"></textarea>
            </div>
            <div class="row mb-3">
                <label for="data_inicio"><strong>Data de início:</strong></label>
                <input class="form-control" type="date" name="data_inicio" id="data_inicio">
            </div>
            <div class="row mb-3">
                <label for="data_fim"><strong>Data de fim:</strong></label>
                <input class="form-control" type="date" name="data_fim" id="data_fim">
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
            <a class="btn btn-primary" href="index.php">Voltar para Listagem</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>