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
    public function loginViaUsername($data): array {
        try {
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
    public function loginViaPhoneNumber($data): array {
        try {
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
    public function signup($data): array {
        try {
            return $this->request('auth/signup', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}