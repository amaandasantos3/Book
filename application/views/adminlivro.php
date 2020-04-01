<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c1c4b86a18.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--===============================================================================================-->

    <title>Livros</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">

      <!-- ====================nav-left-site==================== -->
      <a class="navbar-brand" href="#">ADASI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- ====================nav-middle-site==================== -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="lista">Lista</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cadastro">Novo Livro</a>
          </li>

        </ul>

        <!-- ====================nav-right-site==================== -->
        <ul class="navbar-nav  my-2 my-lg-0">


          <a href="user/logout"> <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sair</button> </a>
        </ul>
      </div>
    </div>
  </nav>


    <br>
    <div class="container">
        <h1 style="text-align: center;"> Livros Cadastrados</h1>
        <br>
        <table class="table" id="table">
            <thead>

                <tr>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Funções</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($livros as $livro) : ?>
                    <tr>
                        <td><?= $livro['nome'] ?></td>
                        <td><?= $livro['autor'] ?></td>
                        <td><?= $livro['categoria'] ?></td>
                        <td><a href="<?= base_url() ?>livro/edit/<?= $livro['id'] ?>" class="btn btn-primary btn-sm btn-warning">
                                <i class="fas fa-pencil-alt"></i></a>

                            <a href="<?= base_url() ?>livro/delete/<?= $livro['id'] ?>" class="btn btn-primary btn-sm btn-danger"> <i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    "lengthMenu": "Exibindo _MENU_ registro por página",
                    "zeroRecords": "Nada Encontrado - Desculpa",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ resgistros no total)",
                    "sSearch": "Pesquisar: ",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                },
            });

        });
    </script>
</body>

</html>