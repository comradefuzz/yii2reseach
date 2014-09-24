<?
namespace frontend\components\ssl;

use frontend\components\ssl\DriverSSL;

class DriverCryptoPro extends DriverSSL
{
    public function verify( $data , $signature , $pub_key_id , $signature_alg = '')
    {
        echo 'CryptoPro Driver recieved: ' . print_r(func_get_args(), true);
    }
}