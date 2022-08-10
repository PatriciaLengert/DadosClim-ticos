<?php
session_start();
if((!isset($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
  
  header('Location: login.php');

}
?>
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
      <section class="container px-0">
        <div class="administrador">
          <form method='post'>
            <div class="botaoHeader">
              <input
                type="submit"
                value="Sair"
                name="sair"
                class="botaoSair"
              />
            </div>
          </form>
          <p class="tituloADM">
            <?php  
              echo "Bem-vindo, ". $_SESSION['nome_usuario'] . "!";
            ?>
          </p>
          <form  method="post">
          <p class="tituloADM">Cadastrar novos dados</p>
          <div class="manual">
            <p class="topicoADM mb-3">Inserir Manualmente</p>
            <div class="divDate">
              <label for="data">Data</label>
              <input type="date" name="data" id="data" class="date ms-3" required/>
            </div>            
            <div class="inputsTemp mt-4">
              <div class="temp">
                <label for="max">Max</label>
                <input type="text" name="max" id="max" class="inputTemp mt-2" />
              </div>
              <div class="temp">
                <label for="med">Med</label>
                <input type="text" name="med" id="med" class="inputTemp mt-2" />
              </div>
              <div class="temp">
                <label for="min">Min</label>
                <input type="text" name ="min" id="min" class="inputTemp mt-2" />
              </div>
              <div class="temp">
                <label for="chuva">Chuva</label>
                <input type="text" name ="chuva" id="chuva" class="inputTemp mt-2" />
              </div>
            </div>
          </div>
          <p class="topicoADM">OU</p>
          <div class="csv">
            <p class="topicoADM mb-3">Carregar dados por CSV</p>
            <div class="procurar mt-2 ">
              <input type="text" class="inputProcurar" />
              <input
                type="submit"
                value="Procurar"
                name="procurar"
                class="botaoProcurar"
              />
            </div>
          </div>
          <div class="botoesADM">
            <input type="submit" value="Cancelar" name="cancelar" class="botaoCancelar" />
            <input type="submit" value="Cadastrar" name="cadastrar" class="botaoCadastrar"/>
          </div>
        </div>
      </section>
    </main>
</form>
  </body>
</html>
<?php
  if(isset($_POST['sair'])){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: login.php");
  }

  if(isset($_POST['cadastrar'])){
      
      $min = $_POST['min'];
      $max = $_POST['max'];
      $media = $_POST['med'];
      $chuva = $_POST['chuva'];
      $data = $_POST['data'];
      

      $con=mysqli_connect('localhost', 'root', 'Nocodorna17', 'programacaoweb');
      
      if(!$con){
          echo "Erro conexão DB";

      }else{ 

          $query = "insert into dados_climaticos(data, temp_min, temp_max, temp_media, chuva, administracao_id) values
                    ('$data', $min, $max, $media, $chuva, 1)";

          $result_query = mysqli_query($con, $query);
          
          
      }
      mysqli_close($con);

  }
?>