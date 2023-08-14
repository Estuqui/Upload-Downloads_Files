<?php 

    require_once("./Model/ModelAnexo.php");
    require_once("./Configuration/Config.php");



    class UploadController {
        private $model;
         
        public function __construct()
        {
            $db = new DataBase(); 
            $this->model = new Anexo($db->connect());
        }

        public function UploadArquivo($nome, $caminho){
            $this->model->UploadArquivo($nome, $caminho);
        }

        public function DisplayArquivo($id){
            //add lógica exibir arquivo
        }
    }

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