<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        $instancia = new PDO('mysql:host=localhost;dbname=bd_agenda_contato; charset=utf8','root', 'root');
        $stm = $instancia->query("select * from contato;");

        echo "<table>";
        echo "<tr><th>Id</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Data</th></tr>";
        foreach ($stm as $row) {
            echo "<tr>
                    <td>".$row["id_contato"]."</td>
                    <td>".$row["nome_contato"]."</td>
                    <td>".$row["email_contato"]."</td>
                    <td>".$row["telefone_contato"]."</td>
                    <td>".$row["data_cadastro"]."</td>
                    
                </tr>";
        }
        echo "</table>";
    ?>
    <form action="controller.php" method="post">
        <input type="text" name="id" id="id" placeholder="id"><br>
    <input type="text" name="nome" id="nome" placeholder="nome" required><br>
    <input type="email" name="email" id="email" placeholder="email"><br>
    <input type="tel" name="telefone" id="telefone" placeholder="telefone"><br>
    <input type="submit" name="botao" value="CADASTRAR">
    <input type="submit" name="botao" value="DELETAR"><br>
    <input type="submit" name="botao" value="ATUALIZAR">
    </form>
   
</body>
</html>