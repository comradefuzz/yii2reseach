<?

namespace frontend\components\ssl;


abstract class DriverSSL implements SSLDriverInterface {
    const HASH_ALGO_SHA1 = 'SHA1';

    protected $hashAlgo;

    public function __construct($hashAlgo = null) 
    {
        $this->hashAlgo = $hashAlgo;
    }


    abstract public function verify( $data , $signature , $pub_key_id , $signature_alg = '');
}
?>