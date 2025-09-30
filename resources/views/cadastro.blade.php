<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
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

    <form class="login-form" action="{{ url('/cadastro') }}" method="POST">
        @csrf
      <div class="input-group">
       <input type="text" name="name" placeholder="Insira seu nome" required>
       <img src="img/Estrelinhas.png" alt="" class="stars">
     </div>
      <div class="input-group">
        <input type="email" name="email" placeholder="Insira seu e-mail" required>
      </div>
      <div class="input-group">
       <input type="password" name="password" placeholder="Crie sua senha" required>
     </div>
     <div class="input-group">
       <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required>
     </div>
       <button type="submit">Cadastrar</button>
    </form>


    <div class="links">
      <p>Já tem uma conta? <a href="#">Entre agora!</a></p>
    </div>
  </div>
</body>
</html>