<?php
    $recebe_produto = $_GET['product'];

    if(empty($recebe_produto)) {
        header("Location: ../index.php");

    } else {  

        require_once ('variaveis.php');

        require_once ('head.php');

        require_once ('header.php');

        ?>
            <div id="saudacoes_checkout">
                <h2>Olá, Gostariamos de lhe conhecer</h2>
            </div>
            <div id="form_geral">
            <div id="form">
                <form action="routes/checkout_product.php" method="post">

                    <div>
                        <h2>Informações pessoais</h2>
                    </div>               
                    
                    <div id="add_detalhe_form">
                    <div id="field_form">
                        <label>Primeiro nome</label></br>
                        <input type="text" name="billing_first_name" id="billing_first_name" class="campos_field" placeholder="Digite aqui seu nome" required />
                    </diV>

                    <div id="field_form">                    
                        <label>Último nome</label></br>
                        <input type="text" name="billing_last_name" id="billing_last_name" class="campos_field" placeholder="Digite aqui seu último nome" required />
                    </div>
                    
                    <div id="field_form">
                        <label>CPF</label></br>
                        <input type="text" name="billing_cpf" id="billing_cpf" class="campos_field" placeholder="Digite aqui seu CPF" required />
                    </div>
                    
                    <div id="field_form">
                        <label>Celular</label></br>
                        <input type="text" name="billing_cellphone" id="billing_cellphone" class="campos_field" placeholder="Digite aqui seu número com WhatsApp" required />
                    </div>
                    
                    <div id="field_form">
                        <label>E-mail</label></br>
                        <input type="text" name="billing_email" id="billing_email" class="campos_field" placeholder="Digite aqui seu melhor e-mail" required />
                    </div>
                    </div>
            </div>
            <div id="form_info_entrega">
                    <div>
                        <h2>Informações para entrega</h2>
                    </div>
                    
                    <div id="add_detalhe_form">
                    <div id="field_form">
                        <label>Endereço</label></br>
                        <input type="text" name="billing_address" id="billing_address" class="campos_field" placeholder="Digite aqui o nome da sua Rua, Av. e etc" required />
                    </div>
                    
                    <div id="field_form">
                        <label>Número</label></br>
                        <input type="text" name="billing_number" id="billing_number" class="campos_field" placeholder="Digite aqui o número da sua casa" required />
                    </div>
                    
                    <div id="field_form">
                        <label>Bairro</label></br>
                        <input type="text" name="billing_neighborhood" id="billing_neighborhood" class="campos_field" placeholder="Digite aqui seu bairro" required />
                    </div>
                    
                    <div id="field_form">
                        <label>Cidade</label></br>
                        <input type="text" name="billing_city" id="billing_city" class="campos_field" placeholder="Digite aqui sua cidade" required />
                    </div>
                    
                    <div id="field_form">
                        <label>Estado</label></br>
                        <input type="text" name="billing_state" id="billing_state" class="campos_field" placeholder="Digite aqui o estado em que você mora" required />
                    </div>
                    
                    <div id="field_form">
                        <label>CEP</label></br>
                        <input type="text" name="billing_postcode" class="campos_field" placeholder="Digite aqui o CEP da sua rua" id="billing_postcode" required />
                    </div>
                    </div>
            </div>
            </div>
        <?php

        require_once ('routes/find_product.php');
        
        ?>
            <div id="ident_checkout_product">
                <div>
                    <h2>Informações da compra</h2>
                </div>

                <div id="info_produto">
                <div id="img_produto_checkout">
                    <img src="<?php echo $imagem->src; ?>" id="mostra_img_checkout" />
                </div>
                
                <div id="img_produto_checkout">
                    <p><?php echo $resultado->name; ?></p>
                </div>

                <div id="img_produto_checkout">
                    <p>
                        <?php echo 'Unidade R$ <span id="up_preco">' . number_format($resultado->price,2,',','.') . '</span></br>';?>
                    </p>
                    </a>
                </div>

                <div id="img_produto_checkout">
                    <label>Quantidade</label>
                    <select name="quant_produto" id="quant_produto" onchange="calcula_total()" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div id="img_produto_checkout">
                    <label>Total </label>
                    <span id='mostra_soma_total'><?php echo 'R$ ' . number_format($resultado->price,2,',','.') . '</br>';?></span>
                </div>
                </div>
            </div>
                    
                <div id="div_btn_comprar">
                    <div id="centraliza_btn_compra">
                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $recebe_produto;?>" />
                        <input type="submit" name="btn_fim_compra" id="btn_fim_compra" value="Finalizar compra" />
                    </div>
                </div>
            </form>
        <?php

        require_once ('footer.php');
    }
?>


<script>
    function calcula_total() {
        var qtyEscolhido = document.getElementById("quant_produto").value;//<--Pega quantidade do selectBox
        var precoJava = <?=$resultado->price?>;//<--Pega preço do produto
        var precoReal = precoJava.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });//<--Formata preço para moeda Real
        var valorGeral = precoJava*qtyEscolhido;//<--Calcula preço vezes a quantidade escolhida
        var valorGeralForm = valorGeral.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });//<--Formata preço geral para moeda real
        document.getElementById("mostra_soma_total").innerHTML = "" + valorGeralForm;//<--Resultado do calculo preço vezes quantidade
    }
</script>