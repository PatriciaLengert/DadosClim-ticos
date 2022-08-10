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
    <!-- 
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap");
    </style> -->

    <title>Dados</title>
  </head>

  <body>
  <form  method="post">
    <div>
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand titulo ms-3" href="../index.php"
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
                <a class="nav-link mx-3" href="cadastrar.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3 atual" href="administrador.php">Administração</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main>
      <section class="containerLogin px-0">
        <div class="login">
          <div class="modalLogin">
            <p class="tituloLogin">Login de Administrador</p>
            <div class="inputs">            
              <label for="usuario">Usuário</label>
              <input type="text" name="usuario" class="inputLogin mt-2 mb-3" />
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="inputLogin mt-2 mb-3" />
              <div class="botoesLogin mt-5">
                <input
                  class="botaoCancelar me-2"
                  type="submit"
                  value="Voltar"
                />
                <input
                  type="submit"
                  value="Entrar"
                  name="entrar"
                  class="botaoEnviar"
                />
              </div>            
            </div>
          </div>
        </div>
      </section>
    </main>
  </form>
  </body>
</html>


<?php


if(isset($_POST['entrar'])){
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

  $con=mysqli_connect('localhost', 'root', 'Nocodorna17', 'programacaoweb');
  if(!$con){
      echo "Erro conexão DB";

  }else{ //header('Location: index.php');

      $query = "select usuario, senha, nome from administracao where usuario ='$usuario' and senha='$senha'";

      $result_query = mysqli_query($con, $query);
      $result = mysqli_fetch_assoc($result_query);

      if($result>0){
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['senha']=$senha;
        $_SESSION['nome_usuario'] = $result['nome'];
        header('Location: administrador.php');
        echo "Sessão iniciada";   
        

      }else{ 
        
        setcookie('status_login', 'true');
        
            
      }
  }
  mysqli_close($con);
}

?>