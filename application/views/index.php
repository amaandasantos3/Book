<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <!-- nav-bar-area-start -->
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
    <div class="row">
      <?php foreach ($livros as $livro) : ?>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Livro: <?= $livro['nome'] ?></h5>
              <p class="card-text">Autor: <?= $livro['autor'] ?></p>
              <p class="card-text">Categoria: <?= $livro['categoria'] ?></p>
              <p class="card-text">Resenha: <?= $livro['resenha'] ?></p>
            </div>
          </div>
          <br>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>