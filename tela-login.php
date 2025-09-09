<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="page1.php">Página 1</a></li>
                <li><a href="tela-login.php">Login</a></li>
            </ul>
        </nav>
    </header>

<body>
    <main>
<h1>Aula 05 - 09/09/2025</h1>

     <?php 
    $usuario = "admin";
    $senha = "admin";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["usuario"] ?? "";
        $pass = $_POST["senha"] ?? "";

        if ($user === $usuario && $pass === $senha) {
            echo "<p style='color:green;'>Login realizado com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Usuário ou senha incorretos.</p>";
        }

        echo "<hr>";
        echo "Bem Vindo usuário: " . $user = $_POST["usuario"];
    }
    ?>

    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
    </main>
</body>
</html>