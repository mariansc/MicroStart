<?php
    session_start();
    include_once '../controller/verificaLogin.php'; 
    include_once '../model/ProdutoDao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    <main>
        <nav>
            <a href="">Moda</a>
            <a href="">Tecnologia</a>
            <a href="">Eletrodomésticos</a>
            <a href="">Construção</a>
            <a href="">Outros</a>
            <a href="../index.php">home</a>
        </nav>
        <h1>Produtos</h1>

<?php
        $produtoDao = new ProdutoDao();
        $linhas = $produtoDao->read_prod();

        foreach($linhas as $linha) {
?>
                <div id="produtos" class="col-md-6">
                    <a href="produto.php?nome=<?= $linha['produto'] ?>">
                        <img src="img/produtos/teste.jpg" alt="">
                        <input readonly type="text" value="<?= $linha['produto']?>" id="cxProduto">
                        <input readonly type="number" value="<?= $linha['preco_lote']?>" id="cxPreco">
                        <button  class="btn btn-outline-primary btn-lg">Ver mais</button>
                    </a>
                </div>
<?php
        }
?>
    </main>
</body>
</html>