
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>API - LARAVEL_8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">



    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">API LARAVEL_8</h3>
      <br><br>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">GITHUB</a>
        <a class="nav-link" href="#">CONTATO</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>PARA TESTAR ESSA API É NECESSÁRIO QUE VOCE TENHA INSTALADO O POSTMAN OU INSOMNIA.</h1>
    <br><br>
    <p class="lead">Essas são as rotas para testes.</p>
    <p class="lead">Rota de Registro de usuário
        Verbo: Post
        <br>http://myapil8.herokuapp.com/api/register
        <br>
        "name":"nome de usuário",<br>
        "email":"e-mail do usuário",<br>
        "password":" senha ",<br>
        "password2":" repita a senha"
    </p>
    <hr>

    <p class="lead">Rota de Login de usuário
        Verbo: Post
        <br>http://myapil8.herokuapp.com/api/login
        <br>
      Na Header marcar os campos Key e Value com as seguintes informações:<br>
      1° campo-> Key: Accept e Value: application/json<br>
      2° campo-> Key: Authorization e Value: Bearer + o Token recebido na hora do registro.
    </p>
    <hr>
    <p class="lead">Rota de Inserção dos dados
        Verbo: Post
        <br>http://myapil8.herokuapp.com/api/post
        <br>
        <p>Campos</p>
        <br>

        "title": "Titulo do post",<br>
        "content": " conteúdo do post"
    </p>
    <hr>
    <p class="lead">Rota de Visualização dos Post
        Verbo: Get
        <br>http://myapil8.herokuapp.com/api/post
        <br>http://myapil8.herokuapp.com/api/post/(Post especifico)
        <br>
    </p>
    <hr>
    <p class="lead">Rota de Atualização dos dados
        Verbo: Patch
        <br>http://myapil8.herokuapp.com/api/post
        <br>
        "title": "Alterar dados do titulo",<br>
        "content": " Alterar dados do conteudo"
    </p>
    <hr>
    <p class="lead">Rota de Exclusão dos dados
        Verbo: Delete
        <br>http://myapil8.herokuapp.com/api/post/id-do_post.
        <br>

    </p>
    <hr>
   <p>Frontend que está consumindo os dados da API</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-red">https://fvuejs.herokuapp.com/</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Template for <a href="#" class="text-white">Bootstrap</a>, by <a href="#" class="text-white">@mdo</a>.</p>
  </footer>
</div>



  </body>
</html>
