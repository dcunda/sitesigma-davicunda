<?php
//inclui o banco
include_once '../includes/_banco.php';
//inclui o head
include_once '../includes/_head.php';

if (isset($_GET['id']) || !empty($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM categorias";
    $resultado = mysqli_query($conn,$sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    }else{
      $id = '';
      $dados['Nome'] = '';
      $dados['Descrição'] = '';
      $dados['Imagem'] = '';  

    
    }

include_once '_menu.php';
?>

<main>
    <h2>Admistração de Categorias</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form action="categoria-processa.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="salvar" name="acao">
        <input type="text" value="<?php echo $dados['Imagem'];?>" name="imagem">
        <input type="text" name="id" value="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao"><?php echo $dados['Descricao'];?></textarea><br>
        <label for="imagem">Imagem:</label><br>
        <?php
        if (!empty($dados['Imagem']) ) {
        ?>
        <img src="../imagem/categorias/<?php echo $dados['Imagem'];?>" width="150" /><br>
        <?php
            
        }
        ?>
    <input type="file" name="foto">
     <hr>   
    <input type="submit" value="Enviar">

    </form>
</main>   


<?php
//inclui o footer do painel admin
include_once './_footer.php';

?>