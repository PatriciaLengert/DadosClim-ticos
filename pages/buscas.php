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
                <a class="nav-link mx-3 atual" href="buscas.php">Buscas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="tabelas.php">Tabelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="cadastrar.php">Cadastrar</a>
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
        <div class="buscas">
          <div class="porData mt-5">
            <form method='post'>
              <p class="tituloSecao mb-4">Selecione a data</p>
              <div class="inputsBusca">
                <input type="date" class="date" name='data'/>
                <input
                  type="submit"
                  value="Buscar"
                  name="buscar"
                  class="mt-4 mb-4 buscar"
                />
              </div>
            </form>
            
              <table class="tableBuscas">
              <?php

                  if(isset($_POST['buscar'])){
                    $con = mysqli_connect('localhost', 'root', 'Nocodorna17', 'programacaoweb');
                    if(!$con){
                        echo "Erro ao conectar no banco".mysqli_connect_errno();
                    }else{
                      $data = $_POST['data'];
                      $query = "select * from dados_climaticos where data='$data'";
                      
                      //$result = mysqli_query($con, $query);

                      //$row = mysqli_fetch_assoc($result);

                      if($result = $con->query($query)){
                        $arrayResult = array();
        
                        while($registro = $result->fetch_object()){
                            $arrayResult[] = $registro;
                        }
                        $result->free();

                      foreach($arrayResult as $x){

                        echo "<tr class='tr'>";
                        echo "<th>"."Data"."</th>";
                        echo "<th>"."Temp. Mínima"."</th>";
                        echo "<th>"."Temp. Máxima"."</th>";
                        echo "<th>"."Temp. Média"."</th>";
                        echo "<th>"."Chuva"."</th>";
                        echo "</tr>";
                        
                        echo "<tr class='tr'>";
                        echo "<td>". $x->data ."</td>";
                        echo "<td>". $x->temp_min ."</td>";
                        echo "<td>". $x->temp_max ."</td>";
                        echo "<td>". $x->temp_media ."</td>";
                        echo "<td>". $x->chuva ."</td>";
                        echo "</tr>";
                    }
                  }
                    mysqli_close($con);
                  }
                }
                ?>

              </table>
            </div>
          <div class="line mt-4 mb-4"></div>
          <div class="porPeriodo mt-5">
            <form method='post'>
              <p class="tituloSecao mb-4">Selecione o período</p>
              <div class="inputsBusca">
                <p class="mb-2">Data de início</p>
                <input type="date" class="date" name='inicio'/>
                <p class="mb-2 mt-3">Data de fim</p>
                <input type="date" class="date" name='fim'/>
                <input
                  type="submit"
                  value="Buscar"
                  name="buscarPeriodo"
                  class="mt-4 mb-4 buscar"
                />
              </div>
            </form>
            <div>
            <table class="tableBuscas">
              <?php

                  if(isset($_POST['buscarPeriodo'])){
                    $con = mysqli_connect('localhost', 'root', 'Nocodorna17', 'programacaoweb');
                    if(!$con){
                        echo "Erro ao conectar no banco".mysqli_connect_errno();
                    }else{
                      $inicio = $_POST['inicio'];
                      $fim = $_POST['fim'];
                      $query = "select * from dados_climaticos where data>='$inicio' and data<='$fim'";
                      
                      //$result = mysqli_query($con, $query);

                      //$row = mysqli_fetch_assoc($result);

                      if($result = $con->query($query)){
                        $arrayResult = array();
        
                        while($registro = $result->fetch_object()){
                            $arrayResult[] = $registro;
                        }
                        $result->free();

                      foreach($arrayResult as $x){

                        echo "<tr class='tr'>";
                        echo "<th class='th'>"."Data"."</th>";
                        echo "<th class='th'>"."Temp. Mínima"."</th>";
                        echo "<th class='th'>"."Temp. Máxima"."</th>";
                        echo "<th class='th'>"."Temp. Média"."</th>";
                        echo "<th class='th'>"."Chuva"."</th>";
                        echo "</tr>";
                        
                        echo "<tr class='tr'>";
                        echo "<td class='td'>". $x->data ."</td>";
                        echo "<td class='td'>". $x->temp_min ."</td>";
                        echo "<td class='td'>". $x->temp_max ."</td>";
                        echo "<td class='td'>". $x->temp_media ."</td>";
                        echo "<td class='td'>". $x->chuva ."</td>";
                        echo "</tr>";
                    }
                  }
                    mysqli_close($con);
                  }
                }
                ?>

              </table>

            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

