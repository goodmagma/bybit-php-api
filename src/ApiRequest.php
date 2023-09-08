<?php
namespace ByBit\SDK;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client;
use ByBit\SDK\Exceptions\InvalidApiUriException;
use ByBit\SDK\Exceptions\HttpException;

/**
 * Api Request Wrapper
 *
 */
class ApiRequest {

    /**
     * @var string ByBit API RECV Window
     */
    const BAPI_RECV_WINDOW = "5000";
    
    /**
     * @var string ByBit API Sign Type
     */
    const BAPI_SIGN_TYPE = "2";

    /**
     * @var Http Methods
     */
    const METHOD_GET    = 'GET';
    const METHOD_POST   = 'POST';
    const METHOD_PUT    = 'PUT';
    const METHOD_DELETE = 'DELETE';

    protected $key;
    protected $secret;
    protected $host;
    protected $config = [];

    
    /**
     * Constructor
     * 
     * @param string $key
     * @param string $secret
     * @param string $host
     */
    function __construct(string $key='', string $secret='', string $host='https://api.bybit.com') {
        $this->key = $key;
        $this->secret = $secret;
        $this->host = $host;
    }
    
    
    /**
     * @param string $method
     * @param string $uri
     * @param array $params
     * @param array $headers
     * @param int $timeout
     * @return ResponseInterface
     * @throws Exceptions\HttpException
     * @throws Exceptions\InvalidApiUriException
     */
    public function call($method, $uri, array $params = [], array $headers = [], $timeout = 30) {
        if (!$this->host && strpos($uri, '://') === false) {
            $exception = new InvalidApiUriException('Invalid base_uri or uri, must set base_uri or set uri to a full url');
            throw $exception;
        }
        
        //Guzzle Config
        $config = [
            'base_uri'        => $this->host,
            'timeout'         => $timeout,
            'connect_timeout' => 30,
            'http_errors'     => false
        ] + $this->config;
        
        //initialize options
        $options = [
            'headers' => []
        ];

        //set user agent
        $options['headers']['User-Agent'] = ByBitApi::NAME . '/' . ByBitApi::VERSION;

        //authorization?
        if( !empty($this->key) && !empty($this->secret) ){
            $timestamp = time() * 1000;

            $encoded_params = '';
            if( $method == self::METHOD_GET ){
                foreach ($params as $key => $value) {
                    $encoded_params .= sprintf('%s=%s&', $key, $value);
                }
                $encoded_params = rtrim($encoded_params, '&');
            }
            else{
                $encoded_params = empty($params) ? '' : json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            }

            $signature_params = $timestamp . $this->key . self::BAPI_RECV_WINDOW . $encoded_params;
            $signature = hash_hmac('sha256', $signature_params, $this->secret);

            $options['headers']['X-BAPI-API-KEY'] = $this->key;
            $options['headers']['X-BAPI-SIGN'] = $signature;
            $options['headers']['X-BAPI-SIGN-TYPE'] = self::BAPI_SIGN_TYPE;
            $options['headers']['X-BAPI-TIMESTAMP'] = $timestamp;
            $options['headers']['X-BAPI-RECV-WINDOW'] = self::BAPI_RECV_WINDOW;
        }

        $hasParams = !empty($params);

        switch ($method) {
            case self::METHOD_GET:
                if ($hasParams) {
                    $uri = $uri.'?'.$encoded_params;
                }
                break;
            //case self::METHOD_DELETE:
                //$hasParam AND $options['query'] = $params;
                //break;
            case self::METHOD_PUT:
            case self::METHOD_POST:
                if ($hasParams) {
                    $options['headers']['Content-Type'] = 'application/json';
                    $options[RequestOptions::JSON] = $params;
                }
                break;
            default:
                $exception = new HttpException('Unsupported method ' . $method, 0);
                throw $exception;
        }
        
        //initialize Guzzle Client
        $client = new Client($config);
        
        try {
            $guzzleResponse = $client->request($method, $uri, $options);
            $response = new ApiResponse($guzzleResponse);

            //failed?
            if(!$response->isSuccessful()){
                $exception = new HttpException($response->getApiMessage(), $response->getApiCode());
                throw $exception;
            }

            return $response;
        } 
        catch (\GuzzleHttp\Exception\GuzzleException $e) {
            $exception = new HttpException($e->getMessage(), $e->getCode(), $e);
            throw $exception;
        }
        catch (HttpException $exception) {
            throw $exception;
        } 
        catch (\Exception $e) {
            $exception = new HttpException($e->getMessage(), $e->getCode(), $e);
            throw $exception;
        }
        
    }
}
