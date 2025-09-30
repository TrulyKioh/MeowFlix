<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MeowFlix - Início</title>
  <link rel="stylesheet" href="{{ asset('css/tela_inicial.css') }}">
</head>
<body>
  <header class="header">
    <div class="logo">
      <img src="img/MeowFlix.png" alt="Logo MeowFlix" width="150">
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Pesquisar filmes...">
    </div>
    <div class="user-profile">
      <img src="img/gatinhofofo.jpg" alt="Foto do usuário" width="40" height="40">
    </div>
  </header>

  <a href="{{ url('/criacao_de_filme') }}" class="fab">+</a>

  <main class="movie-grid">
    <div class="movie-card">
      <img src="img/cisnenegro.jpg" alt="Cines Negro">
    </div>
    <div class="movie-card">
      <img src="img/django.jpg" alt="Django">
    </div>
    <div class="movie-card">
      <img src="img/jogosmortais.jpg" alt="Jogos Mortais Jigsaw">
    </div>
    <div class="movie-card">
      <img src="img/lahaine.jpg" alt="La Haine">
    </div>
    <div class="movie-card">
      <img src="img/laranjamecanica.jpg" alt="Laranja Mecânica">
    </div>
    <div class="movie-card">
      <img src="img/look back.jpg" alt="Look Back">
    </div>
    <div class="movie-card">
      <img src="img/pulpfiction.jpg" alt="Pulp Fiction">
    </div>
    <div class="movie-card">
      <img src="img/thething.jpg" alt="The Thing">
    </div>
  </main>
</body>
</html>
