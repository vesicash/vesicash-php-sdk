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
            $this->required(['account_type', 'business_type', 'email_address', 'country'], $data);
            return $this->request('auth/signup', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
    /**
     * Upgrade User Account
     * @param $data
     * @return array
     * @throws Exception
     */
    public function upgradeAccount(array $data) {
        try {
            $this->required(['account_id', 'business_type', 'business_name'], $data);
            return $this->request('auth/user/upgrade/account', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
    /**
     * Renew User
     * @param $data
     * @return array
     * @throws Exception
     */
    public function renew(array $data) {
        try {
            $this->required(['account_id'], $data);
            return $this->request('auth/renew', $data);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}