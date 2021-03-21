<?php
namespace Vesicash;
use Exception;
use GuzzleHttp\Client;
use VesicashServices;

class Request extends VesicashServices {
    /**
     * Build Request To Endpoint
     * @param $endpoint
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function request($endpoint, $data) {

        $headers = array('Accept' => 'application/json', 'v-private-key' => $this->private_key);

        $client = new Client([
            'headers' => $headers,
            'http_errors' => false
        ]); //GuzzleHttp\Client

        $result = $client->post($this->getEnvUrl() . $endpoint, [
            'json' => $data
        ]);

        $response = $result->getBody()->getContents();
        $responseCode = $result->getStatusCode();

        return $response;

    }

    /**
     * Check data array for required fields
     * @param $checks
     * @param $data
     * @throws Exception
     */
    protected function required($checks, $data) {
        foreach($checks as $item) {
            if(!array_key_exists($item, $data)) {
                throw new Exception("$item does not exist.");
            }
        }
    }

    /**
     * dd (copied from laravel)
     * @param $checks
     * @param $data
     * @throws Exception
     */
    protected function dd($data) {
        var_dump($data);
        die;
    }
}
