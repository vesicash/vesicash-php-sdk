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
        if(is_array($checks)) {
            if(count($checks) > 0) {
                foreach($checks as $check) {
                    if(!in_array($check, $data)) {
                        throw new Exception("$check is required.");
                    }
                }
            }
        }
    }
}