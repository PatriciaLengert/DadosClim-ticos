
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
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap");
    </style>

    <title>Dados</title>
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="index.html"
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
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-3 atual" aria-current="page" href="index.php"
                >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="pages/buscas.php">Buscas</a>             
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="pages/tabelas.php">Tabelas</a>              
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="pages/cadastrar.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="pages/administrador.php">Administração</a>                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main>
      <section class="container px-0">
          <div class="home">
              <h4 class="titulo_descricao text-center">Descrição dos dados</h4>
              <figure class="img">
                <img src="img/mapa.jpeg" class="img" alt="...">
            </figure>
            <p class="text-center descricao">Dados registrados no interior de Itapiranga SC, próximo a divisa com a Argentina.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum convallis odio, vel porta eros tempor in. Aliquam id dolor justo. Nam hendrerit tortor vitae lorem dapibus, sed varius purus pellentesque. Aliquam vitae aliquet ex, ornare suscipit mauris. Phasellus non enim enim. Fusce rhoncus, dui et auctor placerat, nulla magna laoreet urna, volutpat molestie velit eros vel leo. Integer auctor, ante ut porttitor viverra, massa magna posuere elit, quis ultricies nulla elit in libero. Fusce placerat, sem nec volutpat scelerisque, quam felis scelerisque quam, vitae pharetra nunc massa vel nulla. Aliquam ut suscipit lectus, et hendrerit neque. Praesent vehicula id risus vitae iaculis. In blandit urna ut vehicula volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
            </p>
          </div>
      </section>
  </main>
  </body>
</html>

