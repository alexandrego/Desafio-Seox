<?php
    $url = "https://artenaunha.com/wp-json/wc/v3/products?consumer_key=ck_dc91dc14888c82b962d5d9a49ed081e6a408b974&consumer_secret=cs_c8aac74b71218a8d8ce0ccabe6c0299c37607404";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));

    var_dump($resultado);
?>