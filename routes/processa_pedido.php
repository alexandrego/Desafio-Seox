<?php
    include_once("conexao.php");

    $primeiro_nome  = $_POST['primeiro_nome'];
    $ultimo_nome    = $_POST['ultimo_nome'];
    $cpf            = $_POST['cpf'];
    $celular        = $_POST['celular'];
    $email          = $_POST['email'];
    $endereco       = $_POST['endereco'];
    $numero         = $_POST['numero'];
    $bairro         = $_POST['bairro'];
    $cidade         = $_POST['cidade'];
    $estado         = $_POST['estado'];
    $cep            = $_POST['cep'];
    $quant_prod     = $_POST['quant_prod'];
    $id_prod        = $_POST['id_prod'];
    $prod_price     = $_POST['prod_price'];
    $total          = $_POST['total'];

    //Campos para serem verificados e inseridos na tabela wp_users
    // $email -> user_email
    if(empty($email)){
        //retorna para o inicio
    } else {
        $verifica_usuario = "SELECT * FROM wp_users WHERE user_email = $email";

        if(empty($verifica_usuario)){
            $insere_usuario = "INSERT INTO wp_users(ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('', '$primeiro_nome', '', '$primeiro_nome', '$email', '', now(), '', '', '$primeiro_nome')";
        }
        
        $verifica_usuario_novamente = "SELECT * FROM wp_users WHERE user_email = $email";

        if($verifica_usuario_novamente) {
            $id_user        = $verifica_usuario_novamente['ID'];
            $nome           = $verifica_usuario_novamente['user_login'];
            $email          = $verifica_usuario_novamente['user_email'];

            echo $id_user . ' | ' . $nome . ' | ' . $email;
        }
    }
    //
    //Verifica se existe o usúario atraves do email informado
    //Se existe pega o id
    //
    //Se não existe insere
    //Se inserir, verifica novamente se existe
    //Pega o id do cliente
    //
    //Insere produto na tabela wp_wc_order_product_lookup
    //
    //Se insere na tabela acima
    //Insere na tabela wp_posts
    //
    //Se insere na tabela acima
    //Insere na tabela wp_wc_order_stats
    //
    //Se insere todos mostra tela de compra realizada com sucesso.
    //
    //
    //
    //
    //
    //Campos para serem inseridos na tabela
?>