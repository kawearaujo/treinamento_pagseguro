<?php
require_once "config/config.php";
header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
$resposta=null;
if(isset($_POST['acao'])){
    call_user_func($_POST['acao']);
}
if(isset($_POST['notificationCode'])){
    call_user_func('postback');
}
// $_POST["notificationCode"]
echo json_encode($resposta);

return $resposta;

function comprar(){


    global $mysqli,$resposta;
    $id = $_POST['id']; 
    $produto = $mysqli->query("SELECT * FROM produto as p WHERE p.id = $id ");//SELECT
    if ($produto){
        $produto = mysqli_fetch_assoc($produto);
        $checkout = checkout($produto);
        $resposta=$checkout;
        
    }
    
}

function checkout($item) {

    $curl = curl_init();

    // $pagseguro_postback = "https://webhook.site/0f04d4db-78df-45a9-9161-bee86b9615ad";
    $pagseguro_postback = "https://kawe.re9agencia.com.br/home/funcoes.php";

    $data = [
        "itemId1" => $item['id'],
        "itemDescription1" => $item['descricao'],
        "itemAmount1" => $item['valor'],
        "itemQuantity1" => 1,
        "itemWeight1" => 0,
        "currency" => "BRL",
        "shippingType" => 1,
        "notificationURL" => $pagseguro_postback, // chamando uma variavel por referencia
        "installmentQuantity" => 12,
    ];

    $checkout = [
        CURLOPT_URL => "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout/?email=kawepetro@gmail.com&token=221DF1406C454C69A4D1CD7A63579241",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
        ],
    ];
    curl_setopt_array($curl, $checkout);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return ["erro" => $err];
    } else {
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);
        return $array;
    }
}

function salvarCodTransacao(){
    global $mysqli,$resposta;
    // var_dump($_POST["transactionCode"]);
    $transactionCode = str_replace("-", "", $_POST["transactionCode"]);
    // $transactionCode = $_POST["transactionCode"];
    // var_dump($transactionCode);
    
    $transactionUrl = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions";

    $checkoutStatus = transactionStatus($transactionUrl, $transactionCode);
    // echo "teste1";
    // var_dump($checkoutStatus);
    // exit;
    // echo "teste2";
    // echo $resposta;
    // echo "teste3";
    // echo "teste4";
    // echo "teste5";
    
    if ($checkoutStatus["status"]) {
        $compra= $mysqli->query("SELECT * FROM compras WHERE cod_transacao = $transactionCode LIMIT 1");
        // echo "teste2";
        if ($compra) {
            $novostatus = $checkoutStatus["status"];
            $compra= $mysqli->query("UPDATE compras SET status = $novostatus WHERE cod_transacao = $transactionCode ");
            // echo "teste3";
            
        } else {
            $item_id = $checkoutStatus["items"]["item"]["id"];
            $status = $checkoutStatus["status"];
            $compra = $mysqli->query("INSERT INTO compras (id_produto, cod_transacao, status) VALUES ($item_id,'$transactionCode','$status')");
            // echo "teste4";
        }
        return $compra;
    }
// $json = "success";
// $json_str ='{[{"sucess":"true"},{"compra":'.$compra.'}]}';
// var_dump($resposta='{"success":"true", "compra" => '.$compra.'}');
// echo ($resposta='{"success":"true", "compra" => '.$compra.'}');
// $resposta = mysqli_num_rows($compra);
// echo ;
    return $resposta;
    // return ('{{"success":"true"}, {"compra" => '.$compra.'}}');

    // return $json_str;
}

function transactionStatus($base_url, $code){
    $pagseguro_token = "221DF1406C454C69A4D1CD7A63579241";
    $pagseguro_vendedor = "kawepetro@gmail.com";
    // $code = str_replace("-", "", $code);
    $curl = curl_init();
    $checkout = [
        CURLOPT_URL => "$base_url/$code?email=$pagseguro_vendedor&token=$pagseguro_token" ,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ];

    curl_setopt_array($curl, $checkout);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
// var_dump($response);
    if ($err) {
        return ["erro" => $err];
    } else {
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);
        return $array;
    }
    
}

function postback()
    {
        global $mysqli;
        // Código da Notificação.
        $notificationCode = $_POST["notificationCode"];
        $notificationUrl = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/";
        // echo $notificationCode;
        // 1. verificar status do checkout.
        $checkoutStatus = transactionStatus($notificationUrl, $notificationCode);
        $code=str_replace("-", "", $checkoutStatus["code"]);
        if ($checkoutStatus["status"]) {
            $compra = $mysqli->query("SELECT * FROM compras WHERE cod_transacao = '$code'");
            // echo "teste2";
            $compra = mysqli_fetch_assoc($compra);
            // var_dump($compra);
            if ($compra) {
                $novostatus = $checkoutStatus["status"];
                $compra= $mysqli->query("UPDATE compras SET status = $novostatus WHERE cod_transacao = '$code' ");
                // echo "teste3";
                
            } else {
                $item_id = $checkoutStatus["items"]["item"]["id"];
                $status = $checkoutStatus["status"];
                $compra = $mysqli->query("INSERT INTO compras (id_produto, cod_transacao, status) VALUES ($item_id,'$code','$status')");
                // echo "teste4";
            }
            return $compra;
        }

    }


?>