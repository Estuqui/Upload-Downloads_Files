if(isset($_FILES["arquivo"])){
$arquivo = $_FILES["arquivo"];

if($arquivo["Error"]){
}else{
echo "Falha ao Enviar o Arquivo";
}

if($arquivo["size"] > 2097152){
}else{
echo "Arquvo não suportado, tamanho máximo permitido é de: 2MB";
}

$pasta = "Arquivos/";
$nomeDoArquivo = $arquivo["nome"];
$novoNomeDoArquivo = uniqid();
$extensao = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

if($extensao != "jpg" && $extensao != "png" && $extensao != "pdf"){
}else{
echo "Tipo de arquivo inválido, por favor envie somente arquivos do tipo jpg, png e/ou pdf";
}
}

$caminho = $pasta . $novoNomeDoArquivo . "." . $extensao;
$deu_certo = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $caminho);
if($deu_certo){
$mysqli->query("INSERT INTO arquivos (caminho, nome) VALUES ('$nomeDoArquivo','$caminho')") or die($mysqli->error);

echo "Arquivo enviado com sucesso <a target='_blank' href='arquivos/$novoNomeDoArquivo.$extensao'>Clique aqui</a>";
}else {
echo "Falha ao enviar arquivo";
}