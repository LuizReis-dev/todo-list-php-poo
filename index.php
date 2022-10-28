<?php
require './Entidades/todo.php';

$listaTodos = Todo::getTodos();

$resultados = ' ';
foreach($listaTodos as $todo) {
    $resultados .= "<tr> 
                    <td>".$todo->descricao. "</td>
                    <td>".date('d/m/Y', strtotime($todo->data))."</td>
                    <td>".$todo->status."</td>
                    <td><a href='excluir.php?id=".$todo->id."'><button class='btn btn-danger'>Excluir</button></a> <a href='editar.php?id=".$todo->id."'><button class='btn btn-primary'>Editar</button></a></td>
                  </tr>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Todo List</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Todo List</h1>
        <table class="table text-center">
            <thead class="bg-light text-dark">
                <tr>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
        <a href="adicionartarefa.php">
            <button type="button" class="btn btn-primary">Adicionar tarefa</button>
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>