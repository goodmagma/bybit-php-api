<?php

namespace ByBit\SDK;

/**
 * Api Response Wrapper
 *
 */
class ApiResponse {
    
    /**
     * @var retCode success value
     */
    const SUCCESS = 0;
    
    /**
     * @var Response $httpResponse
     */
    protected $httpResponse;

    protected $body;

    public function __construct($guzzleResponse) {
        $this->httpResponse = $guzzleResponse;
    }

    public function getBody() {
        if (is_null($this->body)) {
            $this->body = json_decode($this->httpResponse->getBody()->getContents(), true);
        }
        return $this->body;
    }

    public function getApiCode() {
        $body = $this->getBody();
        return isset($body['retCode']) ? $body['retCode'] : '';
    }

    public function getApiMessage() {
        $body = $this->getBody();
        return isset($body['retMsg']) ? $body['retMsg'] : '';
    }

    public function getHttpResponse() {
        return $this->httpResponse;
    }

    public function isSuccessful() {
        if ($this->httpResponse->getStatusCode() == 200) {
            if ($this->getApiCode() == self::SUCCESS) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function getApiData() {
        $body = $this->getBody();
        if (!isset($body['result'])) {
            return null;
        }
        return $body['result'];
    }

}