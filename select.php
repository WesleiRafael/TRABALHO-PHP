<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card m-4"> 
      <div class="card-body">
        <table class="table table-dark table-striped">
          <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>E-mail</td>
              <td>Usuário</td>
              <td>Editar</td>
              <td>Excluir</td>
          </tr>
          <?php
            require('conexao.php');
            $resultado = mysqli_query($conexao, 'SELECT * FROM usuarios ORDER BY id ASC');
          ?>

          <?php while($registro = mysqli_fetch_assoc($resultado)): ?>
            <tr>
            <td><?=$registro['id']?></td>
            <td><?=$registro['nome']?></td>
            <td><?=$registro['email']?></td>
            <td><?=$registro['user']?></td>           
            <td><a href="editar.php?id=<?=$registro['id']?>" class="btn btn-warning">Editar</a></td>
            <td><a href="delete.php?id=<?=$registro['id']?>" class="btn btn-danger">Excluir</a></td>
          <?php endwhile; ?>

        </table>
      </div>
      <div class="card-footer">
        <a href="cadastrar.php" class="btn btn-primary">Novo Cadastro</a>
      </div>
    </div>
  </body>
</html>

