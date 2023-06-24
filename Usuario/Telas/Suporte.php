<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../PastaCSS/gradientes.css">
  <link rel="stylesheet" href="../../PastaCSS/configsEAfins.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="midnight-city">
  <header>
    <?php include "../../componentes/barradeNav.php" ?>
  </header>

  <main>
    <!-- Section: Contact -->
    <section class="mb-5 mb-lg-10 SuporteConfis">
      <form action="../../conexaoBanco/enviar_dados.php" method="post">
        <div class="form-body">
          <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card px-1 py-4">
              <div class="card-body">
                <h6 class="card-title mb-3"><strong>Contato</strong></h6>
                <h6 class="information mt-4">Por favor, preencha os campos: </h6>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Nome" name="nome">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                        <select name="motivodocontato" id="" class="form-control">
                          <option value="Sugestão de jogo">Sugestão de jogo</option>
                          <option value="Sugestão de jogo">Reclamação</option>
                          <option value="Sugestão de jogo">Pergunta</option>
                          <option value="Sugestão de jogo">Elogio</option>
                        </select>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="input-group"> <input class="form-control" type="text" placeholder="Email" name="email"> </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                        <textarea name="mensagem" id="" cols="30" rows="5" class="form-control" placeholder="mensagem"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">Acessar ADM</small> <a href="../../ADMIN/Telas/" class="terms">LoginADM</a> </div> 
                  
                  <input type="submit" class="btn btn-primary btn-block confirm-button"></input> 
                </div>
      </form>
      </div>
      </div>

    </section>
    <!-- Section: Contact -->
  </main>










  <Script src="../../PastaCSS/personalizar.js"></Script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>