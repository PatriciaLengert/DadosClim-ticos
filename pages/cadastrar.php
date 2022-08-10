<!DOCTYPE html>
<html lang="port">
  <head>
    <meta charset="utf-8" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap");
    </style>
    <title>Dados</title>
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand titulo ms-3" href="../index.html"
            >Dados Climáticos</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a
                  class="nav-link mx-3"
                  aria-current="page"
                  href="../index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="buscas.php">Buscas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="tabelas.php">Tabelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3 atual" href="cadastrar.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="administrador.php">Administração</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main>
      <section class="container px-0">
        <div class="cadastrar">
          <div class="inputsCadastrar">
            <div class="cadastroEmail">
              <form method="post">
                <p class="mb-4">
                  Para receber atualizações sobre os dados cadastre seu e-mail
                </p>
                <div class="inputsCadastrar">
                  <input type="text" class="cadastro" name="email" />
                  <input
                    type="submit"
                    value="Cadastrar"
                    name="cadastrar"
                    class="mt-4 botaoCadastro"
                  />
                </div>
              </form>
            </div>
            <div class="contatoEmail">
              <p class="mb-4">
                Ou caso necessite de alguma informação personalizada, preencha o
                formulário abaixo
              </p>
              <div class="inputsCadastrar">
                <label for="assunto" class="labelCadastro mb-2">Assunto</label>
                <input type="text" id="assunto" class="cadastro" />
                <label for="mensagem" class="labelCadastro mt-3 mb-2">Mensagem</label>
                <textarea
                  id="mensagem"
                  rows="5"
                  cols="30"
                  class="cadastroTA"
                ></textarea>
                <div class="botoesFooter">
                  <input
                    type="submit"
                    value="Cancelar"
                    name="cancelar"
                    class="mt-4 botaoCancelar"
                  />
                  <input
                    type="submit"
                    value="Enviar"
                    name="enviar"
                    class="mt-4 botaoEnviar"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

<?php

  if(isset($_POST['cadastrar'])){
    $con = mysqli_connect('localhost', 'root', 'Nocodorna17', 'programacaoweb');
    if(!$con){
        echo "Erro ao conectar no banco".mysqli_connect_errno();
    }else{
        $email = $_POST['email'];
        $query = "insert into usuarios (email) values ('$email');";
        if(mysqli_query($con, $query)){
            //echo "Novo aluno cadastrado com sucesso";
        }else{
            //echo "Erro ao cadastrar";
        }
    }
    mysqli_close($con);
  }

