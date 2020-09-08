<?php
include('autoload.php');

use Vesicash\Services\Auth;
use Vesicash\Vesicash\Admin;
use Vesicash\Vesicash\Services\Notifications;
use Vesicash\Vesicash\Services\Payment;
use Vesicash\Vesicash\Services\Subscription;
use Vesicash\Vesicash\Services\Transactions;
use Vesicash\Vesicash\Services\Upload;

class VesicashServices {
	protected $private_key;
    protected $mode;

	public function __construct() {
		// Vesicash v1
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
                return new Auth;
                break;

            case 'admin':
                return new Admin;
                break;

            case 'transactions':
                return new Transactions;
                break;

            case 'payment':
                return new Payment;
                break;

            case 'subscription':
                return new Subscription;
                break;

            case 'upload':
                return new Upload;
                break;

            case 'notifications':
                return new Notifications;
                break;
        }
    }
}