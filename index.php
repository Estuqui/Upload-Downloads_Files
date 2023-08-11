<?php 

    include("/home/jessica/www/Upload/conexao.php");

    if(isset($_FILES["arquivo"])){
        $arquivo = $_FILES["arquivo"];


        if($arquivo["Error"])
            die("Falha ao enviar o arquivo");

        if($arquivo["size"] > 2097152)
            die("Arquivo não suportado, tamanho Max: 2MB");
        


        $pasta = "arquivos/";
        $nomeDoArquivo = $arquivo["nome"];
        $novoNomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != "png" && $extensao != "pdf");
            die("Tipo de arquivo inválido, por favor envie somente arquivos do tipo jpg, png e/ou pdf");
            

        
        $caminho = $pasta . $novoNomeDoArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $caminho);
            if($deu_certo){
                $mysqli->query("INSERT INTO arquivos (caminho, nome) VALUES ('$nomeDoArquivo','$caminho')") or die($mysqli->error);
                
                echo "Arquivo enviado com sucesso <a target='_blank' href= 'arquivos/$novoNomeDoArquivo.$extensao'>Clique aqui</a>";
            }else {
                    echo "Falha ao enviar arquivo";
                }
            }
          
            
    $sql=$mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="acao" value="Enviar Arquivo">
    </form>
    <table>
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
        </thead>
        <tbody>
            <?php while($arquivo=$sql->fetch_assoc()){
                }
            ?>
            <tr>
                <td> <?php echo $arquivo['nome']; ?> </td>
                <td> <?php echo $arquivo['nome']; ?> </td>
                <td> <?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload']));?> </td>
            </tr>

        </tbody>
    </table>

</body>

</html>