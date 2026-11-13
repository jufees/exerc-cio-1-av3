
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receber os dados do formulário
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $curso = $_POST["curso"] ?? "";
    $termos = $_POST["termos"] ?? "";

    // Verificar se os campos foram preenchidos
    if (
        empty($nome) ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        strlen($senha) < 6 ||
        empty($genero) ||
        empty($curso) ||
        $termos !== "sim"
    ) {
        die("Por favor, preencha todos os campos corretamente.");
    }

    // Exibir mensagem de sucesso
    echo "<!DOCTYPE html>";
    echo "<html lang='pt-br'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Cadastro realizado</title>";

    echo "<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            max-width: 420px;
            width: 100%;
        }

        h2 {
            color: #4b2c4b;
            text-align: center;
        }

        p {
            color: #333;
            line-height: 1.8;
        }

        a {
            display: block;
            text-align: center;
            background: #4b2c4b;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>";

    echo "</head>";
    echo "<body>";

    echo "<div class='container'>";

    echo "<h2>Cadastro realizado com sucesso!</h2>";

    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Gênero:</strong> " . htmlspecialchars($genero) . "</p>";
    echo "<p><strong>Curso:</strong> " . htmlspecialchars($curso) . "</p>";

    echo "<p>Seu cadastro foi concluído com sucesso!</p>";

    echo "<a href='index.html'>Voltar ao formulário</a>";

    echo "</div>";

    echo "</body>";
    echo "</html>";

} else {

    echo "Acesso não permitido!";

}

?>
