<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MeowFlix - Criação de Filme</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/criacao_de_filme.css')); ?>">
</head>
<body>
  <button class="exit-btn" onclick="window.close()">✖</button>
  
    <div class="cover">
      <input type="file" id="coverInput" accept="image/*">
      <label for="coverInput">Escolher Capa</label>
      <img id="preview" style="display: none;">
    </div>

    <div class="form">
      <input type="text" placeholder="Título (mínimo 3 caracteres)" minlength="3" maxlength="150" required>
      <textarea placeholder="Descrição (mínimo 10 caracteres)" minlength="10" maxlength="300" required></textarea>
      
      <div class="rating">
        <label>Sua nota:</label>
        <input type="number" min="0" max="10" value="0"> /10 ⭐
      </div>
      
      <input type="date" placeholder="Data de lançamento">
      <input type="text" placeholder="Diretor (mínimo 5 caracteres)" minlength="5" maxlength="100">
      <input type="text" placeholder="Identificador">
        <input type="text" id="genres" placeholder="Gênero (mínimo 4 caracteres)" minlength="4" maxlength="50">
        <small id="genreCount">0 gêneros</small>


      <button class="create-btn">Criar</button>
    </div>
  </div>
</body>

<script>
  const input = document.getElementById('coverInput');
  const preview = document.getElementById('preview');

  input.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = () => {
        preview.src = reader.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });

  const genreInput = document.getElementById('genres');
  const genreCount = document.getElementById('genreCount');

  genreInput.addEventListener('input', () => {
    const genres = genreInput.value
      .split(',')
      .map(g => g.trim())
      .filter(g => g.length > 0);

    genreCount.textContent = `${genres.length} gênero${genres.length !== 1 ? 's' : ''}`;
  });
</script><?php /**PATH C:\Users\usuario\Documents\laraveltesteaaa\laraveltesteaaa\resources\views/criacao_de_filme.blade.php ENDPATH**/ ?>