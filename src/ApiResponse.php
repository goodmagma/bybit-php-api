<?php

namespace ByBit\SDK;

use Psr\Http\Message\ResponseInterface;

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
     * @var ResponseInterface $httpResponse
     */
    protected $httpResponse;

    protected $body;

    /**
     * Constructor
     * 
     * @param ResponseInterface $guzzleResponse
     */
    public function __construct(ResponseInterface $guzzleResponse) {
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
     * Get Api Code
     * @return number|mixed
     */
    public function getApiCode() {
        $body = $this->getBody();
        return isset($body['retCode']) ? $body['retCode'] : -1;
    }

    /**
     * Get Api Message
     * @return string|mixed
     */
    public function getApiMessage() {
        $body = $this->getBody();
        return isset($body['retMsg']) ? $body['retMsg'] : '';
    }

    /**
     * Get Http Response
     * @return ResponseInterface
     */
    public function getHttpResponse() {
        return $this->httpResponse;
    }

    /**
     * Return true if Api Call is successfully, false otherwise
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
     * Get Api Data
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