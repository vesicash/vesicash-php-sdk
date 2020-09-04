<?php
namespace Vesicash\Services;

use Vesicash\Request;

class Auth extends Request {
    /**
     * Login endpoint
     * @param $data
     * @return mixed
     */
    public function loginViaUsername($data) {
        return $this->request('auth/login', ['username' => $data['username'], 'password' => $data['password']]);
    }

    public function loginViaPhoneNumber($data) {
        $request = $this->request('auth/login', ['email_address' => $data['email_address'], 'phone_number' => $data['phone_number']]);

        if($request->status == 'ok' && $request->code == 200) {
            return $request->data;
        } else {
            return $request->message;
        }
    }
}