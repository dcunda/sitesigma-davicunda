<?php
include_once '../includes/_dados.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

        mysqli_query($conexao, $sql);

        header('location: ./categoria-lista.php');

        break;
    
    case 'salvar':
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if ($_FILES['foto']['size'] > 0) {
            $uploaddir = '../imagens/categoria/';

            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

            $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;

            $uploadfile = $uploaddir . $nomearquivo;

            move_uplouded_file($_FILES['foto']['tmp_name'], $uploadfile);
            
        }else{
            $nomearquivo = $_POST['imagem'];
        }
        if (!isset($_POST['id']) || empty($_POST['id'])){
            $sql = "INSERT INTO `categorias`" //continuar aqui
            
        }

                 
        
        break;
}

?>