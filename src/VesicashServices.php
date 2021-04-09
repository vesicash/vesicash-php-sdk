<?php
include('autoload.php');

use Vesicash\Services\Auth;
use Vesicash\Vesicash\Admin;
use Vesicash\Vesicash\Services\Notifications;
use Vesicash\Vesicash\Services\Payment;
use Vesicash\Vesicash\Services\Subscription;
use Vesicash\Vesicash\Services\Transactions;
use Vesicash\Vesicash\Services\Upload;
use Vesicash\Vesicash\Services\Verification;

class VesicashServices {
	public $private_key;
    public $mode;

    public function __construct($private_key, $mode = 'sandbox')
    {
        $this->private_key = $private_key;
        $this->mode = $mode;
    }

    /**
     * Set Private Key
     * @param $private_key
     * @return $this
     */
	public function setKey($private_key) {
	    $this->private_key = $private_key;
	    return $this;
    }

    /**
     * Set app mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode = 'sandbox') {
	    $this->mode = $mode;
	    return $this;
    }

    /**
     * Get environment endpoint
     * @return string
     */
	public function getEnvUrl() {
	    if($this->mode == 'sandbox') {
	        return 'https://sandbox.api.vesicash.com/v1/';
        } elseif($this->mode == 'live') {
	        return 'https://api.vesicash.com/v1/';
        }
    }

    /*
     * Call intended service
     * @param $service
     * @return class
     */
    public function service($service) {
	    switch ($service) {
            case "auth":
                return new Auth($this->private_key, $this->mode);
                break;

            case 'admin':
                return new Admin($this->private_key, $this->mode);
                break;

            case 'transactions':
                return new Transactions($this->private_key, $this->mode);
                break;

            case 'payment':
                return new Payment($this->private_key, $this->mode);
                break;

            case 'subscription':
                return new Subscription($this->private_key, $this->mode);
                break;

            case 'upload':
                return new Upload($this->private_key, $this->mode);
                break;

            case 'notifications':
                return new Notifications($this->private_key, $this->mode);
                break;

            case 'verification':
                return new Verification($this->private_key, $this->mode);
                break;
        }
    }
}