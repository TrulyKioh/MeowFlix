<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="background">
    <div class="rect rect3"></div>
    <div class="rect rect2"></div>
    <div class="rect rect1"></div>
  </div>

  <div class="login-container">
    <div class="logo">
      <img src="img/MeowFlix.png" alt="MeowFlix Logo" width="311" height="208">
    </div>

  <form class="login-form" action="{{ url('/login') }}" method="POST">
    @csrf
    <div class="input-group">
      <input type="email" name="email" placeholder="Insira seu e-mail" required>
      <img src="img/Estrelinhas.png" alt="" class="stars">
    </div>
    <div class="input-group">
      <input type="password" name="password" placeholder="Insira sua senha" required>
    </div>
    <button type="submit">Entrar</button>
  </form>

    <div class="links">
      <p>Não tem uma conta? <a href="{{ url('/cadastro') }}">Crie a sua agora!</a></p>
      <a href="#">Esqueci minha senha :(</a>
    </div>
  </div>
</body>
</html>