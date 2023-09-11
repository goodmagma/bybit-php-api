<?php 

/**
 * This script is used to help me build code directly from API's documentation page getting title, method and URL of the Http Request
 */

/**
 * Template of the function to build
 * @var string $functionTemplate
 */
$functionTemplate = '
    /**
     * #TITLE#
     * @see #API_DOC_URL#
     *
     * @param $params array
     * @return array
     */
    public function #FUNCTION_NAME#($params) {
        $response = $this->call(ApiRequest::METHOD_#HTTP_METHOD#, \'#API_URL#\', $params);
        return $response->getApiData();
    }
';


/**
 * Get the title
 * 
 * @param unknown $htmlContent
 * @return unknown
 */
function get_title($htmlContent) {
    preg_match('/<h1>(.*?)<\/h1>/s', $htmlContent, $matches);
    
    return $matches[1];
}


/**
 * Get the GET request URL or null if not found
 * 
 * @param unknown $htmlContent
 * @return string|array|NULL
 */
function get_get_request($htmlContent) {
    preg_match('/<p>GET(.*?)<\/p>/s', $htmlContent, $matches);
    
    if(!empty($matches[1])){
        $getMethod = $matches[1];
        $getMethod = str_replace("<code>", "", $getMethod);
        $getMethod = str_replace("</code>", "", $getMethod);
        
        return trim($getMethod);
    }
    
    return null;
}


/**
 * Get the POST request URL or null if not found
 *
 * @param unknown $htmlContent
 * @return string|array|NULL
 */
function get_post_request($htmlContent) {
    preg_match('/<p>POST(.*?)<\/p>/s', $htmlContent, $matches);
    
    if(!empty($matches[1])){
        $getMethod = $matches[1];
        $getMethod = str_replace("<code>", "", $getMethod);
        $getMethod = str_replace("</code>", "", $getMethod);
        
        return trim($getMethod);
    }
    
    return null;
}


function build_function($api_doc_url, $title, $get_request, $post_request){
    global $functionTemplate;
    
    $functionContent = $functionTemplate;
    $functionContent = str_replace("#TITLE#", $title, $functionContent);
    $functionContent = str_replace("#API_DOC_URL#", $api_doc_url, $functionContent);
    
    $functionName = lcfirst( str_replace(" ", "", $title) );
    
    $functionContent = str_replace("#FUNCTION_NAME#", $functionName, $functionContent);
    
    if( $get_request != null ){
        $functionContent = str_replace("#HTTP_METHOD#", "GET", $functionContent);
        $functionContent = str_replace("#API_URL#", $get_request, $functionContent);
    }
    else if( $post_request != null ){
        $functionContent = str_replace("#HTTP_METHOD#", "POST", $functionContent);
        $functionContent = str_replace("#API_URL#", $post_request, $functionContent);
    }

    echo $functionContent;
}

$api_doc_url = readline('Insert API URL: ');

$pageContent = file_get_contents($api_doc_url);

$title = get_title($pageContent);

$get_request = get_get_request($pageContent);

$post_request = get_post_request($pageContent);

build_function($api_doc_url, $title, $get_request, $post_request);
