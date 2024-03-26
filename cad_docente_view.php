<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastro Docente</title>
  </head>
  <body>
   
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">Escola</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cad_docente_view.php">Docente</a>
                      </li>
                     
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cadastrar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="cad_aluno_view.php">Aluno</a></li>
                          <li><a class="dropdown-item" href="cad_docente_view.php">Docente</a></li>
                          <li><a class="dropdown-item" href="cad_turma_view.php">Turma</a></li> 
                          <li><a class="dropdown-item" href="cad_curso_view.php">Curso</a></li>                        

                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="cad_matricula_view.php">Matricula</a></li>
                        </ul>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </nav>
         </div>
    </div>

    <div class="text-center bg-dark text-white p-3">
      <h1>Cadastro de Docente</h1>
    </div>

      <div class="container bg-light p-4">
        <form action="./controller/cad_docente.php" method="post">
     
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="nomeDocente" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeDocente" name="nomeDocente">
              </div>
            </div>
          </div>
     
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="cpfDocente" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpfDocente" name="cpfDocente">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="emailDocente" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailDocente" name="emailDocente">
              </div>
            </div>
          </div>
     
          <!-- <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="telefoneDocente" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefoneDocente">
              </div>
            </div>
          </div> -->
     
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="cepDocente" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cepDocente" name="cepDocente">
              </div>
            </div>
          </div>
     
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="ruaDocente" class="form-label">Rua</label>
                <input type="text" class="form-control" id="ruaDocente" name="ruaDocente">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="bairroDocente" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairroDocente" name="bairroDocente">
              </div>
            </div>
          </div>
     
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="cidadeDocente" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidadeDocente" name="cidadeDocente">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="estadoDocente" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estadoDocente" name="estadoDocente">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="paisDocente" class="form-label">País</label>
                <input type="text" class="form-control" id="paisDocente" name="paisDocente">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
     
     
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
     
    </body>
     
    </html>