<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>

<body>
  <h1 style="text-align:center;">Clientes</h1>
  <form action="cliente.php" method="post" style="display: flex; justify-content:center;">  
    <table border="0" align="center">
      <tr>
        <td>CPF:</td>
        <td><input type="text" name="cpf"></td>
      </tr>

      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome"></td>
      </tr>

      <tr>
        <td>Data de Nascimento:</td>
        <td><input type="text" name="data_c"></td>
      </tr>

      <tr>
        <td>Endereço:</td>
        <td><input type="text" name="endereco"></td>
      </tr>

      <tr>
        <td>Cidade:</td>
        <td><input type="text" name="cidade"></td>
      </tr>

      <tr>
        <td>Estado:</td>
        <td><input type="text" name="estado"></td>
      </tr>

      <tr>
        <td><input type="submit" value="Enviar" name="Enviar"></td>
        <td><input type="reset" value="Limpar" name="Limpar"></td>
      </tr>

    </table>
  </form>

  <?php 
    if(isset($_POST['Enviar'])) {
      $nome = $_POST['nome'];
    }
  
  ?>
  
</body>
</html>