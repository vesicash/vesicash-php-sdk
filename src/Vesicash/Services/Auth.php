<?php
namespace Vesicash\Services;

use Exception;
use Vesicash\Request;

class Auth extends Request {
    /**
     * Login via username endpoint
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function loginViaUsername(array $data) {
        try {
            $this->required(['username', 'password'], $data);
            return $this->request('auth/login', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * Login via phone number
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function loginViaPhoneNumber(array $data) {
        try {
            $this->required(['username', 'phone_number'], $data);
            return $this->request('auth/login', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * Sign up a user/customer
     * @param $data
     * @return array
     * @throws Exception
     */
    public function signup(array $data) {
        try {
            return $this->request('auth/signup', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}