<?php
    $primeiro_nome  = $_POST['billing_first_name'];
    $ultimo_nome    = $_POST['billing_last_name'];
    $cpf            = $_POST['billing_cpf'];
    $celular        = $_POST['billing_cellphone'];
    $email          = $_POST['billing_email'];
    $endereco       = $_POST['billing_address'];
    $numero         = $_POST['billing_number'];
    $bairro         = $_POST['billing_neighborhood'];
    $cidade         = $_POST['billing_city'];
    $estado         = $_POST['billing_state'];
    $cep            = $_POST['billing_postcode'];
    $quant_prod     = $_POST['quant_produto'];
    $id_prod        = $_POST['product_id'];
    $prod_price     = $_POST['product_price'];
    $total          = $quant_prod*$prod_price;
    
    $iniciar = curl_init('processa.php');
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    $dados = array(
        'billing_first_name'    => $primeiro_nome,
        'billing_last_name'     => $ultimo_nome,
        'billing_cpf'           => $cpf,
        'billing_cellphone'     => $celular,
        'billing_email'         => $email,
        'billing_address'       => $endereco,
        'billing_number'        => $numero,
        'billing_neighborhood'  => $bairro,
        'billing_city'          => $cidade,
        'billing_state'         => $estado,
        'billing_postcode'      => $cep,

        'quant_produto'         => $quant_prod,
        'mostra_soma_total'     => $total,
        'product_id'            => $id_prod,
    );

    // var_dump($dados);
    curl_setopt($iniciar, CURLOPT_POST, true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);
    curl_exec($iniciar);
    curl_close($iniciar);

