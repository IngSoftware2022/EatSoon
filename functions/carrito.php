<?php

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}
function agregarAlCarrito($con, $data)
{
    if ($con && $data) {

        $query = $con->prepare(
            'INSERT INTO carrito (cantidad, producto_id, usuario_CI, code)
                            VALUES (:cantidad, :producto_id, :usuario_CI, :code)'
        );

        try {
            $query->execute([
                ':cantidad' => 1,
                ':producto_id' => $data['producto_id'],
                ':usuario_CI' => $data['usuario_CI'],
                ':code' => $data['code']
            ]);
            return true;
        } catch (Exception $e) {
            var_dump( $e->getMessage());
        }
        return false;
    } else {
        return false;
    }
}
function totalProductosEnCarrito($con, $data){
    $code = $data["code"];
    $query = $con->prepare("SELECT * FROM carrito WHERE code = '$code'");
    $query->execute();
    return count($query->fetchAll());
}