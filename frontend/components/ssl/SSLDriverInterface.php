<?
namespace frontend\components\ssl;

interface SSLDriverInterface
{
    public function verify( $data ,  $signature , $pub_key_id , $signature_alg = '');
}