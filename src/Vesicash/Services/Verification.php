<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Verification extends Request {
    /**
     * BVN Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function bvnVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'bvn'], $data);
            return $this->request('verification/bvn/verify', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Email Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function emailVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('verification/email', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Phone Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function phoneVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('verification/phone', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Email Verification Token
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function emailVerificationToken(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'token'], $data);
            return $this->request('verification/email/verify', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Resend Email Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function resendEmailVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['email_address'], $data);
            return $this->request('verification/email/resend', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Resend Phone Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function resendPhoneVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['phone_number'], $data);
            return $this->request('verification/phone/resend', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Phone Verification Code
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function phoneVerificationCode(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'code'], $data);
            return $this->request('verification/phone/verify', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Upload Verification for Document
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function uploadVerificationDocument(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'type', 'data'], $data);
            return $this->request('verification/id/upload', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * ID Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function idVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'type', 'id'], $data);
            return $this->request('verification/id/verify', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Verify Identification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function verifyIdentification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'type'], $data);
            return $this->request('verification/check', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Authorize Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function authorizeVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'ip', 'device'], $data);
            return $this->request('verification/authorize', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch All Verification
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function fetchAllVerification(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('verification/fetch', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}