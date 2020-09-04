<?php
include('autoload.php');

use Vesicash\Services\Auth;

class VesicashServices {
	protected $private_key;
    protected $mode;
	public function __construct($private_key, $mode = 'sandbox') {
		$this->private_key = $private_key;
		$this->mode = $mode;
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
                return new Auth($this->private_key);
                break;
        }
    }
}