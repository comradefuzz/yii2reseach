<?
namespace frontend\components\ssl;

use Yii;
use yii\base\Component;

use frontend\components\ssl\DriverOpenSSL;
use frontend\components\ssl\DriverCryptoPro;

class SSL extends Component {
    protected $driverMap = [
        'OpenSSL'   => 'frontend\components\ssl\DriverOpenSSL',
        'CryptoPro'   => 'frontend\components\ssl\DriverCryptoPro',
    ];

    public function getDriver($driver, $hashAlgo) {
        return new $this->driverMap[$driver]($hashAlgo);
    }   
}