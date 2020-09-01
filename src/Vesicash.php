<?php
use Vesicash\Services\Auth;

class Vesicash {
	protected $private_key;
    protected $mode;
    public $auth;
	public function __construct($private_key, $mode = 'sandbox') {
		$this->private_key = $private_key;
		$this->mode = $mode;

		// Initialize Services
        $this->auth = new Vesicash\Services\Auth;
	}

	public function getEnvUrl() {
	    if($this->mode == 'sandbox') {
	        return 'https://sandbox.api.vesicash.com/v1/';
        } elseif($this->mode == 'live') {
	        return 'https://api.vesicash.com/v1/';
        }
    }
}