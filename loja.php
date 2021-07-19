<?php
        require_once ('variaveis.php');

        require_once ('head.php');

        require_once ('header.php');

        require_once ('routes/list_products.php');

        ?>
        <div id="loop_geral">
            <div id="menu_loja">
                <div id="filtro">
                    <p>
                        Filtrar por:
                    </p>
                </div>
                
                <a href="loja.php" id="filtra_pro">
                    <div id="edita_link">
                        <p>
                            Todos os produtos
                        </p>
                    </div>
                </a>

                <a href="#" id="filtra_pro">
                    <div id="edita_link">
                        <p>
                            Top 5 mais vendidos
                        </p>
                    </div>
                </a>
            </div>
            
            <div id="lista_produtos_loja">
                <?php

                foreach ($resultado as $produto) {
                    // var_dump($produto);

                    foreach ($produto->images as $imagem) {

                    }
                    ?>
                    <a href="product.php?product=<?php echo $produto->id; ?>" id="loop_link">
                        <div id="loop_produto">
                            <div id="loop_img">
                                <img src="<?php echo $imagem->src; ?>" id="mostra_img" />
                            </div>
                            <?php
                                echo $produto->name . '</br>';                    
                            ?>
                            <p id="loop_preco">
                                <?php echo 'R$ <span id="up_preco">' . number_format($produto->price,2,',','.') . '</span></br>';?>
                            </p>
                        </div>
                    </a>
                    <?php
                }
                ?>
                </div>
            </div>
            <?php

        require_once ('footer.php');
    ?>