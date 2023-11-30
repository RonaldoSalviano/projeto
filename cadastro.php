<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="nome">
  Email: <input type="text" name="email">
  Senha: <input type="password" name="senha">
  <input type="submit">
</form>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (empty($nome) || empty($email) || empty($senha)) {
    echo "Todos os campos são obrigatórios.";
  } else {
    $sql = "INSERT INTO Usuarios (nome, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
      echo "Novo registro criado com sucesso";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();
?>

</body>
</html>


Por favor, substitua "localhost", "username", "password" e "myDB" pelos detalhes do seu servidor MySQL e banco de dados. Além disso, este é um exemplo muito básico e não inclui validação de dados ou proteção contra ataques XSS ou SQL Injection. Você deve implementar essas proteções ao criar um formulário PHP para uso em um site real.