<html>
<head>
    <title>Exemplo PHP - Aprimorado</title>
</head>
<body>
    <?php
    ini_set("display_errors", 1);
    header('Content-Type: text/html; charset=iso-8859-1');

    echo '<h1>Versão Atual do PHP: ' . phpversion() . '</h1>';

    $servername = "54.234.153.24";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    $link = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "<p style='color: red;'>Falha na conexão: " . mysqli_connect_error() . "</p>";
        exit();
    }

    echo "<p style='color: green;'>Conexão com o banco estabelecida com sucesso!</p>";

    $valor_rand1 = rand(1, 999);
    $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $host_name = gethostname();

    $query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) 
              VALUES ('$valor_rand1', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";

    if ($link->query($query) === TRUE) {
        echo "<p style='color: green;'>Novo registro criado com sucesso.</p>";
    } else {
        echo "<p style='color: red;'>Erro ao inserir registro: " . $link->error . "</p>";
    }

    // Exibindo os dados na página
    $result = $link->query("SELECT * FROM dados");
    if ($result->num_rows > 0) {
        echo "<h2>Dados no Banco:</h2>";
        echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>Endereço</th><th>Cidade</th><th>Host</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['AlunoID']}</td><td>{$row['Nome']}</td><td>{$row['Sobrenome']}</td><td>{$row['Endereco']}</td><td>{$row['Cidade']}</td><td>{$row['Host']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum dado encontrado no banco.</p>";
    }
    ?>
</body>
</html>
