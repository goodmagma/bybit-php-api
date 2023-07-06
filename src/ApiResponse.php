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

    /**
     * Constructor
     * 
     * @param unknown $guzzleResponse
     */
    public function __construct($guzzleResponse) {
        $this->httpResponse = $guzzleResponse;
    }

    /**
     * Get body content
     * @return mixed
     */
    public function getBody() {
        if (is_null($this->body)) {
            $this->body = json_decode($this->httpResponse->getBody()->getContents(), true);
        }
        return $this->body;
    }

    /**
     * 
     * @return number|mixed
     */
    public function getApiCode() {
        $body = $this->getBody();
        return isset($body['retCode']) ? $body['retCode'] : -1;
    }

    /**
     * 
     * @return string|mixed
     */
    public function getApiMessage() {
        $body = $this->getBody();
        return isset($body['retMsg']) ? $body['retMsg'] : '';
    }

    /**
     * 
     * @return \ByBit\SDK\Response
     */
    public function getHttpResponse() {
        return $this->httpResponse;
    }

    /**
     * 
     * @return boolean
     */
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