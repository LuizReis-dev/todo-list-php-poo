<?php
    require "./Entidades/todo.php";
    if(isset($_POST["descricao"])){
        $todo = new Todo();
        $todo->setDescricao($_POST["descricao"]);
        if($todo->inserirTodo()) {
            header('location: index.php');
        }
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
        <h1 class="text-center">Adicionar tarefa</h1>
        <form method="POST">
            <div class="form-group">
                <label for="Descrição">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao">
            </div>
            <div class="buttons mt-3">
                <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>