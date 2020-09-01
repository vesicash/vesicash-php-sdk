<?php
namespace Vesicash\Vesicash;
use Exception;
use GuzzleHttp\Client;
use Vesicash;

class Request extends Vesicash {
    /**
     * Build Request To Endpoint
     * @param $endpoint
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function request($endpoint, $data) {
        try {
            $headers = array('Accept' => 'application/json', 'v-private-key' => $this->private_key);

            $client = new Client([
                'headers' => $headers,
                'http_errors' => false
            ]); //GuzzleHttp\Client

            $result = $client->post($this->getEnvUrl() . $endpoint, [
                'json' => $data
            ]);

            return $result->getBody()->getContents();
        } catch (Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}