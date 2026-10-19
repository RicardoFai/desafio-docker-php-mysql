<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Minha Aplicação Web - Docker Compose</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .status { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Servidor Apache + PHP Ativo!</h1>
        <p><strong>Versão do PHP:</strong> <?php echo phpversion(); ?></p>
        <hr>
        <h2>Teste de Conexão com o Banco de Dados (MySQL)</h2>
        <?php
        $servername = "db";
        $username = "root";
        $password = "Senha123";
        $database = "testedb";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            echo "<p style='color:red;'>Falha na Conexão: " . $conn->connect_error . "</p>";
        } else {
            echo "<p class='status'>Conexão com o MySQL realizada com sucesso!</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>






