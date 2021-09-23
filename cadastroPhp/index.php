<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Login</title>
</head>
<body>

  <div class="wrapper">
    <div class="container">
      
      <div class="cadastro">Cadastre-se Cliente</div>
      <form name="Cadastro" class="cadastro-form" method="POST" action="UsaCadastro.php">
          <input name="txtNome" type="text" placeholder="Nome Completo" class="input"><br />
          <input name="txtRg" type="text" placeholder="Seu RG" class="input"><br />
          <input name="txtCpf" type="text" placeholder="Seu CPF" class="input"><br />
          <input name="btnMostrar" type="submit" class="btn" value="Concluir"></input>
      </form>
      <br>
  
      
    </div>
  </div>

</body>
</html>