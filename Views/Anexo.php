<?php
if (!isset($_SESSION["loggedIn"])) {
    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/CSS/AnexoEstilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home</title>

<body>
    <nav>

        <div class="logo">
            <a href="#"> <i class="bi bi-box-seam-fill"></i> </a>
        </div>

        <ul>
            <li> <a href="/Views/Suporte.php"> Suporte <i class="bi bi-person-fill-gear"></i> </a> </li>
            <li> <a href="/Controllers/UserController.php?action=logout"> Exit <i class="bi bi-box-arrow-right"></i>
                </a>
            </li>
        </ul>

    </nav>
    <h1>Upload de Arquivos <i class="bi bi-cloud-upload-fill"></i></h1>

    <form action="/Controllers/FileController.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept=".pdf,.txt,.doc,.docx">
        <input type="submit" value="Enviar Arquivo">
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id </th>
                <th scope="col">Usuário </th>
                <th scope="col">Caminho do Arquivo </th>
                <th scope="col">Visualizar </th>
                <th scope="col">Download </th>
            </tr>
        </thead>

        <tbody>
            <?php
            include_once("../Controllers/FileController.php?action=ListFiles");
            ?>
            <tr></tr>
        </tbody>
    </table>
</body>

</html>