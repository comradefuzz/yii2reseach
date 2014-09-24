<?

namespace frontend\components\ssl;


abstract class DriverSSL implements SSLDriverInterface {
    

    protected $hashAlgoMap = []; // доступные драйверу алгоритмы

    public function __construct($hashAlgo = null) 
    {
        $this->hashAlgo = $this->getHashAlgo($hashAlgo);
    }

    protected function getHashAlgo($algo) {
        if (!array_key_exists($algo, $this->hashAlgoMap)) {
            /*
            * @todo Создать SSLDriverException
            */
            throw new \Exception("Unknown hash algorhythm", 1);
        }

        return $this->hashAlgoMap[$algo];
    }

    abstract public function verify( $data , $signature , $pub_key_id , $signature_alg = '');
}
?>