
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8"/>

<title>Document</title>
<link rel="stylesheet" type="text/css" href="estilo.css">

</head>

<body>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="nome">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // coleta o valor de entrada do formulário
  $nome = htmlspecialchars($_REQUEST['nome']); 
  if (empty($nome)) {
    echo "Nome está vazio";
  } else {
    echo "Olá, $nome";
  }
}
?>

</body>
</html>