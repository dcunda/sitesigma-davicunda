<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

<h1>Produto</h1>

<?php 
            // Cria uma variável contendo o comando SQL
            $sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = {$id}";
            // Executa o comando SQL
            $exec = mysqli_query($conn, $sql);
            // Informar a quantidade de registros de dados
            $numProdutos = mysqli_num_rows($exec);
            // Percorre todos os dados extraídos do banco
            $dados = mysqli_fetch_assoc($exec);
            ?> 

<div class="detalhe">
    <h3><?php echo $dados['Nome'];?></h3>
    <p><?php echo $dados['Descricao']?></p>
    <img src="./content/<?php echo $dados['Imagem']?>">
    <h2>R$ <?php echo $dados['Preco']?></h2>

</div>


<div class="botao">
    <a href="index.php" class="btn btn-primary">Voltar</a>
    <a href="#" class="btn btn-primary">Comprar</a>


</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>