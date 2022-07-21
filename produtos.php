<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Produtos</h1>

<div class="container">
    <div class="row">

        <?php 
            // Cria uma variável contendo o comando SQL
            $sql = "SELECT * FROM produtos WHERE Ativo = 1";
            // Executa o comando SQL
            $exec = mysqli_query($conn, $sql);
            // Informar a quantidade de registros de dados
            $numProdutos = mysqli_num_rows($exec);
            // Percorre todos os dados extraídos do banco
            while($dados = mysqli_fetch_assoc($exec)){
            ?>    
        <div class="card mr-3 mt-3" style="width: 18rem;">
            <img src="./content/<?php echo $dados['Imagem']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['Nome']?></h5>
                <p class="card-text"><?php echo $dados['Descricao']?></p>
                <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID']?>" class="btn btn-primary">Detalhe</a>
            </div>
        </div>
        <?php
        }
        ?>


    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>