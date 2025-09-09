<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Back-End - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="page1.php">Página 1</a></li>
                <li><a href="tela-login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 id="titulo">Testando php - </h1>
        <br/>
    <?php
    echo "Comando pelo php novo";
    ?> 
    </main>   


        <div id="loader">
        <div class="spinner"></div>
    </div>

<script>
    window.addEventListener("load", () => {
      const loader = document.getElementById("loader");
      const content = document.getElementById("content");

      // Esconde o loader
      loader.classList.add("hidden");

      // Mostra o conteúdo
      setTimeout(() => {
        loader.style.display = "none";
        content.style.display = "block";
      }, 500); // tempo igual à transição do CSS
    });

  // Pega a data atual
  const hoje = new Date();

  // Formata para dd/mm/yyyy
  const dia = String(hoje.getDate()).padStart(2, '0');
  const mes = String(hoje.getMonth() + 1).padStart(2, '0'); // meses começam do 0
  const ano = hoje.getFullYear();

  const dataFormatada = `${dia}/${mes}/${ano}`;

  // Coloca no H1
  document.getElementById("titulo").textContent += dataFormatada;
</script>
</body>
</html>
