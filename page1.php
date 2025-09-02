<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <stylesheet" href="styles.css">
    <title>Página 1 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="page1.php">Página 1</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Página 1</h1>
        <br/>
    <?php
    define("USER", "admin");
    $nome = "Laiza";
    $dia = 2;
    $nota = 8.5;

    echo USER." - ".$nome." - ".$dia." - ".$nota;
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
  </script>
</body>
</html>