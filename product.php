<?php
    $recebe_produto = $_GET['product'];

    if(empty($recebe_produto)) {
        header("Location: ../index.php");

    } else {  

        require_once ('variaveis.php');

        require_once ('head.php');

        require_once ('header.php');

        require_once ('routes/find_product.php');
        
        ?>
            <div id="especialista">
                <!-- <a href="index.php" id="retorna">
                    <div id="btn_voltar">
                        <p id="click_volta">
                            <i class="fas fa-long-arrow-alt-left"></i> Voltar
                        </p>
                    </div>
                </a> -->
                
                <div id="mostra_titulo">
                    <p><?php echo $resultado->name; ?></p>
                </div>

                <div id="wordpress">
                    <img src="<?php echo $imagem->src; ?>" id="exibe_img" />
                </div>

                <div id="php">
                    <p>
                        <?php echo 'R$ <span id="up_preco">' . number_format($resultado->price,2,',','.') . '</span></br>';?>
                    </p>
                   
                    <a href="checkout.php?product=<?php echo $resultado->id; ?>" id="retorna">
                        <div id="btn_comprar">
                            <p id="click_compra">
                                Comprar
                            </p>
                        </div>
                    </a>
                </div>

                <div id="cms">
                    <p>
                        <?php echo $resultado->description; ?>
                    </p>
                </div>
            </div>
        <?php     

        require_once ('footer.php');
    }
?>