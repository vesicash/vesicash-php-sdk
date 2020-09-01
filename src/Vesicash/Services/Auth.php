<?php
namespace Vesicash\Services;

use Vesicash\Vesicash\Request;

class Auth extends Request {
    /**
     * Login endpoint
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    public function loginViaUsername($data) {
        $request = $this->request('auth/login', ['username' => $data['username'], 'password' => $data['password']]);

        if($request->status == 'ok' && $request->code == 200) {
            return $request->data;
        } else {
            return $request->message;
        }
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