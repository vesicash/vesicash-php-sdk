<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Upload extends Request
{
    /**
     * Upload a file
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function upload($data) {
        $this->required(['files'], $data);
        // Make sure the required data is being passed.
        try {
            return $this->request('upload/file', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}