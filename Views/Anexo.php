<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/AnexoEstilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>FIle Upload</title>
</head>

<body>
    <nav>

        <div class="logo">
            <a href="#"> <i class="bi bi-box-seam-fill"></i> </a>
        </div>

        <ul>
            <li> <a href="#"> Suporte <i class="bi bi-person-fill-gear"></i> </a> </li>
            <li> <a href="#"> Exit <i class="bi bi-box-arrow-right"></i></a> </li>
        </ul>

    </nav>
    <h1>Upload de Arquivos <i class="bi bi-cloud-upload-fill"></i></h1>
    <form action="#" method="POST" enctype="multipart/form-data"></form>
    <input type="file" name="file" accept=".pdf">
    <input type="submit" value="Enviar Arquivo">

</body>


</html>